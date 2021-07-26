        <div class="forma">
            <div class="overlayform"></div>
            <?php echo do_shortcode('[contact-form-7 id="132" title="Форма"]'); ?>
        </div>
        <footer>
            <div class="container">
                <div class="foot-block1">
                    <div class="logo-foot">
                        Master[Code]
                    </div>
                    <div class="text"><?php _e( 'Order a consultation', 'wpml' ); ?></div>
                    <a href="##" class="button" id="formfoot"><?php _e( 'Order', 'wpml' ); ?></a>
                </div>
                <div class="foot-block2">
                    <div class="block2-item">
                        <div><?php _e( 'Services', 'wpml' ); ?></div>
                        <ul>
                        <?php wp_nav_menu( [
                            'theme_location'  => 'uslugi',
                            'container'       => '',
	                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            ] ); ?>
                        </ul>
                    </div>
                    <div class="block2-item">
                        <div href="/blog/"><?php _e( 'Blog', 'wpml' ); ?></div>
                        <ul>
                        <?php
                        $args = array(
                            'post_type'      => 'blog',
                            'post_status'    => 'publish',
                            'posts_per_page' => 4,
                        );

                        $query = new WP_Query( $args );

                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post(); ?>
                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php
                            }
                        }
                    
                        wp_reset_postdata();
                        ?>
                        </ul>
                    </div>
                    <div class="block2-item">
                        <div href="##"><?php _e( 'Company', 'wpml' ); ?></div>
                        <ul>
                        <?php wp_nav_menu( [
                            'theme_location'  => 'company',
                            'container'       => '',
	                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            ] ); ?>
                        </ul>
                    </div>
                    <div class="block2-item contact">
                        <div><?php _e( 'Contacts', 'wpml' ); ?></div>
                        <a href="tel:<?php the_field( 'tel_number', 'option' ); ?>" class="contact-item"><?php the_field( 'tel_number', 'option' ); ?></a>
                        <span><?php the_field( 'foot_adress', 'option' ); ?></span>
                    </div>
                    <div class="social">
                        <div><?php _e( 'We are in social networks', 'wpml' ); ?></div>
                        <div class="social-item">
                            <?php if ( have_rows( 'social_link', 'option' ) ) : ?>
	                            <?php while ( have_rows( 'social_link', 'option' ) ) : the_row(); ?>
                            <a href="<?php the_sub_field( 'facebook' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></a>
                            <a href="<?php the_sub_field( 'in' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/patient.png" alt=""></a>
	                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
                <div class="copy">
                    <div><?php the_field( 'tel_rule', 'option' ); ?></div>
                    <a href="<?php the_field( 'link_politic', 'option' ); ?>"><?php _e( 'Privacy Policy', 'wpml' ); ?></a>
                </div>
            </div>    
        </footer>
        <?php wp_footer(); ?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    </body> 
</html>
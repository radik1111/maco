<?php get_header(); ?>

        <div class="container">
            <div class="main-block1">
                <div class="main-block1-item">
                    <div><?php the_field( 'main_zag' ); ?></div>
                    <div><?php the_field( 'main_rules' ); ?></div>
                </div>
                <a href="##" class="button" id="form"><?php _e( 'Order', 'wpml' ); ?></a>
            </div>
            <div class="main-block4">
                <?php if ( have_rows( 'main_seo' ) ) : ?>
                	<?php while ( have_rows( 'main_seo' ) ) : the_row(); ?>
                        <div class="title"><?php the_sub_field( 'main_seo_zag' ); ?></div>
                        <div class="main-block4-items">
                		<?php if ( have_rows( 'main_seo_rep' ) ) : ?>
                			<?php while ( have_rows( 'main_seo_rep' ) ) : the_row(); ?>
                                <div class="main-block4-item">
                                    <a href="<?php the_sub_field( 'main_seo_rep_link' ); ?>">
                                        <div class="item-title"><?php the_sub_field( 'main_seo_rep_zag' ); ?></div>
                                        <div class="item-content"><?php the_sub_field( 'main_seo_rep_text' ); ?></div>
                                        <div class="item-content mob"><?php the_sub_field( 'main_seo_text_formob' ); ?></div>
                        				<?php the_sub_field( 'logo_mob' ); ?>
                                    </a>
                                </div>
                			<?php endwhile; ?>
                		<?php else : ?>
                			<?php // no rows found ?>
                		<?php endif; ?>
                    <div class="clearfix"></div>
                </div>
                	<?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="main-block5">
                <div><?php the_field( 'main_advise' ); ?></div>
                <div><?php the_field( 'main_advise_mob' ); ?></div>
            </div>
            <div class="main-block6">
                <div class="title"><?php _e( 'Cases', 'wpml' ); ?></div>
                <div class="sub-title"></div>
                <div class="cases-items">
                <?php
                    $args = array(
                        'post_type'      => 'cases',
                        'post_status'    => 'publish',
                        'posts_per_page' => 4,
                    );

                    $query = new WP_Query( $args );

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post(); ?>
                            <div class="cases-item">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if ( get_field( 'logo1' ) ) : ?>
                                        <img src="<?php the_field( 'logo1' ); ?>" />
                                    <?php endif ?>
                                    <div><?php the_field( 'logo1_text' ); ?></div>
                                    <div class="zag2"><?php the_field( 'cases_zag2' ); ?></div>
                                    <div><?php the_field( 'logo2_text2' ); ?></div>
                                </a>
                            </div>
                        <?php
                        }
                    }
                    
                    wp_reset_postdata();
                ?>
        </div>
            </div>
            <div class="main-block3">
                <?php if ( have_rows( 'main_tech' ) ) : ?>
                    <?php while ( have_rows( 'main_tech' ) ) : the_row(); ?>
                <div class="title"><?php the_sub_field( 'main_tech_zag' ); ?></div>
                <?php if( wp_is_mobile() ){ ?>
                        <div class="sliderimg_m">
                		<?php if ( have_rows( 'main_tech_rep' ) ) : ?>
                			<?php while ( have_rows( 'main_tech_rep' ) ) : the_row(); ?>
                				<?php if ( get_sub_field( 'main_tech_rep_img' ) ) : ?>
                                    <div class="sliderimg_mob"><img src="<?php the_sub_field( 'main_tech_rep_img' ); ?>" alt=""></div>
                				<?php endif ?>
                			<?php endwhile; ?>
                		<?php else : ?>
                			<?php // no rows found ?>
                		<?php endif; ?>
                	    </div>
                <?php
                } else {
                ?>
                <div class="slider-main">
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                		<?php if ( have_rows( 'main_tech_rep' ) ) : ?>
                			<?php while ( have_rows( 'main_tech_rep' ) ) : the_row(); ?>
                				<?php if ( get_sub_field( 'main_tech_rep_img' ) ) : ?>
                                    <div class="swiper-slide"><img src="<?php the_sub_field( 'main_tech_rep_img' ); ?>" alt=""></div>
                				<?php endif ?>
                			<?php endwhile; ?>
                		<?php else : ?>
                			<?php // no rows found ?>
                		<?php endif; ?>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                	<?php } endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="main-block8">
                <div class="title"><?php _e( 'Blog', 'wpml' ); ?></div>
                <div class="blog-items main">
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
                                <div class="blog-item">
                                    <a href="<?php the_permalink(); ?>" class="permalink"><?php the_field( 'blog_zag' ); ?></a>
                                    <a href="<?php the_permalink(); ?>" class="excerpt">
                                        <?php echo the_excerpt(); ?>
                                        <div class="more"></div>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                        <?php
                        }
                    }
                    
                    wp_reset_postdata();
                ?>
                    <div class="clearfix"></div>
                </div>
                <a href="<?php the_field( 'open_blog' ); ?>" class="back-main"><?php _e( 'Open a blog', 'wpml' ); ?></a>
            </div>
        </div>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        
<?php get_footer(); ?>
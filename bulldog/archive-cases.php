<?php get_header(); ?>
    <div class="container inner cases">
        <div class="banner1">
            <div class="banner1-title"><?php _e( 'Cases', 'wpml' ); ?></div>
            <div class="banner1-desc"><?php _e( 'More than 250 projects have been implemented', 'wpml' ); ?></div>
            <a href="##" class="button" id="form"><?php _e( 'Order', 'wpml' ); ?></a>
        </div>
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>

        <div class="cases-items">
        <?php
        if ( have_posts() ) : while (have_posts()) : the_post();
        ?>
            <div class="cases-item">
                <a href="<?php the_permalink(); ?>">
                    <?php if ( get_field( 'logo2_cases' ) ) : ?>
                    	<img src="<?php the_field( 'logo2_cases' ); ?>" />
                    <?php endif ?>
                    <div><?php the_field( 'logo1_text' ); ?></div>
                    <div class="zag2"><?php the_field( 'cases_zag2' ); ?></div>
                    <div><?php the_field( 'logo2_text2' ); ?></div>
                    <?php if ( get_field( 'logo2_logo2' ) ) : ?>
                        <div class="doplogo">
                            <div class="viewcase"><?php _e( 'View the case', 'wpml' ); ?></div>
                            <div><img src="<?php the_field( 'logo2_logo2' ); ?>" alt="" /></div>
                        </div>
                    <?php endif ?>
                </a>
            </div>
        <?php endwhile;  // завершаем цикл.
        endif;
        wp_reset_query();                
        ?>
        </div>
    </div>
<?php get_footer(); ?>
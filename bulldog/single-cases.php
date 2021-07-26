<?php get_header(); ?>
    <div class="container blog">
        <div class="title"><?php the_title(); ?></div>
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
        <div class="content case">
            <div class="title_zag">
                <?php if ( get_field( 'logo2_cases' ) ) : ?>
                	<img src="<?php the_field( 'logo2_cases' ); ?>" />
                <?php endif ?>
                <div class="clearfix"></div>
            </div>
            <?php the_content(); ?>
        </div>
        <a href="<?php the_field( 'back_cases' ); ?>" class="back"><?php _e( 'Go back to the cases', 'wpml' ); ?></a>
    </div>
<?php get_footer(); ?>
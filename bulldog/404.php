<?php get_header(); ?>

    <div class="container error">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
        <div><?php _e( 'Page not found', 'wpml' ); ?></div>
        <a href="/"><?php _e( 'Go to the main page', 'wpml' ); ?></a>
    </div>    

<?php get_footer(); ?>
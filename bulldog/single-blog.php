<?php get_header(); ?>
    <div class="container blog">
        <div class="title">Блог</div>
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
        <div class="content">
            <div class="title_zag"><?php the_field( 'blog_zag' ); ?></div>
            <?php the_content(); ?>
        </div>
        <a href="<?php the_field( 'back_bloglink' ); ?>" class="back"><?php _e( 'Go back to the blog', 'wpml' ); ?></a>
    </div>
<?php get_footer(); ?>
<?php get_header(); ?>
    <div class="container inner blog">
        <div class="banner1">
            <div class="banner1-title"><?php _e( 'Blog', 'wpml' ); ?></div>
            <a href="##" class="button" id="form"><?php _e( 'Order', 'wpml' ); ?></a>
        </div>
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
        <div class="blog-items">
        <?php
        if ( have_posts() ) : while (have_posts()) : the_post();;      
        ?>
            <div class="blog-item">
                <a href="<?php the_permalink(); ?>" class="permalink"><div class="widthcol2"><?php the_field( 'blog_zag' ); ?></div></a>
                <a href="<?php the_permalink(); ?>" class="excerpt">
                    <?php echo the_excerpt(); ?>
                    <div class="more"></div>
                    <div class="clearfix"></div>
                </a>
            </div>
        <?php endwhile;  // завершаем цикл.
        endif;
        wp_reset_query();
        ?>
        <div class="clearfix"></div>
        </div>        
    </div>
<?php get_footer(); ?>
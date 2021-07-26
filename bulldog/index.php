<?php get_header(); ?>

    <div class="container other">
        <h1 class="title_other"><?php the_title(); ?></h1>
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
    
<?php get_footer(); ?>
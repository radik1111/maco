<?php /**
Template name: Услуги
*/
?>
<?php get_header(); ?>
    <div class="container uslugi">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
        <div class="uslugi-block1">
            <div class="uslugi-logo">
                <?php the_title(); ?>
            </div>
            <div class="uslugi-content"><?php the_field( 'uslugi_desc' ); ?></div>
            <a href="##" class="button" id="form"><?php _e( 'Order', 'wpml' ); ?></a>
        </div>
        <div class="uslugi-block2">
            <div><?php the_field( 'uslugi_advise' ); ?></div>
        </div>
        <?php the_content(); ?>
    </div>

<?php get_footer(); ?>
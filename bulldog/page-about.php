<?php /**
Template name: О компании
*/
?>
<?php get_header(); ?>
    <div class="container about">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
        <div class="about-block1">
        <?php if ( have_rows( 'banner' ) ) : ?>
        	<?php while ( have_rows( 'banner' ) ) : the_row(); ?>
            <div class="about-logo">
                <?php the_sub_field( 'banner_zag' ); ?>
            </div>
            <div class="about-title"><?php the_sub_field( 'banner_desc' ); ?></div>
            <div class="about-content"><?php the_sub_field( 'banner_mission' ); ?></div>
            <a href="##" class="button" id="form"><?php _e( 'Order', 'wpml' ); ?></a>
        </div>
        	<?php endwhile; ?>
        <?php endif; ?>
        <div class="about-block2">
            <div><?php the_field( 'result' ); ?></div>
            <div class="result_mob"><?php the_field( 'result_mob' ); ?></div>
        </div>
        <?php the_content(); ?>
        <div class="main-block3">
            <?php if ( have_rows( 'main_tech_копия' ) ) : ?>
                <?php while ( have_rows( 'main_tech_копия' ) ) : the_row(); ?>
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
                <div class="swiper-container swiper-about">
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
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
<?php get_footer(); ?>
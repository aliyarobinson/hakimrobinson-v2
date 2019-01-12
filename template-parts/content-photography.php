<?php
/**
 * Template part for displaying page content in bio page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hakim_Robinson_2.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="hero">
        <img src="<?php the_field('background_image'); ?>" alt="" class="hero-img">
        <h1>Hakim's <span>Photography</span></h1>
    </section>
    
    <section class="page-content photo-list">
        <div class="wrapper">
        <section class="big-quote-section">
            <div class="wrapper">
                <header class="section-header grid">
                    <h2 class="section-title grid-cell"><?php the_field('header_title'); ?></h2>
                    <div class="section-desc grid-cell">
                        <?php the_field('header_description'); ?>
                    </div>
                </header>
                <section class="section-content">
                    <blockquote class="big-quote">
                        <span class="copy">
                            <?php the_field('quote_text'); ?>
                        </span>
                        <cite><?php the_field('quote_author'); ?></cite>
                    </blockquote>
                </section>
                
            </div>
        </section>
        <section class="photos">

            <?php 
                $images = get_field('photos');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)

                if( $images ): ?>
                    <ul class="photo-list">
                        <?php foreach( $images as $image ): ?>
                            <li class="photo-item">
                                <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; 
            ?>
            <!-- <div class="load-more">
                <button class="cta">More</button>
            </div> -->

            <?php// echo do_shortcode("[ajax_load_more id='2330521045' acf='true' acf_field_type='gallery' acf_field_name='photos' post_type='post' scroll_container='.photos' max_pages='5']"); ?>
            <?php  // echo do_shortcode('[ajax_load_more id="2330521045" acf="true" acf_post_id="7" acf_field_type="gallery" acf_field_name="photos" post_type="post" scroll_container=".photos" max_pages="5" button_label="More" button_loading_label="Loading..."]'); ?>
            <?php // echo do_shortcode('[ajax_load_more preloaded="true" preloaded_amount="4" container_type="div" seo="true" posts_per_page="4" id="2330521045" acf="true" acf_post_id="7" acf_field_type="gallery" acf_field_name="photos" post_type="post" scroll_container=".photos" max_pages="5" button_label="More" button_loading_label="Loading..."]'); ?>
            
            <?php // echo do_shortcode('[ajax_load_more preloaded="true" preloaded_amount="4" posts_per_page="4" pause="true" pause_override="true" scroll="true" button_label="Load More" button_loading_label="Loading..." seo="true" acf="true" acf_field_type="gallery" acf_field_name="alm_gallery" seo="true" container_type="div" transition="fade" images_loaded="true"]'); ?>
        
        </section>
        </div>
    </section>
</article><!-- #post-<?php the_ID(); ?> -->
<?php
/**
 * Template part for displaying page content in a contact page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hakim_Robinson_2.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="hero">
        <img src="<?php the_field('background_image'); ?>" alt="" class="hero-img">
        <h1>Contact <span>The Artist</span></h1>
    </section>
    
    <section class="page-content">
        <div class="wrapper">
        <section class="contact-form">
            <div class="wrapper">
                <header class="section-header grid">
                    <h2 class="section-title grid-cell">Contact HR</h2>
                </header>
                <section class="section-content">
                    <?php echo do_shortcode("[contact-form-7 id='105' title='Contact form 1']"); ?>
                </section>
                
            </div>
        </section>
        </div>
    </section>
</article><!-- #post-<?php the_ID(); ?> -->
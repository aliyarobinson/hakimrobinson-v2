<?php
/**
 * Template part for displaying page content in a general page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hakim_Robinson_2.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="hero">
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
                    <?php the_content(); ?>
                </section>
                
            </div>
        </section>
        </div>
    </section>
</article><!-- #post-<?php the_ID(); ?> -->
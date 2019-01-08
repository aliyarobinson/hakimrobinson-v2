
<?php /* Template Name: Contact Page Template */ ?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hakim_Robinson_2.0
 */

get_header();
?>

<main class="site-content">

    <?php

        get_template_part( 'template-parts/content', 'contact' );

    ?>

</main><!-- #main -->

<?php
get_footer();

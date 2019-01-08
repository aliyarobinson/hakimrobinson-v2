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
        <h1>Hakim's <span>Story</span></h1>
    </section>
    <section class="social-bar">
        <div class="wrapper">
            <span class="social-item">
                <a href="https://www.linkedin.com/in/hakim-robinson-a1807021/" target="_blank">
                <svg aria-hidden="true" class="icon" preserveAspectRatio="xMinYMin meet" viewBox="0 0 240 230" xmlns="http://www.w3.org/2000/svg">
                    <path d="m 2.2013889,150.40278 0,-77.000002 25.5000001,0 25.5,0 0,77.000002 0,77 -25.5,0 -25.5000001,0 0,-77 z m 80.4197121,0.001 0.08029,-76.998054 25.249999,-0.0015 25.25,-0.0015 0,10.616925 0,10.616926 7.75,-7.997137 c 11.73333,-12.10749 21.7969,-16.292039 39.29818,-16.340636 11.3775,-0.03159 16.9837,1.182271 26.77423,5.797196 14.07893,6.636341 23.98891,19.666447 28.87297,37.96357 l 2.62744,9.84316 0.4357,51.75 0.43571,51.75 -25.54364,0 -25.54364,0 -0.3098,-47.75 c -0.30673,-47.27791 -0.33275,-47.807 -2.63116,-53.5156 -4.49538,-11.16525 -11.27185,-15.9125 -23.00744,-16.11788 -9.34281,-0.16349 -14.87481,2.19845 -21.09859,9.00825 -8.10518,8.86836 -8.05996,8.52019 -8.05996,62.05673 l 0,46.3185 -25.33029,0 -25.330285,0 0.08029,-76.99853 z M 18.566099,50.372329 C 12.615368,48.536435 5.9951784,43.12758 2.8884677,37.563326 -2.1615895,28.518454 -0.97146268,16.515381 5.7697646,8.5038868 10.617771,2.7423597 16.559445,0.07757299 25.609281,-0.39395391 c 9.91319,-0.51651055 14.93493,0.7509843 20.840406,5.26015111 6.398293,4.8854597 9.758305,11.9589148 9.72974,20.4829248 -0.03593,10.721329 -5.396471,19.088196 -14.978038,23.37809 -5.10305,2.284756 -17.614581,3.194086 -22.63529,1.645117 z"></path>
                </svg>
                <span class="hide-copy" aria-label="My Linkedin Account">  
                    Linkedin
                </span>
                </a>
            </span>
        </div>
    </section>
    <section class="bio-content">
        <div class="wrapper">
            <aside class="highlights">
                <h2>Highlights:</h2>

                <?php if( have_rows('highlights') ): ?>
 
                    <ul>

                    <?php while( have_rows('highlights') ): the_row(); ?>

                        <li>
                            <h3><?php the_sub_field('title'); ?></h3>
                            <div>
                                <?php the_sub_field('point'); ?>
                            </div>
                        </li>
                        
                    <?php endwhile; ?>

                    </ul>

                <?php endif; ?>
            </aside>
            <div class="bio-copy">
                <?php the_field('bio_copy'); ?>
            </div>
        </div>
    </section>
</article><!-- #post-<?php the_ID(); ?> -->
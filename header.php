<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hakim_Robinson_2.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="http://artbyayr.com/hr_staging/wp-content/themes/hr2/img/favicon.png" type="image/png">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text hide-copy" href="#content"><?php esc_html_e( 'Skip to content', 'hr2' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="wrapper">
			
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                <span class="hide-copy">><?php bloginfo( 'name' ); ?></span>
                <svg version="1.1" id="header-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 1954.4 788.16" style="enable-background:new 0 0 1954.4 788.16;" xml:space="preserve">
                    <style type="text/css">
                        .st0{display:none;fill:rgba(255,255,255,1);}
                        .st1{display:none;}
                        .st2{display:inline;fill:rgba(255,255,255,1);}
                        .st3{fill:rgba(255,255,255,1);}
                    </style>
                    <rect x="-181.36" y="628.76" class="st0" width="1479" height="785"/>
                    <g class="st1">
                        <polygon class="st2" points="444.83,904.72 476.51,904.54 469.76,920.74 437.72,920.65 	"/>
                        <polygon class="st2" points="492.83,904.72 524.51,904.54 517.76,920.74 485.72,920.65 	"/>
                        <polygon class="st2" points="396.83,904.72 428.51,904.54 421.76,920.74 389.72,920.65 	"/>
                        <text transform="matrix(1 0 0 1 386.9601 954.86)" class="st2" style="font-family:'ShareTech-Regular'; font-size:37px;">HR</text>
                    </g>
                    <g>
                        <polygon class="st3" points="810.62,51.58 1241.2,49.13 1149.46,269.31 713.98,268.09 	"/>
                        <polygon class="st3" points="1463.01,51.58 1893.59,49.13 1801.85,269.31 1366.38,268.09 	"/>
                        <polygon class="st3" points="158.22,51.58 588.8,49.13 497.06,269.31 61.59,268.09 	"/>
                        <g>
                            <path class="st3" d="M214.17,733.06V571.13H110.58v161.93H66.83V381.04h43.75v152.88h103.59V381.04h43.75v352.02H214.17z"/>
                            <path class="st3" d="M431.92,587.22h-44.76v145.84h-43.75V381.04h90.02c28.49,0,50.04,6.29,64.62,18.86
                                c14.58,12.57,21.88,32.44,21.88,59.59v48.28c0,37.89-15.09,61.52-45.26,70.91l69.9,154.39h-47.77L431.92,587.22z M467.37,427.3
                                c-5.87-5.7-15.17-8.55-27.91-8.55h-52.3V549.5h52.3c12.74,0,22.04-2.93,27.91-8.8c5.86-5.86,8.8-15.17,8.8-27.91v-57.83
                                C476.17,442.22,473.23,433.01,467.37,427.3z"/>
                        </g>
                    </g>
                </svg>
            </a>

			<button class="menu-btn hide-copy">
				menu
				<span class="menu-nav-btn__bar"></span>
				<span class="menu-nav-btn__bar"></span>
				<span class="menu-nav-btn__bar"></span>
			</button>

			<nav class="site-nav">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->

		</div><!-- .wrapper -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">

<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<!-- Main header -->
<header id="header">

    <div class="header-wrapper">

        <div class="right-container">
            <a href="javascript:;">
                Aller sur cocomodel.fr
            </a>
        </div>

        <div class="logo">
            <a href="javascript:;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg"
                     alt="Cocomodel logo"
                     width="140px"/>
            </a>
        </div>

    </div>


</header>


<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$id = get_the_ID();
$post = get_post($id);
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <h2 class="main-title">Blog</h2>
            <div class="post-content">
                <?php echo apply_filters( 'the_content', $post->post_content ); ?>
            </div>





		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>

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
$prev_post = get_previous_post();
$next_post = get_next_post();

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="previous-cta">
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/previous.png" alt="" width="16px"/>
                </span>
                <span>Previous</span>
            </a>
            <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="next-cta">
                <span>Next</span>
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/next.png" alt="" width="16px"/>
                </span>
            </a>

            <h2 class="main-title">Blog</h2>
            <div class="post-content">
                <?php echo apply_filters( 'the_content', $post->post_content ); ?>
            </div>





		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>

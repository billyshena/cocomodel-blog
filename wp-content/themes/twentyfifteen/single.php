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
$url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
wp_head();
?>

<!-- Article header -->
<div id="single-header" style="background: url(<?php echo $url[0]; ?>) center center no-repeat; background-size:cover">
    <header>

        <a href="javascript:;" class="scoledge-cta">
            Aller sur scoledge.com
        </a>
        <div class="logo">
            <a href="javascript:;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/scoledge-logo.png" alt="Scolege logo" width="80px"/>
            </a>
        </div>



    </header>
</div>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <h1 class="single-title">
            <?php echo get_the_title(); ?>
        </h1>
        <div class="post-content">
            <?php echo apply_filters( 'the_content', $post->post_content ); ?>
        </div>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>

<?php
$video_content = get_post_meta(get_the_ID(), 'framework-video-markup', true);
if ($video_content) {
    ?>
    <div class="post-video">
        <?php echo get_post_meta(get_the_ID(), 'framework-video-markup', true); ?>
    </div>
<?php } ?>

<div class="blog-post contant-main">		
    <div class="post-image">
        <?php
        if (is_sticky()) {
            echo '<div class="sticky_post_icon pull-right" title="' . esc_html__('Sticky Post', 'cleaning-services') . '"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></div>';
        }
        ?>
    </div>
    <?php cleaning_services_posted_on(); ?>
    <?php get_template_part('template-parts/content/content'); ?>
</div>
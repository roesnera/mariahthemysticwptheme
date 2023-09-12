<?php get_header(); ?>

<main class="blog-page">
<?php 
while(have_posts()){
    the_post(); ?>

        <div class="blog-preview-container">
            <div class="blog-preview--title">
                <?php echo the_title(); ?>
            </div>
            <div class="blog-preview--date">
                date: <?php echo the_date(); ?>
            </div>
            <img src="<?php echo the_post_thumbnail_url() ?>" class="blog-preview--image"/>
        </div>

<?php } ?>

    </main>
    
<?php 
    get_footer();
?>
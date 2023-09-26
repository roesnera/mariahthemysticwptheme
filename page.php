<?php get_header(); ?>

<?php
while (have_posts()) {
    the_post();
} ?>
<main>
    <h2><?php

        if (is_cart()) {
            echo 'Your Cart';
        } else {
            the_title();
        }
        ?></h2>
    <?php the_content() ?>


</main>
<?php
get_footer();
?>
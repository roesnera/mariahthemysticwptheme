<?php get_header(); ?>

<?php 
while(have_posts()){
    the_post();
} ?>


<main class="shop-page">
        <div class="items-container">
            <a href="<?php echo site_url('product') ?>" class="item">
                <img src="<?php echo get_theme_file_uri("assets/images/pexels-evg-kowalievska-1040173.jpg")?>" alt="" class="item-image">
                <div class="item-name">Item 1</div>
                <div class="item-price">$9.99</div>
            </a>
            <a href="<?php echo site_url('product') ?>" class="item">
                <img src="<?php echo get_theme_file_uri("assets/images/pexels-rio-kuncoro-2866119.jpg")?>" alt="" class="item-image">
                <div class="item-name">Item 2</div>
                <div class="item-price">$14.99</div>
            </a>
            <a href="<?php echo site_url('product') ?>" class="item">
                <img src="<?php echo get_theme_file_uri("assets/images/pexels-timothy-paule-ii-2002717.jpg")?>" alt="" class="item-image">
                <div class="item-name">Item 3</div>
                <div class="item-price">$29.99</div>
            </a>
            <a href="<?php echo site_url('product') ?>" class="item">
                <img src="" alt="" class="item-image">
                <div class="item-name">Item 4</div>
                <div class="item-price">$16.99</div>
            </a>
            <a href="<?php echo site_url('product') ?>" class="item">
                <img src="" alt="" class="item-image">
                <div class="item-name">Item 5</div>
                <div class="item-price">$6.99</div>
            </a>
            <a href="<?php echo site_url('product') ?>" class="item">
                <img src="" alt="" class="item-image">
                <div class="item-name">Item 6</div>
                <div class="item-price">$49.99</div>
            </a>
        </div>
    </main>


<?php 
    get_footer();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php wp_head() ?>
</head>

<body>
    <header class="header">
    </header>
    <nav>
        <ul class="navigation">
            <a href="<?php echo site_url('shop') ?>">
                <li class="navigation--item <?php if (class_exists('WooCommerce') && (is_shop() || is_product() || is_product_category()) || is_page('shop')) echo 'navigation--item__active' ?>" title="shop"></li>
            </a>
            <a href="<?php echo site_url('blog') ?>">
                <li class="navigation--item <?php if (is_home()) echo 'navigation--item__active' ?>" title="blog"></li>
            </a>
            <a href="<?php echo site_url('collab') ?>">
                <li class="navigation--item <?php if (is_page('collab')) echo 'navigation--item__active' ?>" title="collab"></li>
            </a>
            <a href="<?php echo site_url('portfolio') ?>">
                <li class="navigation--item <?php if (is_page('portfolio')) echo 'navigation--item__active' ?>" title="portfolio"></li>
            </a>
            <a href="<?php echo site_url('contact') ?>">
                <li class="navigation--item <?php if (is_page('contact')) echo 'navigation--item__active' ?>" title="contact"></li>
            </a>
        </ul>
    </nav>
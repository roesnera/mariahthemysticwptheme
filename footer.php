    <footer class="footer"></footer>
    <?php 
    if(class_exists( "WooCommerce") && is_product()) echo "<div class='product-zoom-wrapper'>";
    wp_footer();
    if(class_exists( "WooCommerce") && is_product()) echo "</div>";
    ?>
    </body>
</html>
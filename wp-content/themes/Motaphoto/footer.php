<footer class="site-footer">
    <div class="footer-container">
        <nav class="footer-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer_menu',
                'menu_class' => 'footer-menu',
                'container' => false,
            ));
            ?>
        </nav>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
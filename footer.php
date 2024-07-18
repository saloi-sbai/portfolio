<footer id="footer" role="contentinfo">
    <?php
    wp_nav_menu(array(
        'footer menu' => 'footer_menu',
        'container' => 'false',
        'menu_class' => 'footer-nav',
    ));
    ?>

</footer>

<?php wp_footer() ?>

</body>
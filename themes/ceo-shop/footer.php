    <footer>
        <div class="footer-content">
            <div class="site-logo">
                <a href="<?php echo site_url();?>">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="Logo sklepu" class="site-logo">
                </a>
            </div>
            <nav>
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer_menu'
                )); ?>
            </nav>
            <p>Wszelkie prawa zastrzeżone @ 2026</p>
        </div>
    </footer>
</div>


<?php wp_footer(); ?>
</body>
</html>
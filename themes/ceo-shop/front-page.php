<?php get_header(); ?>

<main>
    <div class="container">
        <div class="hero-section">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/frontpage/hero.png'; ?>" alt="Living room with stylish furnitures">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/frontpage/person.png'; ?>" alt="walking person" id="walkingperson">
            <span>We design <p>the feeling</p> <p>of you</p></span>
            <p>Whatever you feel</p>
            <div class="bottompart">
                <p>Should guide your new experience, one step at a time, toward your dreamspace living.</p>
                <a href="#">Get my feeling</a>
            </div>
        </div>
        <div class="categories-section">
            <div class="three-blocks-layout">
                <a class="categories-block kitchen-block" href="#">
                    <span>Kitchen</span>
                </a>
                <a class="categories-block bedroom-block" href="#">
                    <span>Bedroom</span>
                </a>
                <a class="categories-block livingroom-block" href="#">
                    <span>Living room</span>
                </a>
            </div>
        </div>
        <div class="products-section">
            woo-products presentation
        </div>
        <div class="banner-section">
            banner image
        </div>
        <div class="newsletter-section">
            form for newsletter
        </div>
    </div>
</main>

<?php get_footer(); ?>
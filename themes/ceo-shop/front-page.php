<?php get_header('home'); ?>

<main>
    <div class="hero-section">
        <div class="container">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/frontpage/lampa.webp'; ?>" alt="walking person" id="walkingperson">
            <span>We design <p>the feeling</p> <p>of you</p></span>
            <p id="herosmalltext">Whatever you feel</p>
            <div class="bottompart">
                <p>Should guide your new experience, one step at a time, toward your dreamspace living.</p>
                <a href="#">Get my feeling</a>
            </div>
        </div>
    </div>

    <div class="container">
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
        <div class="aboutus-section">
            <div class="leftcontainer">
                <div class="toptext">
                    <span>ABOUT</span>
                    <h1>OURA CO.</h1>
                </div>
                    <p>We believe interior design is more than just aesthetics - it's about creating spaces that inspire, function beautifully, and reflect the people who live or work in them.</p>
                
                <img src="<?php echo get_template_directory_uri() . '/assets/img/frontpage/hero.webp'?>" alt="Furnites by OURA CO">
            </div>
            <div class="rightcontainer">
                <div class="aboutblock">
                    <p>years into reimagining spaces - and rewriting the rules of interior design</p>
                    <span>4</span>
                </div>
                <div class="aboutblock">
                    <p>years into reimagining spaces - and rewriting the rules of interior design</p>
                    <span>20</span>
                </div>
                <div class="aboutblock">
                    <p>years into reimagining spaces - and rewriting the rules of interior design</p>
                    <span>62</span>
                </div>
                <div class="aboutblock">
                    <p>years into reimagining spaces - and rewriting the rules of interior design</p>
                    <div class="linkwitharrow">
                        <a href="#">Learn more</a>
                        <?php include get_template_directory() . '/assets/icons/right2.svg'; ?>
                    </div>
                </div>
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
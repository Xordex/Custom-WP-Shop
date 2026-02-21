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
                        <?php get_icon('right'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-section">
            <a href="#"><h2>The most popular <?php get_icon('right'); ?></h2></a>

            <div class="products-grid">
                <?php
                // Sprawdzenie czy Woo Istnieje
                if (class_exists('WooCommerce')) {
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 4
                    );

                    $query = new WP_Query($args);

                    if($query->have_posts()) {
                        while($query->have_posts()) {
                            $query->the_post();
                            $product = wc_get_product(get_the_ID());
                            ?>

                    <div class="product-card">
                        <a href="<?php echo get_permalink();?>">
                            <div class="product-img">
                                <?php the_post_thumbnail('medium'); ?>
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                            <p><?php the_title();?></p>
                        </a>
                        <span><?php echo $product->get_price_html();?></span>
                        </div>

                            <?php
                        }
                    }

                    wp_reset_postdata();
                }
                ?>
            </div>
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
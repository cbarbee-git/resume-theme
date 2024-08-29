<?php get_header(); ?>
    <section id="hero">
        <div class="background-video-container">
            <video class="elementor-background-video-hosted elementor-html5-video" autoplay="" muted="" playsinline="" loop=""
             src="<?php echo(get_site_url()); ?>/wp-content/uploads/2024/08/green-paint-in-water.mov"
            style="width: 1920px; height: 1080px;"></video>
        </div>
        <div class="container">
            <section class="inner-section">
                <div class="widget-container">
                    <div class="divider">
                        <span class="divider-separator">
                            &nbsp;
                        </span>
                    </div>
                    <h1><?php echo(get_field('hero_headline',get_the_ID())) ?></h1>
                    <h2><?php echo(get_field('hero_subhead',get_the_ID())) ?></h2>

                </div>
                <div class="widget-container">
                    <div class="big-button-container">
                        <a href="<?php echo(get_field('hero_call_to_action_page',get_the_ID())) ?>">
                            <?php echo(get_field('hero_call_to_action',get_the_ID())) ?>
                        </a>
                    </div>
                </div>
                <div class="widget-container summary">
                    <?php echo(get_field('hero_summary',get_the_ID())) ?>
                </div>
            </section>
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <section class="inner-section">
                <div class="widget-container">
                    <div class="divider">
                        <span class="divider-separator">
                            &nbsp;
                        </span>
                    </div>
                    <h3 class="heading-title">Skills.</h3>

                </div>
                <div class="widget-container">
                    <h4 class="subheading-title">Over 20+ years of web development experience &amp; insights</h4>
                </div>

                 

            </section>
        </div>

        <div class="container">
           <div class="row cards">
                <div class="col card">
                    <div class="card-icon">
                        <?php echo(file_get_contents( get_site_url() . '/wp-content/themes/chads-resume/assets/images/coding-html.svg')); ?>
                    </div>
                    <h5>FrontEnd Design</h5>
                    <p>Anyone can design a beautiful website. I can build one that functions. Having built sites using a wide stack of frontend technologies, I have worked with a vast array of clients &amp; industries. I can anticipate the unique challenges you may face.</p>
                </div>
                <div class="col card">
                    <div class="card-icon data-icon">
                        <?php echo(file_get_contents( get_site_url() . '/wp-content/themes/chads-resume/assets/images/database.svg')); ?>
                    </div>
                    <h5>Backend Developement</h5>
                    <p>Data is boring. But you'd better know how to use it. Breathe easy, I come with a keen understanding of relational databases. I can help you take control of your data and backend processes. Heck, I can even connect your existing systems through API requests.</p>
                </div>
                <div class="col card last">
                    <div class="card-icon">
                        <?php echo(file_get_contents( get_site_url() . '/wp-content/themes/chads-resume/assets/images/seo-monitoring.svg')); ?>
                    </div>
                    <h5>Get Found (SEO)</h5>
                    <p>I know what robots want. I am able to improve your search ranking so you have the greatest opportunity to excite your customers. I can better your site's web accessibility and boost it's impact on your SEO ranking.</p>
                </div>
            </div>
        </div>

    </section>

    <section id="hp-slider">
        <div class="container">
            <?php echo( do_shortcode("[chad_carousel id='93']") ); ?>
        </div>
        <p class="full-portfolio"><a href="<?php echo(the_permalink(10)) ?>">See my full portfolio <i class="fa-solid fa-arrow-right"></i></a></p>
    
    </section>

    
<?php get_footer();?>
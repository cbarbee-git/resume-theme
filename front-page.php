<?php get_header(); ?>
    <section id="hero">
        <div class="background-video-container">
            <video class="" autoplay="" muted="" playsinline="" loop=""
             src="<?php echo( get_field('hero_media_file',get_the_ID()) ); ?>"
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
                    <h3 class="heading-title"><?php echo(get_field('intro_headline',get_the_ID())); ?></h3>

                </div>
                <div class="widget-container">
                    <h4 class="subheading-title"><?php echo(get_field('intro_subhead',get_the_ID())); ?></h4>
                </div>

            </section>
        </div>

        <?php
         $cards = get_field('homepage_cards',get_the_ID());
         if($cards) :
        ?>
        <div class="container">
            <div class="row cards">
                <?php
                foreach ( $cards as $key => $card ) {
                    $last_class = ($key === array_key_last($cards)) ? 'last' : '';
                ?>
                    <div class="col card <?php echo($last_class); ?>">
                        <div class="card-icon">
                            <?php echo( file_get_contents( get_template_directory_uri() . '/assets/images/'. $card['card_icon'] ) ); ?>
                        </div>
                        <h5><?php echo($card['card_headline']); ?></h5>
                        <p><?php echo($card['card_content']); ?></p>
                    </div>
                <?
                }
                ?>
            </div>    
        </div>
        <?php
        endif;
        ?>

    </section>

    <section id="hp-slider">
        <div class="container">
            <section class="inner-section">
                <div class="divider">
                        <span class="divider-separator">
                            &nbsp;
                        </span>
                </div>
                <h3 class="heading-title"><?php echo(get_field('carousel_headline',get_the_ID())); ?></h3>
            </section>
        </div>
        <div class="container">
            <?php echo( do_shortcode(get_field('carousel_shortcode',get_the_ID())) ); ?>
        </div>
        <p class="full-portfolio"><a href="<?php echo(get_field('portfolio_page_link',get_the_ID())); ?>"><?php echo(get_field('portfolio_page_cta',get_the_ID())); ?> <?php echo(get_field('portfolio_cta_icon',get_the_ID())) ?></a></p>
    </section>

    
<?php get_footer();?>
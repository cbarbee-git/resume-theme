<?php get_header(); ?>
    <div class="error-page-msg-wrapper">
        <div class="img">
            <img src="<?php echo(get_site_url()) ?>/wp-content/uploads/2024/08/bob-odenkirk-in-nobody.webp" alt="" title="" />
        </div>
        <div class="message"> 
            <h1>Oops! Page Not Found.</h1>
            <h2>I was trying to keep damage to a minimum.</h2>
            <h3>Could've been you....could've been me.</h3>
            <div class="button-container">
                <a class="button" href="<?php echo(get_site_url()) ?>">BACK TO HOME</a> 
            </div> 
        </div>
    </div>
    <section id="contact">
        <h4>Okay, it was probably me. Let me know.</h4>
        <?php echo(do_shortcode('[wpforms id="106"]'));; ?>
    </section>
<?php get_footer(); ?>

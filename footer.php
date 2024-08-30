    <section id="callout">
        <div class="container">
           <div class="row">
                <div class="col">
                    <div class="col_wrapper">
                    <a class="social-links" href="https://github.com/cbarbee-git">
                        <i class="fa-brands fa-github-alt"></i>
                    </a>
                    <a class="social-links" href="https://www.linkedin.com/in/chad-barbee-937217250/">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    </div>
                </div>
                <div class="col center">
                    <div class="col_wrapper">
                        <h6 class="callout_headline">Let's build something together.</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="col_wrapper">
                        <div class="big-button-container">
                            <a id="footer-btn" href="<?php echo(get_site_url()); ?>/contact/">
                                Contact Me
                            </a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </section>

        <footer>
            <section>
                <p style="text-align: center">&copy; <?php echo(date("Y")); ?> ChadBarbee.com</p>
            </section>
        </footer>
    </div>
<?php wp_footer(); ?>
<?php  if ( is_front_page() ) : ?>
    <script>
        jQuery(document).ready( function($) {
            $('.slide figure figcaption').on("mouseover", function(e) {
                e.preventDefault();
                const elm = e.currentTarget;
                $(elm).css('text-decoration', 'underline');
                console.log('here.');
            });
            $('.slide figure figcaption').on("mouseout", function(e) {
                e.preventDefault();
                const elm = e.currentTarget;
                $(elm).css('text-decoration', 'none');
                console.log('here.');
            });
            $('.slide figure figcaption').on("click", function(e) {
                e.preventDefault();
                const elm = e.currentTarget;
                window.location.href = $(elm).attr('data-url');
            });
        });
    </script>
<?php endif; ?>
</body>
</html>
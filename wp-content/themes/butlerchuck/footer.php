        <footer class="site-footer">
            <div class="row">
                <div class="columns small-12 large-8">
                    <div class="footer-text">
                        <span class="address">1234 Street Name <br class="show-for-small-only"><span class="hide-for-small-only">•</span> City, TX 78702 • <a href="#"> See Map »</a></span><br>
                        <span class="copyright">©Copyright <?php echo date('Y'); ?> [Client Name]. All rights reserved.</span>
                    </div>
                </div>

                <div class="columns small-12 large-4">
                    <div class="footer-right">
                        <div class="copyright text-center">
                            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="button">Contact Us</a><br>
                            <span class="telephone"><a href="tel:1234567890"> TEL (123) 456-7890</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div><!-- Closing tag for page-wrapper -->

    <!-- Include analytics -->
    <?php get_template_part('analytics'); ?>

    <?php wp_footer(); ?>
</body>
</html>

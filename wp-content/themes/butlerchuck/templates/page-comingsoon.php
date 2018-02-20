<?php
/**
 * Template Name: Page - Coming Soon
 */
get_header('comingsoon'); ?>

<?php while (have_posts()): the_post(); ?>
    <section class="page-section coming-soon">
        <div class="coming-soon-wrapper text-center">
            <div class="rm-m-top coming-soon-banner">
                <h2>Full Website Coming Soon</h2>
            </div>
            <div class="coming-soon-content">
                <div class="row">
                    <div class="small-12 columns text-center">
                        <div class="coming-soon-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_url'); ?>/site/images/butler_chuck_logo.svg" alt="<?php bloginfo('name'); ?>" /></a>
                        </div>
                        <h1 class="coming-soon-headline">Tagline or mission statement goes here.</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 medium-12 large-4 columns text-center">
                        <h2 class="compressed-font cta-title">Email</h2>
                        <a href="mailto:name@email.com" class="button email">name@email.com</a>
                    </div>
                    <div class="small-12 medium-12 large-4 columns text-center">
                        <h2 class="compressed-font cta-title">Phone</h2>
                        <a href="tel:15120000000" class="button telephone">(512) 000-0000</a>
                        <p><strong>Office hours:</strong><br>
                        8 a.m. - 5 p.m.<br>
                        (Central Time)</p>
                    </div>
                    <div class="small-12 medium-12 large-4 columns text-center">
                        <h2 class="compressed-font cta-title">Address</h2>
                        <div class="coming-soon-address">
                            <p>
                                <strong>Company Name</strong><br>
                                1234 Street Name <br class="hide-for-small-only">
                                Suite 1515<br>
                                Austin, TX 78702
                            </p>
                            <a href="#" class="button">View Map</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php get_footer('comingsoon'); ?>

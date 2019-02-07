<?php
/**
 * The template for displaying the footer v1.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package vodi
 */

?>
            </div><!-- /.site-content-inner -->

        <?php do_action( 'vodi_content_bottom' ); ?>
        
    </div><!-- #content -->

    <?php do_action( 'vodi_before_footer' ); ?>

    <footer id="colophon" class="site-footer site__footer--v1 dark" role="contentinfo">
        <div class="container">

            <?php
            /**
             * Functions hooked in to vodi_footer_v1 action
             *
             * @hooked vodi_footer_top_bar  - 10
             * @hooked vodi_footer_widgets  - 20
             * @hooked vodi_credit          - 30
             */
            do_action( 'vodi_footer_v1' );
            ?>

        </div><!-- .container -->
    </footer><!-- #colophon -->

    <?php do_action( 'vodi_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
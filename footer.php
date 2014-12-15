<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Bloom
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-info">
                        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'bloom' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'bloom' ), 'WordPress' ); ?></a>
                        <span class="sep"> | </span>
                        <?php printf( __( 'Theme: %1$s by %2$s.', 'bloom' ), 'Bloom', '<a href="http://hasin.me" rel="designer">Hasin Hayder</a>' ); ?>
                    </div><!-- .site-info -->
                </div>
            </div>
        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

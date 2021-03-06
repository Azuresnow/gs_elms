<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elms_College_Redesign
 */


$address = get_field("address", "option");
$site_info = get_field("site_info", "option");
$library_footer_info = get_field("library_footer_info", "option");
?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer pure-g" role="contentinfo">
		<div class="site-identity pure-u-1 pure-u-lg-7-24">
  		<div class="site-branding footer-item-inner">
  				<p class="site-title"><a href="<?php echo esc_url( real_homepage_link() ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
          <?php print $address ?>
  		</div><!-- .site-branding -->
		</div><!-- .site-info -->
		<div class="site-info pure-u-1 pure-u-lg-9-24">
      <div class="footer-item-inner">
        <?php print $site_info ?>
      </div>
		</div><!-- .site-info -->
		<div class="site-resources pure-u-1 pure-u-lg-8-24">
      <div class="footer-item-inner library-footer-info">
        <?php echo $library_footer_info ?>
      </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

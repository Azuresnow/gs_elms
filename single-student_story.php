<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Elms_College_Redesign
 */

$main_pre_title = get_field("main_pre_title");

$has_sidebar = gs_is_active_sidebar();

get_header(); ?>

  <div class="section-heading">
      <h1 class="field-title <?php if (!$main_pre_title): ?>no-pre-title<?php endif;?>">
        <?php 
        if (get_the_title()) {
          the_title();
        }
        else {
          tribe_events_title(); 
        } ?>
        <?php if (!is_single() && !is_page()) { print rss_link($GLOBALS['wp_the_query']); } ?>
      </h1>
  </div>
	<div id="primary" class="content-area pure-g">
		<main id="main" class="site-main pure-u-1 <?php echo ($has_sidebar ? "pure-u-md-7-12 pure-u-lg-2-3" : "standalone") ; ?>" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
    <?php if ($has_sidebar) : ?>
      <div class="page-sidebar pure-u-1 pure-u-md-5-12 pure-u-lg-1-3">
        <?php get_sidebar(); ?>
      </div>
    <?php endif; ?>
    
	</div><!-- #primary -->

<?php
get_footer();

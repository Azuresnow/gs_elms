<?php
/**
 * Template Name: Building Template
 * This template has been customized to pages for each building.
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

get_header(); ?>

<div class="section-heading">
	<h1 class="field-title">
		<?php the_title() ;?>
	</h1>
</div>

<div id="primary" class="content-area pure-g">
	<main id="main" class="site-main pure-u-1 standalone" role="main">

		<div class="field-content">
			<?php the_content() ?>
		</div>


	</main><!-- #main -->    
</div><!-- #primary -->

<?php
get_footer();
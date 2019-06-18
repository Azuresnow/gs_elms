


  <script src="/wp-content/themes/gs_elms/js/popper.min.js"></script>
  <script src="/wp-content/themes/gs_elms/js/bootstrap.min.js"></script>
  <script src="/wp-content/themes/gs_elms/js/jquery.easing.1.3.js"></script>
  <script src="/wp-content/themes/gs_elms/js/jquery.waypoints.min.js"></script>
  <script src="/wp-content/themes/gs_elms/js/jquery.stellar.min.js"></script>
  <script src="/wp-content/themes/gs_elms/js/owl.carousel.min.js"></script>
  <script src="/wp-content/themes/gs_elms/js/jquery.magnific-popup.min.js"></script>
  <script src="/wp-content/themes/gs_elms/js/aos.js"></script>
  <script src="/wp-content/themes/gs_elms/js/jquery.animateNumber.min.js"></script>
  <script src="/wp-content/themes/gs_elms/js/bootstrap-datepicker.js"></script>
  <script src="/wp-content/themes/gs_elms/js/jquery.timepicker.min.js"></script>
  <script src="/wp-content/themes/gs_elms/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/wp-content/themes/gs_elms/js/google-map.js"></script>
  <script src="/wp-content/themes/gs_elms/js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/gs_elms/css/style.css"
	   <link rel="stylesheet" type="text/css" href="/wp-content/themes/gs_elms/css/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/gs_elms/css/animate.css">
    
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/gs_elms/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/gs_elms/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/gs_elms/css/magnific-popup.css">

    <link rel="stylesheet" type="text/css" href="/wp-content/themes/gs_elms/css/aos.css">

    <link rel="stylesheet" type="text/css" href="/wp-content/themes/gs_elms/css/ionicons.min.css">

    <link rel="stylesheet" type="text/css" href="/wp-content/themes/gs_elms/css/bootstrap-datepicker.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/gs_elms/css/jquery.timepicker.css">

    
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/gs_elms/css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/gs_elms/css/icomoon.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/gs_elms/css/style.css">



<?php
global $fake_id;
global $post;
if (isset($fake_id)) {
  $post = get_post($fake_id);
}
else {
  $fake_id = $post->ID;
}

setup_postdata($post);
 ?>

		    <?php
			while ( have_posts() ) : the_post();
			$hero_video_desktop     = get_field("hero_video_desktop", $fake_id);
			$hero_video_mobile      = get_field("hero_video_mobile", $fake_id);
			$hero_poster            = get_field("hero_poster");

        $hero_columns = get_field("hero_columns", $fake_id);
        
        $mission_statement = get_field("mission_statement", $fake_id);
        $mission_statement_pre_title = get_field("mission_statement_pre_title", $fake_id);
        $mission_statement_body = get_field("mission_statement_body", $fake_id);
        
        $statistics = get_field("statistics", $fake_id);
        $statistics_background = get_field("statistics_background_new", $fake_id);
        
        $news_events_pre_title = get_field("news_events_pre_title", $fake_id);
        $news_events_title = get_field("news_events_title", $fake_id);
        $event_sources = get_field("event_sources", $fake_id);
        $events = get_upcoming_events(4, $event_sources);
        
        $calls_to_action_pre_title = get_field("calls_to_action_pre_title", $fake_id);
        $calls_to_action_title = get_field("calls_to_action_title", $fake_id);
        $calls_to_action = get_field("calls_to_action", $fake_id);
        ?>

        <!-- <?php print($hero_video_desktop); ?> -->
        <!-- <?php print($hero_video_mobile); ?> -->
      <div class="section-homepage_focus">
        <div id="homepage-focus">
            <?php if ( wp_is_mobile() ) {
                Echo "<video loop muted autoplay controls preload='true' width='100%' height='auto' poster='$hero_poster'>";
            } else {
                Echo "<video loop muted autoplay preload='true' width='100%' height='auto' poster='$hero_poster'>";
            }
            ?>
            <?php if (  wp_is_mobile() && get_field("hero_video_mobile") ) {
                Echo "<source src='$hero_video_mobile' type='video/mp4'>";
            } else {
                Echo "<source src='$hero_video_desktop' type='video/mp4'>";
            }
            ?>
            </video>
        </div>
        <?php if( get_field("hero_overlay") ): ?>
            <div id="hero-overlay"><?php the_field("hero_overlay"); ?>
                <a href="#homepage_content">&#8964;</a>
            </div>
        <?php endif; ?>
        <?php if( get_field("highlight_news_link") ): ?>
		<div id="highlight_news">
                	<?php the_field("highlight_news_text"); ?> <a id="highlight_news_link" href="<?php the_field("highlight_news_link"); ?>"><?php the_field("highlight_news_link_text"); ?></a>
		</div>
        <?php endif; ?>       




      </div>
<section class="ftco-animate"> 
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			</section>
		
      <div id="homepage_content" class="section-mission_statement">
        <p class="pre-title">
          <?php print($mission_statement_pre_title) ?>
        </p>
	      
	<section class="ftco-animate">      
        <h2 class="field-mission_statement">
          <?php print($mission_statement) ?>
        </h2>

	<section class="ftco-animate">	
        <div class="field-mission_statement_body">
          <?php print($mission_statement_body) ?>
	</section>	
        </div>
      </div>
	
       <section class="ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.9">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="300">0</strong>
              </div>
              <div class="text-2">
              	<span>Years of <br>Experience</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="1500">0</strong>
              </div>
              <div class="text-2">
              	<span>Undergraduate <br>Students</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="300">0</strong>
              </div>
              <div class="text-2">
              	<span>Graduate <br>Students</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="300">0</strong>
              </div>
              <div class="text-2">
              	<span>Happy <br>Customers</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>
        
      <section class="ftco-animate">      
	<section id="slider">
  <input type="radio" name="slider" id="s1">
  <input type="radio" name="slider" id="s2">
  <input type="radio" name="slider" id="s3" checked>
  <input type="radio" name="slider" id="s4">
  <input type="radio" name="slider" id="s5">
  <label for="s1" id="slide1"></label>
  <label for="s2" id="slide2"> </label>
  <label for="s3" id="slide3"> <div class="hero">
  <div class="hgroup">
    <h1 class="hero_h" >Tarragon</h1>
    <p class="hero_p">An herb with narrow, pointed, gray-green leaves with a distinctive anise or licorice flavor</p>
  </div><img class=".img_slide"src="https://internshell-3-staging.r6a5yukd-liquidwebsites.com/wp-content/uploads/2019/03/Katherine-Casado-19_edited.jpg">  </div> </label>
  <label for="s4" id="slide4"></label>
  <label for="s5" id="slide5"></label>
</section>
	             <section class="ftco-animate">	
      <?php get_template_part("template-parts/story-carousel", "student") ?>	

       <div class="news-events">	
        <div class="news-events-inner">	
          <p class="pre-title">	
            <?php print($news_events_pre_title) ?>	
          </p>	


        
        <div class="more-button-container">
          <a class="more-button" href="/events/">
            More Events
          </a>
        </div>
      </div>
      
      <div class="calls-to-action">
        <div class="calls-to-action-title">
          <h2 class="field-calls_to_action_title">
            <?php print($calls_to_action_title) ?>
          </h2>
        </div>

          <ul class="calls-to-action-feature pure-g">
            <?php foreach ($calls_to_action as $index=>$cta) : 
              if ($cta["link_type"] == "internal" && isset($cta["internal_link"]->ID)) {
                $link = get_the_permalink($cta["internal_link"]->ID);
                $text = $cta["link_text"];
                if (!$text || $text == "") {
                  $text = $cta["internal_link"]->post_title;
                }
              }
              elseif (isset($cta["external_link"])) { // external
                $link = $cta["external_link"];
                $text = $cta["link_text"];
              }
              ?>
              <li class="cta pure-u-1 pure-u-md-1-3">
                <div class="cta-image" style="<?php print_acf_image_as_background_style($cta["background_new"], "large")?>">
                  <img src="<?php print $cta["background_new"]["sizes"]["large"] ?>" alt="<?php print $cta["background_new"]["alt"] ?>">
                </div>
                <a class="permalink" href="<?php echo $link ?>"><?php echo $text ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
      </div>
      
      
      
      
      <?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php


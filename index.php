<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * @package WordPress
 * @subpackage CALSv1
 */

get_header(); ?>

<div class="mobileScroll">
  <a href="#" class="mobileNavTriggerLarge" style="display: none;"></a>
  
  
  
  <div class="collegeFeature">
  	<ul class="slides">
  		<li class="flipin">
  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homefeature/lafeature_img1.jpg" alt="College Feature">
  			<div class="featureCaption">
  				<h2>Crop and Weed Science</h2>
  				
  				
  			</div>
  			
  		</li>
  		<li class="flipin">
  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homefeature/lafeature_img2.jpg" alt="College Feature">
  			<div class="featureCaption">
  				<h2>Acting <em class="red">Globally</em></h2>
  				
  				<a href="global">CALS around the world</a> | <a href="http://ip.cals.wisc.edu/">International Programs</a>
  			</div>
  			
  		</li>
  		<li class="flipin">
  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homefeature/lafeature_img3.jpg" alt="College Feature">
  			<div class="featureCaption">
  				<h2>In the lab. In the field. <em class="green sans thin">By your side</em>.</h2>
  				
  				<a href="outreach/get-help/find-an-expert/">Find an expert</a> | <a href="outreach/cals-by-your-side/">CALS in your community</a>
  			</div>
  			
  		</li>
  		<li class="flipin">
  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homefeature/lafeature_img4.jpg" alt="College Feature">
  			<div class="featureCaption">
  				<h2 class="thin sans">Stay <em class="blue condensed">connected</em></h2>
  				
  				<a href="alumni-friends/get-involved/">Get involved</a> | <a href="alumni-friends/make-a-gift/">Give to CALS</a>
  			</div>
  			
  		</li>
  	</ul>
  	
  	<a href="#" class="next">Next</a>
  	<a href="#" class="previous">Previous</a>
  	
  	<div class="timer">
  		<a href="#">Pause Slide Rotation</a>
	  	<div class="timerLeft">
	  	<div class="timer1"></div>
	  	</div>
	  	<div class="timerRight">
	  	<div class="timer2"></div>
	  	</div>
	  	
  	</div>
  </div>
  <div class='fluidHeight' style="display: none;">
			
			<div class = 'sliderContainer'>
			
				<div class = 'iosSlider'>
				
					<div class = 'slider'>
					
						<div class = 'item item1'>
							<div class = 'inner'>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homefeature/lafeature_img1.jpg" alt="College Feature">
					  			<div class="featureCaption">
					  				<h2>Learn About <em class="purple">Life</em></h2>
					  				
					  				<a href="students/admissions" >Apply to CALS</a> | <a href="students/undergraduate-programs/areas-of-study/">Explore our majors</a>
					  			</div>
							</div>
						</div>
						
						<div class = 'item item2'>
							<div class = 'inner'>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homefeature/lafeature_img2.jpg" alt="College Feature">
  			<div class="featureCaption">
  				<h2>Acting <em class="red">Globally</em></h2>
  				
  				<a href="global">CALS around the world</a> | <a href="http://ip.cals.wisc.edu/">International Programs</a>
  			</div>
							</div>
						</div>
						
						<div class = 'item item3'>
							<div class = 'inner'>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homefeature/lafeature_img3.jpg" alt="College Feature">
  			<div class="featureCaption">
  				<h2>In the lab. In the field. <em class="green sans thin">By your side</em>.</h2>
  				
  				<a href="outreach/get-help/find-an-expert/">Find an expert</a> | <a href="outreach/cals-by-your-side/">CALS in your community</a>
  			</div>
							</div>
						</div>
						
						<div class = 'item item4'>
							<div class = 'inner'>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homefeature/lafeature_img4.jpg" alt="College Feature">
  			<div class="featureCaption">
  				<h2 class="thin sans">Stay <em class="blue condensed">connected</em></h2>
  				
  				<a href="alumni-friends/get-involved/">Get involved</a> | <a href="alumni-friends/make-a-gift/">Give to CALS</a>
  			</div>
							</div>
						</div>
						
						
					
					</div>
				
				</div>
				
				
				
				<div class = 'scrollbarContainer'></div>
				
			</div>
		
		</div>
  
 
  <div id="main">

		<div id="primary">
			
			
			
			<?php $options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];
//$current_colorscheme = $options['link_color'];



if ( 'content' != $current_layout ) : ?>
	<div id="content" role="main">
    <?php if ( have_posts() ) : ?>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
  
<?php endif; ?>	
			
			
		<?php if ( 'content' == $current_layout ) : ?>	
			<div class="loadBar">
	<div class="progress"></div>
</div>
		<!--<div class="centeredContainerInset topspace">
 
  <h2 class="sectionTitle">Highlights</h2>
  </div>-->
  
  
  
  
    
    
    
		
			<div id="content" role="main">
			<div id="container" style="opacity: 0;" class="super-list variable-sizes clearfix">



			<div class="newsItem customize">
			<span class="number">1</span>
			<div class="hiddendate">-9999999999</div>
    	<div class="categories">
	  		<div class="topics">
		  		<ul>
		  			

	    	<?php
$categories = get_categories();
foreach ($categories as $cat) {

if($cat->cat_name != 'Uncategorized') {
echo '<li><a href="#" data-cat="'.$cat->slug.'" class="selected categor">'.$cat->cat_name.'</a></li>';
}

}
?>
					<!--<li><a href="#" data-cat="Agriculture" class="selected agriculture categor"><span></span>Agriculture</a><a href="http://news.cals.wisc.edu/category/agriculture/" style="display: none;" class="more">See More</a></li>
					<li><a href="#" data-cat="Announcements" class="selected announcements categor"><span></span>Announcements</a><a href="http://news.cals.wisc.edu/category/highlights/" style="display: none;" class="more">See More</a></li>
			    	<li><a href="#" data-cat="Energy" class="selected energy categor"><span></span>Energy</a><a href="http://news.cals.wisc.edu/category/energy/" style="display: none;" class="more">See More</a></li>
			    	<li><a href="#" data-cat="Environment" class="selected environment categor"><span></span>Environment</a><a href="http://news.cals.wisc.edu/category/environment/" style="display: none;" class="more">See More</a></li>
			    	<li><a href="#" data-cat="Events" class="selected events categor"><span></span>Events</a><a href="http://twitter.com/uwmadisoncals" style="display: none;" class="more">See More</a></li>
			    	<li><a href="#" data-cat="Food" class="selected food categor"><span></span>Food</a><a href="http://ecals.cals.wisc.edu/category/food-2/" style="display: none;" class="more">See More</a></li>
			    	<li><a href="#" data-cat="Health" class="selected health categor"><span></span>Health</a><a href="http://news.cals.wisc.edu/category/health/" style="display: none;" class="more">See More</a></li>
			    	<li><a href="#" data-cat="People" class="selected people categor"><span></span>People</a><a href="http://ecals.cals.wisc.edu/category/people/" style="display: none;" class="more">See More</a></li>
			    	<li><a href="#" data-cat="social" class="selected social categor"><span></span>Social</a><a href="http://twitter.com/uwmadisoncals" style="display: none;" class="more">See More</a></li>-->
			    	
		  		</ul>
	  		</div>
	  	
	  	
		  	<div class="categoriesSort">	
		    	 <ul id="sort" class="option-set clearfix" data-option-key="sortBy">
			    	<!--<li><a href="#" data-cat="number">Highlighted</a></li>-->
			        <li><a href="#" data-cat="chronological" class="selected">Chronological</a></li>
			        
			        <li><a href="#" data-cat="alphabetical">Alphabetical</a></li>
			        <li><a href="#" data-cat="grouped">Grouped</a></li>
		  		</ul>
		  	</div>
	  	
	  		<a href="#" class="remembersettings selected" data-rem="yes">Remember My Settings</a>

  		</div>
    </div>
   		<?php	if ( is_home() ) { query_posts( 'showposts=7' ); } ?>

			<?php if ( have_posts() ) : ?>

				<?php //twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					
					
					
					
					
	<div class="newsItem <?php $category = get_the_category(); 
echo $category[0]->slug; ?>">
    	
    		<div class="previousa">
    		<div class="additionalContent">
    			
    				
    				
    				<?php 
    					
	    				if ( has_post_thumbnail() ) {
		    				
		    				//the_post_thumbnail();
		    				echo get_the_post_thumbnail($page->ID, 'large');
 
		    				} else {
 
							 //echo '<img src="';
							 echo catch_that_image();
							// echo '" alt="" />';

						}
	    				
    				?>

    			
    		</div>
    		
    		<div class="text">
    			<div class="glyph"><div class="symbol"></div></div>
    			<div class="titleheading">
    			<h3><?php the_title(); ?></h3>
    			</div>
    			<div class="excerpt">
    			
	    		
			<?php the_content_rss('', FALSE, '', 180); ?>
    			
    			
    			</div>
    			<div class="dateheading">
    			<?php the_date(); ?>
    			</div>
    			<div class="hiddendate"><?php echo "-"; the_time('Ymd') ?></div>
    			<div class="hiddengroup"><?php $category = get_the_category(); 
echo $category[0]->slug; ?></div>
    			
					
					<span class="number">10</span>
    		</div>
    		
    		<a href="<?php the_permalink(); ?>" class="highlight">
	    		<div class="loadingSpinner" style="display: none;">
	    			<div class="progress" style="width:100%;"></div>
	    		</div>
    		</a>
    	</div>
    	
    </div>

				<?php endwhile; ?>
				
				
				
				<!--
				<?php 
				
			
				
                            //Get sticky news post
							$sticky_posts = cals_fetch_feed('http://news.cals.wisc.edu/feed/?cat=-20%2C-21%2C-66%2C-67&tag=cals-home-sticky&post_thumb=1', 1, 0, 64);
							
							foreach ($sticky_posts as $sticky_post){
								//print_r($sticky);
								$postmeta = $sticky_post->get_item_tags('http://wordpress.org/export/1.0/', 'postmeta');
								$profile_thumbnail = $postmeta[0]['child']['http://wordpress.org/export/1.0/']['meta_value'][0]['data'];
								
								//$featuredImageSrc = $sticky_post->get_item_tags('', 'featuredImage');
 
					
								//$featuredImage = $featuredImageSrc[0]['data'];
								
								
								$sticky_post_id = $sticky_post->get_id();
								?>
								
								
								<div class="newsItem <?php //$category = get_the_category(); echo $category[0]->slug; ?>">
    	<a href="<?php echo $sticky_post->get_permalink();?>" title = "Permanent link to <?php echo $sticky_post->get_title(); ?>">
    		<div class="text">
    			<div class="glyph"><div class="symbol"></div></div>
    			<div class="titleheading">
    			<h3><?php echo $sticky_post->get_title(); ?></h3>
    			</div>
    			<div class="excerpt">
    			
	    		
			<?php //echo $sticky_post->get_content(); ?>
    			<?php
                    $content = $sticky_post->get_content();
					
							echo substr($content,0,110).'...';  
						
					
					?>  
    			
    			</div>
    			<div class="dateheading">
    			<?php echo $sticky_post->get_date('F j, Y'); ?>
    			
    			</div>
					
					<span class="number">10</span>
    		</div>
    		<div class="additionalContent">
    			
    				<?php //echo get_the_post_thumbnail($page->ID, 'large'); ?>
    				
    				<?php 
	    				/*if ( get_the_post_thumbnail($post_id) != '' ) {

		    				echo get_the_post_thumbnail($page->ID, 'large');
 
		    				} else {
 
							 echo '<img src="';
							 echo catch_that_image();
							 echo '" alt="" />';

						}*/
	    				
    				?>
    				
    				<?php 
    				
										
											if ($profile_thumbnail!='') {?>
												<?php echo $profile_thumbnail;?>
											<?php } else {
												//get generic default image (attachment_id = 32)
												echo wp_get_attachment_image('232', array(300,300));
											}
											
										?>
    		
                            
							
                            
					
    			
    			
    		</div>
    		
    		<div class="highlight"></div>
    	</a>
    </div>
                                				
                                  
									
							<?php }
							
							
							//print_r($sticky_post);
							
							?>-->  
				
							<?php 
								//get news from eCALS
								//cals_fetch_feed('http://ecals.cals.wisc.edu/?cat=-356,-384,-385,-363,-358,-366,-355&feed=rss2', 8, 1, -1);
								 
								//get news from CALS News
								//cals_fetch_feed('http://news.cals.wisc.edu/?feed=rss2&cat=-20,-21,-66,-67,0', 8, 1, -1); 
								
								
								
								
								
								//cals_get_last_tweet();
							?>
							
							<?php get_sidebar( 'homepage' ); ?>

				<?php //twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
			
	<?php endif; ?>
			
</div>

<!--<div class="centeredContainerInset topspace mobilemargin">
 
  <h2 class="sectionTitle">About CALS</h2>
  </div>
<div class="aboutCALSMission">
	<div class="inner">
		<div class="column">
		<p>Located at the heart of the University of Wisconsin-Madison campus, the College of Agricultural and Life Sciences (CALS) is one of the oldest and most prestigious colleges devoted to the study of our living world.</p>


<a href="#" class="button">Learn more about the college’s history</a>
		</div>
	</div>
</div>-->
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
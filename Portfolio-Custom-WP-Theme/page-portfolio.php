<?php

/* Template Name: Portfolio Page */

get_header(); ?>


<div class="contentwrapper">
    
	<!-- PROJECT FEATURES
	================================================== -->
	<section id="project-features">
		<div class="container">
		
			<p><span class="portfolio-title">Portfolio</span></p><br />
            
			<div class="row project-space">
            
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               
      <?php the_content(); ?>
	
  	<?php endwhile; endif; ?>
    
    <?php 

  $args = array(
    'post_type' => 'project',
	'order' => 'DSC'
  );
  $query = new WP_Query( $args );

?>

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-sm-6">
					<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
						<p class="project-title"><?php the_title(); ?></p></a>
				</div><!-- col -->
                
                <?php endwhile; endif; wp_reset_postdata(); ?>
                
				
			</div><!-- row -->
            
            
			
		</div><!-- container -->
	</section><!-- project-features -->

    
    
<?php get_footer(); ?>
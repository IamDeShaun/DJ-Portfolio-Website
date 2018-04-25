<?php get_header(); ?>

	
    
<div class="contentwrapper">
	<!-- Single Project
	================================================== -->
	<section id="project-features">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                 <?php the_content(); ?>
		<div class="container">
		
			<p class="proj-title"><?php the_title(); ?></p>
            <p class="role-descrip"><?php the_field('project_role'); ?></p>
            <div><p class="port-descrip"><?php the_field('project_description'); ?>
            </p></div>
			<p><a class="viewwebsite" href="<?php the_field('project_website_link'); ?>" target="_blank">/ View Website /</a></p>
            <div> 
              <?php the_field('project_image'); ?>
            </div>
            <span class="arrow-space"><a class="arrowlink" href="http://localhost:8888/wordpress/portfolio"><i class="fas fa-arrow-left"></i> Back To Portfolio</a></span> 
                <span><strong><?php next_post_link(); ?></strong></span>
		</div><!-- container -->
        <?php endwhile; endif; ?> 
        
	</section><!-- single project -->
	
    
    
    
    
    
    
    
    
    
<?php get_footer(); ?>

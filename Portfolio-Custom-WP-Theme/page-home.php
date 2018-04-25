<?php
/* Template Name: Home Page */

$hero_text = get_field('hero_text');
$hero_title = get_field('hero_title');

$about_me_title = get_field('about_me_title');
$about_job_title = get_field('about_job_title');
$about_bio = get_field ('about_bio');
$about_profile_image = get_field('about_profile_image');
$about_resume_text = get_field('about_resume_text');
$about_resume_link = get_field('about_resume_link');
$about_signature = get_field('about_signature');

$latest_work_link = get_field('latest_work_link');

$portfolio_image_a = get_field('portfolio_image_a');
$portfolio_link_a = get_field('portfolio_link_a');

$portfolio_image_b = get_field('portfolio_image_b');
$portfolio_link_b = get_field('portfolio_link_b');

$portfolio_image_c = get_field('portfolio_image_c');
$portfolio_link_c = get_field('portfolio_link_c');


$port_title = get_field('port_title');
$full_port_text = get_field('full_port_text');
$full_port_text_link = get_field('full_port_text_link');

$specialty_title = get_field('specialty_title');
$favicon_a = get_field('favicon_a');
$favicon_b = get_field('favicon_b');
$favicon_c = get_field('favicon_c');
$favicon_d = get_field('favicon_d');
$favicon_e = get_field('favicon_e');
$favicon_f = get_field('favicon_f');


get_header(); ?>

	
        <!-- HERO
    ================================================== -->
    <section id="hero" data-type="background" data-speed="5">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
    			
    				
		    		
		    		<div>
			    		<p class="resume-hero-lead"><?php echo $hero_text;  ?></p>
			            <span class="resume-hero-text"><?php echo $hero_title; ?></span>
			            
			           
		    		</div><!-- col -->
		    		
    			</div><!-- row -->
    		</div><!-- container -->
    	</article>
    </section>
	
	
	
    <div class="contentwrapper">
    
    <!-- About Me
	================================================== -->
	<section id="about-deshaun">
		<div class="container">
			
			
			<div class="row">
				<div id="mobile-about" class="col-sm-7">
					<p><span class="about-me-title"><?php echo $about_me_title; ?></span></p><br>
					<p><span class="about-me-descrip"><?php echo $about_job_title; ?></span></p>
					<p id="mybio" class="about-me-text"><?php echo $about_bio; ?></p>
                    
                    <div class="col-sm-6">
                      <img class="peach-signature" src="<?php echo $about_signature ['url'] ?>" alt="<?php echo $about_signature ['url'] ?>">
                    </div>
                    
                     <div class="col-sm-6">
						 <span class="download"><a href="<?php echo $about_resume_link; ?>"><?php echo $about_resume_text; ?></a></span>
                    </div>
                    
				</div><!-- end col -->
                
                
                <div class="col-sm-5 self-image">
					<img src="<?php echo $about_profile_image ['url'] ?>" alt="<?php echo $about_profile_image ['alt'] ?>">
				</div><!-- end col -->
                
			</div><!-- row -->
		
		</div><!-- container -->
	</section><!-- boost-income -->
	
	

    

	<!-- My Specialties
	================================================== -->
	<section class="speciality">
		<div class="container">
		
			<div class="section-header">
				
				<p><span class="my-speciality"><?php echo $specialty_title; ?></span></p><br>
			</div><!-- section-header -->
			
			<div class="row specialty-icons">
                <div class="col-sm-2">
					<?php echo $favicon_a; ?>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<?php echo $favicon_b; ?>
				</div><!-- end col -->
				
				
				<div class="col-sm-2">
					<?php echo $favicon_c; ?>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<?php echo $favicon_d; ?>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<?php echo $favicon_e; ?>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<?php echo $favicon_f; ?>
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- My Specialties -->
	
	
	<!-- PROJECT FEATURES
	================================================== -->
	<section id="project-features">
		<div class="container">
		
			<p><span class="portfolio-title">Portfolio</span></p><br />
            
			<div class="row">
				<div class="col-sm-4">
					<a href="<?php echo $portfolio_link_a; ?>"><img src="<?php echo $portfolio_image_a ['url'] ?>" alt="<?php echo $portfolio_image_a ['alt'] ?>">
						<p class="project-title">Rensselaer ISSS</p></a>
				</div><!-- col -->
                
				<div class="col-sm-4">
					<a href="<?php echo $portfolio_link_b; ?>"><img src="<?php echo $portfolio_image_b ['url'] ?>" alt="<?php echo $portfolio_image_b ['alt'] ?>">
						<p class="project-title">Graham Windham</p></a>
				</div><!-- col -->
                
				<div class="col-sm-4">
					<a href="<?php echo $portfolio_link_c; ?>"><img src="<?php echo $portfolio_image_c ['url'] ?>" alt="<?php echo $portfolio_image_c ['alt'] ?>">
						<p class="project-title">RPI Magazine</p></a>
				</div><!-- col --><br />
				
                <div class="col-sm-12">
                    <br />
                    <p class="project-title"> <a href="http://localhost:8888/wordpress/portfolio/">/ View Full Portfolio / </a></p>
                </div>
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- project-features -->
	
    
<?php get_footer(); ?>

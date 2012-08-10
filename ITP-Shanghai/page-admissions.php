<?php 
	/* 
		Template Name: Admissions Page 

	*/
?>


<?php get_header(); the_post(); ?>



	<div class="side"><div class = "side-pic"> </div></div>

	
	<div class = "logo-head">
		<div id="itp-box2"></div>
		<div id="shanghai-box2"></div>
		<a href="/"><img class="logo"  src="<?php bloginfo('template_directory'); ?>/images/itpshanghai.png" alt="itp shanghai"/> </a>
	</div>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class ="span12">
				<div class="content">	
							
					<div class="row-fluid">	
						<nav class="titles"> 
							<div id="news1"> <a  href="index.php?page_id=26"> NEWS </a> </div>
							<div id="faq1"> <a href="index.php?page_id=24"> FAQ </a> </div>
							<div id="admis1-current">  ADMISSIONS </div>	
						</nav>
					</div>	
					
					
	<div class= "post"> 	
		<div class="row-fluid">	
			<div class = "span6">
				<div class= "post-text"> 
					<?php the_content(); ?>  
				</div><!-- news-text -->
			</div> <!-- span6 -->
		</div> <!-- row-fluid -->
	</div>	<!-- post -->
	


					</div> <!-- content -->

			</div> <!-- span-12 -->
		</div> <!-- row-fluid -->
	</div> <!-- container-fluid -->	
	
	
	
	



<?php get_footer(); ?>
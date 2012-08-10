<?php 
	/* 
		Template Name: News Page 

	*/


 ?>


<?php get_header(); ?>

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
							<div id="news1-current"> NEWS </div>
							<div id="faq1"> <a href="index.php?page_id=24"> FAQ </a> </div>
							<div id="admis1"> <a href="index.php?page_id=22"> ADMISSIONS </a></div>		
						</nav>
					</div>	
					
					
	
	
	<?php $paged = (intval(get_query_var('paged'))) ?intval(get_query_var('paged')) : 1; query_posts('posts_per_page=5&paged='.$paged); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>					
						
						
					<div class= "post"> 
						<div class="row-fluid">	
							<div class = "span6">
							<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
								<div class = "post-head"> <b><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> </b></div></div>
								
								<div class= "post-text"> 
									<?php the_content(); ?>
								</div><!-- post-text -->
							
							</div> <!-- span -->

							</div> <!-- row-fluid -->
						</div>	<!-- content -->

						<?php endwhile; ?>

					</div> <!-- post -->

			</div> <!-- span-12 -->
		</div> <!-- row-fluid -->
	</div> <!-- container-fluid -->	

	</div>
	
	
	
	

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>


<?php get_footer(); ?>
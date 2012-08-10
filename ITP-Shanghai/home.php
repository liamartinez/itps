<?php get_header(); ?>

<div id='main-content'>

<div id="page-wrap">
	<div class="frontPage">
		<div class="frontImg"><div id="bgImage"></div></div>
		<!-- <img class="center-logo" src="images/itpshanghai.png" alt="pic"/>  -->

		<div id="white-box">
			<div id="itp-box"></div>
			<div id="shanghai-box"></div>
			<img class="center-logo2" src="<?php bloginfo('template_directory'); ?>/images/itpshanghai.png" alt="itp shanghai"/> 
		</div> <!-- white-box -->

	</div> <!-- frontpage -->
	
	
	<div class="contentPage">
		<div class="container-fluid">
			<div class="row-fluid">	
				<div class="span12">
					<h1> <span id = "NYU"><a href="http://www.nyu.edu/">NEW YORK UNIVERSITY</a></span>'S <span id= "ITP"><a href="http://itp.nyu.edu/itp/">INTERACTIVE TELECOMMUNICATIONS PROGRAM</a></span> IN SHANGHAI</h1>
				</div>
			</div>
			<div class="row-fluid">	
				<div class="span4">
					<span class = "titles" id="news"><a href ="index.php?page_id=26">NEWS</a></span>					
					<?php query_posts("post_per_page=1"); the_post(); ?>
					<div class="excerpt"> <a href="<?php the_permalink(); ?>"><b><?php the_date(); ?></b></a> <p> <?php the_excerpt(); ?> </p> </div>
				</div> <!-- span4 -->
			
				<div class="span4">
					<span class = "titles" id="faq"><a href ="index.php?page_id=24">FAQ</a></span>
							<?php query_posts("posts_per_page=1&post_type=page&page_id=24"); the_post(); ?>
					<div class="excerpt"> <p> <?php the_excerpt(); ?>   </p></div>
				</div> <!-- span4 -->
				
				<div class="span4">
					<span class = "titles" id="admis"><a href ="index.php?page_id=22">ADMISSIONS</a></span>
					<?php query_posts("posts_per_page=1&post_type=page&page_id=22"); the_post(); ?>
					<div class="excerpt"><p> <?php the_excerpt(); ?>  </p> </div>
				</div> <!-- span4 -->

			 </div> <!-- row-fluid -->			 
			<!--  <a href ="#"><img class = "center down" src="images/itps_down.png"/></a> <!-- fix! -->		

		</div><!--  container-fluid -->
	</div> <!-- content-page -->
		
	<div id = "blue-box">
		<img class = "center" src="<?php bloginfo('template_directory'); ?>/images/itps_down.png" /> 		  	  
		<h2> WHAT DO ALUMNI SAY ABOUT ITP? </h2>
	</div> <!-- blue-box -->	
		
	<section class="story" id="first" data-speed="11" data-type="background"></section>

	<section class="story" id="second" data-speed="5" data-type="background">
		 <article>
		 	<div class="container-fluid">
				<div class="row-fluid">	
					 <div class="span6">
						<div class="name"><b>Naoto Yokoyama</b>, ITP 2002</div>
						<div class="country">Japan</div> 
						<div class="title"> Business Development Manager, Android, Google </div> 
					</div>
					<div class="span5">
						<p class="quote"> 
							ITP changed my life. To study at ITP was one of the most challenging and valuable experience. It was my first step to get enter into real ?global? world. I found at ITP what I want to do and should do in my life. The-state-of-the-art technology, creativity, and people, who have different and unique culture, background, idea, and career, inspired me to go forward.			</p>

					  </div> <!-- span8 -->

				  </div> <!-- row-fluid -->
			  </div> <!-- container-fluid -->
		 </article>
	</section>
	
	<section class="story" id="third" data-speed="11" data-type="background"></section>

	<section class="story" id="fourth" data-speed="5" data-type="background">
		 <article>
		 	<div class="container-fluid">
				<div class="row-fluid">	
					  <div class="span6">
						<span class="name"><b>Xiaoyang Feng</b>, ITP 2009</span> <br>
						<span class="country">China</span> <br>
						<span class="title"> Creative Technologist at Potion Design</span> <br>
					</div>
					<div class="span5">
						<p class="quote"> 
							To me,  ITP is an art + technology playground.  I was free to experiment with all kinds of the newest technologies, to collaborate with people from diverse backgrounds, and to make arts in any forms I had dreamed of.
			</p>

					  </div> <!-- span8 -->
				  </div> <!-- row-fluid -->
			  </div> <!-- container-fluid -->
		 </article>
	</section>


	<section class="story" id="fifth" data-speed="14" data-type="background"></section>
		
	<section class="story" id="sixth" data-speed="11" data-type="background">
		 <article>
		 	<div class="container-fluid">
				<div class="row-fluid">	
					  <div class="span6">
						<span class="name"><b>Chorong Hwang Johnston</b>, ITP 2008</span> <br>
						<span class="country">South Korea </span> <br>
						<span class="title"> Senior User Interface Design at Motorola </span> <br>
					</div>
					<div class="span5">
						<p class="quote"> 
To be honest, I didn't expect to get a job in America after graduating ITP. After spending two years at ITP with amazing cutting edge curriculum, supportive faculty and collaborative students, I've got enough confidence and finally got a job in Silicon Valley. For last four years, I've worked for Yahoo! Mobile and Motorola as a senior designer and it's amazing to see people using my interfaces/apps all over the world. 

I need to say that ITP has a great reputation and amazing connections in the field. I know I really took advantage of it and hope you guys also can do it. 
			</p>

					  </div> <!-- span8 -->
				  </div> <!-- row-fluid -->
			  </div> <!-- container-fluid -->
		 </article>
	</section>
	
	<section class="story" id="seventh" data-speed="14" data-type="background"></section>

  <!-- Our Javascript, starting with jQuery -->
  <script src='js/libs/jquery-1.6.1.min.js'></script>
  <script src="js/script.js"></script>
  <script src="webfontkit/specimen_files/easytabs.js" type="text/javascript" charset="utf-8"></script>
  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg");
  <![endif]-->

</div> <!-- page-wrap -->
</div> <!-- END main-content -->

<?php get_footer(); ?>
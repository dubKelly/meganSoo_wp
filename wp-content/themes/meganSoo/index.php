<?php get_header(); ?>

<div id="landing" class="landingSect">
	<div class="sectionCont landingCont">
		<input type="checkbox" id="burgerNoJS" class="noJS">
		<label for="burgerNoJS" class="noJS"></label>
		<div class="container">
			<div id="burger" class="burger">
				<span class="toggle"></span>
				<span class="toggle"></span>
				<span class="toggle"></span>
				<span class="toggle"></span>
			</div>
		</div>
		<h1 class="head toggle">
			<div class="headCont fNameCont toggle">
				<span class="landingHead fName toggle">Megan</span>
			</div>
			<span class="part toggle"></span>
			<div class="headCont lNameCont toggle">
				<span class="landingHead lName toggle">Soo</span>
			</div>
		</h1>
		<div class="portCont">
			<div class="headCont motionCont toggle">
				<a href="#motion"><span class="landingHead portHead motion toggle">Motion</span></a>
			</div>
			<div class="headCont stillsCont toggle">
				<a href="#stills"><span class="landingHead portHead stills toggle">Stills</span></a>
			</div>
			<div class="headCont aboutCont toggle">
				<a href="#about"><span class="landingHead portHead about toggle">About</span></a>
			</div>
			<div class="headCont contactCont toggle">
				<a href="pages/contact.php"><span class="landingHead portHead contact toggle">Contact</span></a>
			</div>
		</div>
		<div class="arrowCont">
			<a href="#about"><svg class="arrow" enable-background="new 0 0 100 100" id="Layer_1" height="45px" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon class="arrowPoly" fill="#fff" points="22.4,64.1 50.8,36.5 79.3,64.1 80.8,63.2 50.8,34.1 20.8,63.2 22.4,64.1 "/></svg></a>
		</div> 
	</div>
</div>

	<?php 

	if( have_posts() ) :

		while( have_posts() ) : the_post(); ?>

			<h2><?php the_title(); ?></h2>
			<h3>Posted on: <?php the_date(); ?> at <?php the_time(); ?></h3>
			<p><?php the_content(); ?></p>

		<?php

		endwhile;

	endif;

	?>

<?php get_footer(); ?>

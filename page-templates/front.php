<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="front__hero" role="banner">
	<img class="hero__heading--image" src="http://localhost/hackthegates/wp-content/uploads/2019/08/Header-Icon-inverted.png">
	<h1 class="show-for-sr" role="heading" aria-level="1">Hack the Gates</h1>
	<span class="show-for-sr" role="heading" aria-level="2">
		Radically Reimagining College Admission
	</span>
</header>

<section class="front__action">
	Call-to-action section. Repeatable(?) "Join the convo" with link to FB on left, "Learn with us" with link to courses on right. Elements here will change as the project goes on -- make this its own .php to include where needed and to keep edits separate?
</section>

<main class="front__main" role="main">
	Splash copy along the lines of "College admission is broken, join us in figuring out how to reimagine a better process." Maybe just straight-up Gutenberg editable? Or at least capacity to include images on left and/or right.
</main>

<section class="front__timeline">
	Horizontal line representing timeline Marie sent in "one-pager" doc.
</section>

<section class="front__methods">

*** METHOD AREAS ***
Three areas, one for each method the project will use to radically reimagine admissions: online learning, creative brainstorming, and policy analysis. Each should have one BG image/color, and a strip running down the right side of the page with the name of the section (repeating?) running down the side. Within each area, should be able to have multiple divs for content blocks, alternating pic on left and pic on right for each div. Will have to hard-code the number of divs, to start, since can't have repeater fields.

	<div class="front__method--learning">

		<div class="method--img-left">

			<div class="method__image">
				<img src="#" alt="image!">
			</div>

			<div class="method__text">
				This is the copy for the Online Learning method area!
			</div>

		</div>

	</div>


	<div class="front__method--brainstorming">

		<div class="method--img-right">

			<div class="method__image">
				<img src="#" alt="image!">
			</div>

			<div class="method__text">
				This is the copy for the first Creative Brainstorming method area!
			</div>

		</div>

		<div class="method--img-left">

			<div class="method__image">
				<img src="#" alt="image!">
			</div>

			<div class="method__text">
				This is the copy for the second Creative Brainstorming method area!
			</div>

		</div>

	</div>


	<div class="front__method--policy">

		<div class="method--img-right">

			<div class="method__image">
				<img src="#" alt="image!">
			</div>

			<div class="method__text">
				This is the copy for the Policy Analysis method area!
			</div>

		</div>

	</div>

</section>

<section class="front__about">
	Area for info about sponsoring organizations. Currently thinking ACCEPT on left, RISE on right. If we need to include sponsor foundations, could go to a grid.
</section>

<section class="front__partners">
	Area for partner logos. Thinking this is where sponsors should go.
</section>

<?php get_footer();

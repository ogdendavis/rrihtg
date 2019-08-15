<?php
/*
Template Name: Front
*/
get_header(); ?>

<div class="hero__container">

	<header class="front__hero" role="banner">
		<img class="hero__heading--image" src="http://localhost/hackthegates/wp-content/uploads/2019/08/Header-Icon-inverted.png">
		<h1 class="show-for-sr" role="heading" aria-level="1">Hack the Gates</h1>
		<span class="show-for-sr" role="heading" aria-level="2">
			Radically Reimagining College Admission
		</span>
	</header>

	<main class="front__main" role="main">
		<div class="main__content">
			<p class="main__hook">We will create an equitable path to post-secondary education.</p>
			<p>Over the next year, Hack the Gates will facilitate urgently needed honest conversations among college admissions stakeholders about the roles we play as gatekeepers to opportunity, perpetrators of racial inequity, and leaders in designing equitable college enrollment processes.</p>
			<p>Through online learning, creative brainstorming, and policy analysis, Hack the Gates: Radically Reimagine Admissions will be the catalyst for a complete transformation of the college admissions process.</p>
		</div>
	</main>

</div>

<section class="front__action">

	<div class="action__container">

		<div class="action__left">
			<p>Enroll in an online course to learn about how the current college admissions system evolved, and what it actually looks like today.</p>
			<a class="action__button" href="#">Learn With Us</a>
		</div>

		<div class="action__right">
			<p>Engage with stakeholders all across the college admissions world to build a shared vision of a just and equitable path to higher education.</p>
			<a class="action__button" href="#">Join the Conversation</a>
		</div>

	</div>

</section>

<section class="front__timeline">

	<div class="timeline">

		<h2>Our Timeline</h2>

		<div class="timeline__line">
			<div class="timeline__month">September</div>
			<div class="timeline__month">October</div>
			<div class="timeline__month">November</div>
			<div class="timeline__month">December</div>
			<div class="timeline__month">January</div>
			<div class="timeline__month">February</div>
			<div class="timeline__month">March</div>
			<div class="timeline__month">April</div>
			<div class="timeline__month">May</div>
			<div class="timeline__month">June</div>
			<div class="timeline__month">July</div>
			<div class="timeline__month">August</div>
		</div>

		<ol class="timeline__items">

			<li class="timeline__item" id="engagement" data-start="0" data-end="11">
				<div class="item__dates">
					September 2019 - August 2020
				</div>
				<div class="item__info">
					Online engagement and community building
				</div>
			</li>

			<li class="timeline__item" id="community" data-start="0" data-end="7">
				<div class="item__dates">
					September 2019 - April 2020
				</div>
				<div class="item__info">
					Webinars, social media events, and meetups
				</div>
			</li>

			<li class="timeline__item" id="hackathon" data-start="2" data-end="2">
				<div class="item__dates">
					November 8-9, 2019
				</div>
				<div class="item__info">
					Hack-a-Thon the Gates conference
				</div>
			</li>

			<li class="timeline__item" id="findings" data-start="7" data-end="7">
				<div class="item__dates">
					April 2020
				</div>
				<div class="item__info">
					Preliminary findings released
				</div>
			</li>

			<li class="timeline__item" id="papers" data-start="11" data-end="11">
				<div class="item__dates">
					August 2020
				</div>
				<div class="item__info">
					Final policy papers released
				</div>
			</li>

		</ol>

	</div> <?php //.timeline ?>

</section> <?php //.front__timeline ?>

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

<?php /* Template Name: Strona Zespołu */ ?>

<?php get_header(); ?>


<!-- =================================================
	main
================================================== -->
<main>

	<div class="container">

		<div class="row">

			<?php if( have_rows('member', 'option') ): ?>

				<?php while ( have_rows('member', 'option') ) : the_row(); ?>

				<?php

				$photo = get_sub_field('photo');
				$name = get_sub_field('name');
				$title = get_sub_field('title');
				$description = get_sub_field('description');

				?>


				<div class="span3">

					<div class="member">

						<div class="member-image" style="background-image: url('<?php echo $photo[url]; ?>');"></div>

						<div class="member-info">


						<?php if( !empty($name) ): ?>

							<h4><?php echo $name; ?></h4>

						<?php endif; ?>


						<?php if( !empty($title) ): ?>

							<h5><?php echo $title; ?></h5>

						<?php endif; ?>


						<?php if( !empty($description) ): ?>

							<p>
								<?php echo $description; ?>
							</p>

						<?php endif; ?>


						</div>
						<!-- END member-info -->

					</div>
					<!-- END member -->

				</div>
				<!-- END span3 -->

				<?php endwhile; ?>

			<?php endif; ?>
			
		</div>

	</div>

</main>


<!-- =================================================
	section inline-form
================================================== -->
<?php get_template_part("partials/section", "form"); ?>



<?php get_footer(); ?>
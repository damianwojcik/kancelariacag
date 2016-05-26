<?php /* Template Name: Strona Usługi */ ?>

<?php get_header(); ?>


<!-- =================================================
	main
================================================== -->
<main>

	<div class="container">

		<div class="row">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; endif; ?>
			
		</div>

	</div>

</main>


<!-- =================================================
	section inline-form
================================================== -->
<?php get_template_part("partials/section", "form"); ?>



<?php get_footer(); ?>
<?php /* Template Name: Strona Kontaktowa */ ?>

<?php get_header(); ?>

<?php $street = get_field('street', 'option'); ?>
<?php $city = get_field('city', 'option'); ?>
<?php $email = get_field('email', 'option'); ?>
<?php $phone = get_field('phone', 'option'); ?>


<!-- =================================================
	main
================================================== -->
<main>

	<div class="container">

		<div class="row">

			<div class="span6">

				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?>

			</div>
			<!-- END span6 -->

			<div class="span6">

				<div class="wrap">
					
					<p class="underline">Kancelaria Prawa Upadłościowego <br/>
						i Restrukturyzacyjnego Franciszek Cag</p>

					<?php if( !empty($street) ): ?>

						<p><?php echo $street; ?></p>

					<?php endif; ?>


					<?php if( !empty($city) ): ?>

						<p><?php echo $city; ?></p>

					<?php endif; ?>


					<ul class="contact-details">

						<?php if( !empty($email) ): ?>

							<li><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>

						<?php endif; ?>

						<?php if( !empty($phone) ): ?>

							<li><a href="callto:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>

						<?php endif; ?>

					</ul>

				</div>
				<!-- END wrap -->

			</div>
			<!-- END span6 -->
			
		</div>
		<!-- END row -->

		<div class="row">

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.3417660888394!2d19.013116215724008!3d50.24820087944796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716ce5024f94c2b%3A0xd915e97470ca3f0e!2sAstr%C3%B3w+10%2C+Katowice!5e0!3m2!1spl!2spl!4v1462187788861" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

		</div>

	</div>

</main>

<?php get_footer(); ?>
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

            <div id="map"></div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
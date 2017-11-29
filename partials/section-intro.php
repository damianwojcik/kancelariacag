<?php $intro_title = get_field('intro_title', 'option'); ?>
<?php $intro_content = get_field('intro_content', 'option'); ?>
<?php $intro_box_title = get_field('intro_box_title', 'option'); ?>
<?php $street = get_field('street', 'option'); ?>
<?php $city = get_field('city', 'option'); ?>
<?php $email = get_field('email', 'option'); ?>
<?php $phone = get_field('phone', 'option'); ?>


<section class="intro">

	<div class="container">

		<div class="row">

			<div class="span8">

				<div class="wrap">

					<div class="text">

						<?php if( !empty($intro_title) ): ?>

							<h3><?php echo $intro_title; ?></h3>

						<?php endif; ?>


						<?php if( !empty($intro_content) ): ?>

							<?php echo $intro_content; ?>

						<?php endif; ?>


					</div>

				</div>
				<!-- END wrap -->

			</div>
			<!-- END span8 -->

			<div class="span4">

				<div class="img-wrap">

					<div id="map"></div>

				</div>

				<div class="wrap">

					<?php if( !empty($intro_box_title) ): ?>

					<h3>

						<?php echo $intro_box_title; ?>

					</h3>

					<?php endif; ?>



					<?php if( !empty($street) ): ?>

						<p><?php echo $street; ?><br />

					<?php endif; ?>


					<?php if( !empty($city) ): ?>

						<?php echo $city; ?></p>

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
			<!-- END span4 -->

		</div>

	</div>

</section>
<!-- END section intro -->
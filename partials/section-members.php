<section class="members">

	<div class="container">

		<div class="row">

			<h3>Zespół</h3>

		</div>
		<!-- END row -->

	</div>
	<!-- END container -->

	<div class="row">

		<div class="members-bg">

			<div class="container">
					
				<div class="span12">

					<div class="wrap">

						<div class="members-carousel">

							<?php if( have_rows('member', 'option') ): ?>

								<?php while ( have_rows('member', 'option') ) : the_row(); ?>

								<?php

								$photo = get_sub_field('photo');
								$name = get_sub_field('name');
								$title = get_sub_field('title');
								$description = get_sub_field('description');

								$trimmed_desc = wp_trim_words($description, 20);

								?>

								<!-- BEGIN member -->
								<a href="<?php echo esc_url( get_permalink(18) ); ?>" class="member">

									<div class="member-image" style="background-image:url('<?php echo $photo[url]; ?>');"></div>

									<div class="member-info">


										<?php if( !empty($name) ): ?>

											<h4><?php echo $name; ?></h4>

										<?php endif; ?>


										<?php if( !empty($title) ): ?>

											<h5><?php echo $title; ?></h5>

										<?php endif; ?>


										<?php if( !empty($trimmed_desc) ): ?>

											<p>
												<?php echo $trimmed_desc; ?>
											</p>

										<?php endif; ?>


									</div>
									<!-- END member-info -->

								</a>
								<!-- END member -->

								<?php endwhile; ?>

							<?php endif; ?>
							
						</div>
						<!-- END member-carousel owl-carousel -->

					</div>
					<!-- END wrap -->

				</div>

			</div>
			<!-- END container -->

		</div>
		<!-- END members-bg -->

	</div>
	<!-- END row -->

	<div class="container">

		<div class="row">
				
			<a href="<?php echo esc_url( get_permalink(18) ); ?>" class="btn-large">Poznaj nasz zespół!</a>

		</div>

	</div>

</section>
<!-- END section members -->
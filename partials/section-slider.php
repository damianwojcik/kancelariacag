
<section class="slider">

	<div class="owl-carousel">


		<?php if( have_rows('slide', 'option') ): ?>

			<?php while ( have_rows('slide', 'option') ) : the_row(); ?>

				<?php

				$image = get_sub_field('image');
				$title = get_sub_field('title');
				$subtitle = get_sub_field('subtitle');


				?>

				<div class="slide" style="background-image: url('<?php echo $image[url]; ?>');">

					<div class="container">

						<div class="row">

							<div class="wrap">

								<div class="slide-text">

									<?php if (!empty($title) or (!empty($subtitle))){ ?>

										<h1>

											<?php if(!empty($subtitle)){ ?>

												<small>
													<?php echo $subtitle; ?>
												</small>

											<?php } ?>

											<?php if(!empty($title)){ ?>

												<?php echo $title; ?>

											<?php } ?>

										</h1>

									<?php } ?>

								</div>
								<!-- END slide-text -->

							</div>
							<!-- END wrap -->

						</div>

					</div>

				</div>
				<!-- END slide -->

			<?php endwhile; ?>

		<?php endif; ?>

	</div>

</section>
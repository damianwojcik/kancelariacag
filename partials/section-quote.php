
<section class="quote">

	<div class="wrap" style="background-image: url('<?= THEME_URL; ?>/assets/img/court.jpg');">

		<div class="quotes-carousel">

		<?php if( have_rows('quote', 'option') ): ?>

			<?php while ( have_rows('quote', 'option') ) : the_row(); ?>

				<?php

				$author = get_sub_field('author');
				$content = get_sub_field('content');

				?>

				<div class="quotation">

					<div class="container">

						<div class="row">
							
							<?php if(!empty($content)){ ?>

							<blockquote>

								"<?php echo $content; ?>"

							</blockquote>

							<?php } ?>


							<?php if(!empty($author)){ ?>

								<h5>-<?php echo $author; ?></h5>

							<?php } ?>

						</div>

					</div>

				</div>
				<!-- END quotation -->

				<?php endwhile; ?>

			<?php endif; ?>

		</div>
		<!-- END quotes-carousel -->

	</div>
	<!-- END wrap -->

</section>
<!-- END section quote -->

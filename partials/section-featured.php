<section class="featured">

	<div class="container">

		<div class="row">

			<h3>Usługi</h3>

		</div>
		<!-- END row -->

		<div class="row">

		<?php $featured_boxes = get_field('featured_boxes', 'option'); ?>

			<div class="span3">

				<a href="<?php echo esc_url( get_permalink(16) ); ?>" class="tile" style="background-color: #ec2424;">

					<span class="fa-stack fa-2x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-file-text-o fa-stack-1x" style="color: #ec2424;"></i>
						<i class="fa fa-file-text-o fa-stack-1x fa-spin" style="color: #ec2424;"></i>
					</span>						

					<h2>
						<?php echo $featured_boxes[0]['content']; ?>
					</h2>

				</a>

			</div>
			<!-- END span3 -->



			<div class="span3">

				<a href="<?php echo esc_url( get_permalink(16) ); ?>" class="tile" style="background-color: #324779;">

					<span class="fa-stack fa-2x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-magic fa-stack-1x" style="color: #324779;"></i>
						<i class="fa fa-magic fa-stack-1x fa-spin" style="color: #324779;"></i>
					</span>						

					<h2>
						<?php echo $featured_boxes[1]['content']; ?>
					</h2>

				</a>

			</div>
			<!-- END span3 -->


			<div class="span3">

				<a href="<?php echo esc_url( get_permalink(16) ); ?>" class="tile" style="background-color: #b3b3b3;">

					<span class="fa-stack fa-2x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-cog fa-stack-1x" style="color: #b3b3b3;"></i>
						<i class="fa fa-cog fa-stack-1x fa-spin" style="color: #b3b3b3;"></i>
					</span>						

					<h2>
						<?php echo $featured_boxes[2]['content']; ?>
					</h2>

				</a>

			</div>
			<!-- END span3 -->

			<div class="span3">

				<a href="<?php echo esc_url( get_permalink(16) ); ?>" class="tile" style="background-color: #ec2424;">

					<span class="fa-stack fa-2x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-paperclip fa-stack-1x" style="color: #ec2424;"></i>
						<i class="fa fa-paperclip fa-stack-1x fa-spin" style="color: #ec2424;"></i>
					</span>						

					<h2>
						<?php echo $featured_boxes[3]['content']; ?>
					</h2>

				</a>

			</div>
			<!-- END span3 -->

		</div>

	</div>

</section>
<!-- END section featured -->
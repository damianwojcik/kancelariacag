<?php $title_bg = get_field('title_bg'); ?>

<section class="page-title" style="background-image: url('<?php echo $title_bg[url]; ?>');">

	<div class="container">

		<div class="row">

			<h1>
				<?php the_title(); ?> 
			</h1>

		</div>

	</div>

</section>
<!-- END section page-title -->

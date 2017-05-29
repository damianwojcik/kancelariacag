<?php $title_bg = get_field('title_bg'); ?>

<section class="page-title" style="background-image: url('<?php if(is_404()) {
    echo THEME_URL . "/assets/img/court.jpg";
} else {
    echo $title_bg[url];
} ?>');">

	<div class="container">

		<div class="row">

			<h1>
				<?php if(is_404()){
				    echo 'Przepraszamy';
                } else {
                    the_title();
                }?>
			</h1>

		</div>

	</div>

</section>
<!-- END section page-title -->

<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?= THEME_URL; ?>/favicon.ico" type="image/png">

	<?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>


<!-- google analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77292372-1', 'auto');
  ga('send', 'pageview');

</script>


<!-- cookies disclaimer -->
<div id="cookies-section">
	<div class="container">

		<div class="br-only">Na stronie wykorzystujemy Cookies, między innymi w celach statystycznych. <span>Akceptuję Cookies</span></div>
		<div class="mobile-only">Korzystamy z Cookies. <span>Akceptuję</span></div>

	</div>
</div>


<!-- =================================================
	header
================================================== -->
<header>

	<div class="container">

		<div class="row">

			<div class="logo-wrapper">

				<?php $logo = get_field('logo', 'option'); ?>
				<?php $logo_title = get_field('logo_title', 'option'); ?>

				<?php if( !empty($logo) ): ?>

					<a href="<?= SITE_URL; ?>">

						<img class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">

						<?php if( !empty($logo_title) ): ?>

							<span>
								<?php echo $logo_title; ?>
							</span>

						<?php endif; ?>

					</a>

				<?php endif; ?>

			</div>
			<!-- END logo-wrapper -->

			<nav class="desktop">

				<?php dynamic_sidebar('main_menu'); ?>

			</nav>
			<!-- END nav -->

			<!-- mobile nav toggle-->
			<a class="nav-toggle" href="#">

				<div class="menu-toggle">

					<div class="menu-bars">

						<span class="menu-bar"></span>
						<span class="menu-bar"></span>
						<span class="menu-bar"></span>

					</div>

				</div>

			</a>

		</div>

	</div>
	
</header>


<!-- =================================================
	section mobile-navigation
================================================== -->
<section class="mobile-navigation">

	<nav>

		<?php dynamic_sidebar('main_menu'); ?>

	</nav>

</section>
<!-- END mobile-navigation -->

<?php if( is_home() ){ ?>

	<!-- =================================================
		section slider
	================================================== -->
	<?php get_template_part("partials/section", "slider"); ?>


<?php }else {?>

	<!-- =================================================
		section page-title
	================================================== -->
	<?php get_template_part("partials/section", "title"); ?>
	

<?php } ?>


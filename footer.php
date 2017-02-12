<!-- =================================================
	section footer
================================================== -->
<footer>

	<div class="container">

		<div class="row">

			<div class="span3">

				<h3>Menu</h3>

				<nav>

					<?php dynamic_sidebar('main_menu'); ?>

				</nav>

			</div>
			<!-- END span3 -->

			<?php $street = get_field('street', 'option'); ?>
			<?php $city = get_field('city', 'option'); ?>
			<?php $email = get_field('email', 'option'); ?>
			<?php $phone = get_field('phone', 'option'); ?>

			<div class="span3">

				<h3>Kontakt</h3>

				<p class="underline">Kancelaria Prawa Upadłościowego i&nbsp;Restrukturyzacyjnego Franciszek Cag</p>


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
			<!-- END span3 -->

			<div class="span3">

				<h3>Usługi</h3>

				<ul class="services">

					<?php if( have_rows('footer_list', 'option') ): ?>

						<?php while ( have_rows('footer_list', 'option') ) : the_row(); ?>

							<?php $list_element = get_sub_field('list_element'); ?>

							<li><a href="<?php echo esc_url( get_permalink(16) ); ?>"><?php echo $list_element; ?></a></li>

						<?php endwhile; ?>

					<?php endif; ?>

				</ul>

			</div>
			<!-- END span3 -->

			<div class="span3">

				<p class="copy">
					made with passion &copy; by <a href="https://www.damianwojcik.it" target="_blank">damianwojcik.it</a>
				</p>

			</div>
			<!-- END span3 -->

		</div>

	</div>

</footer>

<!-- End Document
================================================== -->
<?php wp_footer(); ?>
</body>
</html>

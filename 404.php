<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<?php get_header(); ?>

    <!-- =================================================
        main
    ================================================== -->
    <main>

        <div class="container">

            <div class="row">

                <h2><strong>Strony nie znaleziono</strong></h2>

                <p>
                    Przepraszamy ale strona, której szukasz (<span style="opacity:0.7;"><?= $actual_link; ?></span>) nie&nbsp;została odnaleziona. Sprawdź adres URL czy&nbsp;nie&nbsp;zawiera błędów lub&nbsp;wróć na&nbsp;<a href="<?= SITE_URL; ?>">Stronę Główną</a>.
                </p>

            </div>

        </div>

    </main>


    <!-- =================================================
        section inline-form
    ================================================== -->
<?php get_template_part("partials/section", "form"); ?>


<?php get_footer(); ?>
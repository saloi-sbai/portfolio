<?php get_header() ?>


<main>
    <div class="container">
        <div id="home_page">
            <?php get_template_part('template-parts/home'); ?>
        </div>
        <div id="projet_page">
            <?php get_template_part('template-parts/projets'); ?>
        </div>
        <div class="competences">
            <?php get_template_part('template-parts/competences'); ?>
        </div>
        <div id="contact_page">
            <!-- affichage du contact -->
            <?php get_template_part('template-parts/contact'); ?>
        </div>
    </div>
</main>

<?php get_footer() ?>
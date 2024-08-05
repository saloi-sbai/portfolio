<?php get_header() ?>


<main>
    <div class="container">
        <?php the_title('<h1>', '</h1>') ?>
        <div class="row">
            <?php the_content(); ?>
        </div>
    </div>
</main>

<?php get_footer() ?>
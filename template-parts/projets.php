<?php
$args = array(
    'post_type'      => 'projet',
    'posts_per_page' => 8,
);

$query = new WP_Query($args);

if ($query->have_posts()) :
?>
    <h2 class="title_projets">Mes projets</h2>
    <section class="projets">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <article class="projet">
                <div class="illustration">
                    <a href="#">
                        <img src="<?php echo esc_url(wp_get_attachment_image_url(get_post_thumbnail_id(), 'desktop-home')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="photo-image">
                    </a>
                </div>
                <div class="extrait"><?php
                                        // On met l'extrait dans une variable   
                                        $content = get_the_excerpt();

                                        // get the first 40 words from the content and added to the $abstract variable
                                        preg_match('/^([^.!?\s]*[\.!?\s]+){0,10}/', strip_tags($content), $abstract);
                                        // pregmatch will return an array and the first 40 chars will be in the first element 
                                        echo $abstract[0] . '...';
                                        ?>
                </div>
            </article>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </section>
<?php else :
    echo 'Aucune projet trouvé.';
endif;

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
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        <img src="<?php echo esc_url(wp_get_attachment_image_url(get_post_thumbnail_id(), 'desktop-home')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="photo-image">
                    </a>
                </div>
                <div class="extrait"><?php
                                        // On met l'extrait dans une variable   
                                        $content = get_the_excerpt();
                                        // On compte le nombre de mots
                                        $word_count = str_word_count($content);
                                        // On coupe le texte à 20 mots
                                        $content = wp_trim_words($content, 20);
                                        // On affiche le contenu
                                        echo $content;
                                        // Si le nombre de mots est supérieur à 20, on affiche un lien
                                        if ($word_count > 20) {
                                            echo '... <a href="' . esc_url(get_permalink()) . '">Lire la suite</a>';
                                        }

                                        ?>
                </div>
            </article>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </section>
<?php else :
    echo 'Aucune projet trouvé.';
endif;

<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <article class="single_projet">
            <div class="projet_infos">
                <div class="content">
                    <?php the_content(); ?>
                </div>
                <div class="content_footer">
                    <div class="technos">
                        <?php
                        $terms = get_the_terms($post->ID, 'technologie');
                        foreach ($terms as $term) {
                            echo '<span class="techno">' . $term->name . '</span>';
                        }
                        ?>
                    </div>
                    <div class="link">
                        <a href="<?php echo esc_url(get_post_meta($post->ID, 'link', true)); ?>" target="_blank">Voir le projet</a>
                    </div>
                </div>
            </div>

            <div class="illustration_projet">
                <img src="<?php echo esc_url(wp_get_attachment_image_url(get_post_thumbnail_id(), 'desktop-home')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="photo-image">
            </div>
            <div class="navigation">
                <div class="next">
                    <?php
                    if (!empty(next_post_link('%link'))) {
                        echo '<i class="fa-solid fa-arrow-left"></i>';
                        next_post_link('%link');
                    };
                    ?>
                </div>

                <div class="home_page">
                    <a href="<?php echo esc_url(home_url()); ?>">Retour à l'accueil</a>
                </div>

                <div class="previous">

                    <?php
                    if (!empty(previous_post_link('%link'))) {
                        echo '<i class="fa-solid fa-arrow-right"></i>';
                        previous_post_link('%link');
                    };
                    ?>
                </div>
            </div>
        </article>
<?php endwhile;
else :
    echo '<p>No content found</p>';
endif;
get_footer(); ?>
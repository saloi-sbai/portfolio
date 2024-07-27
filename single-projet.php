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
                        <a title="Voir le code source" class="tooltip" href="<?php echo esc_url(get_post_meta($post->ID, 'link', true)); ?>" target="_blank"> <i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
            </div>

            <!-- images projet -->
            <div class="illustration_projet">
                <img src="<?php echo esc_url(wp_get_attachment_image_url(get_post_thumbnail_id(), 'desktop-home')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="photo-image">
            </div>
        </article>

        <!-- partie navigation -->
        <div class="navigation">
            <div class="next">
                <?php
                // Retrieve the next post object
                $next_post = get_adjacent_post(false, '', false);

                // Check if there is a next post
                if (!empty($next_post)) {
                    // Display the next post link
                    // Display the arrow icon
                    echo '<i class="fa-solid fa-arrow-left"></i>';
                    next_post_link('%link');
                }
                ?>
            </div>

            <div class="home_page">
                <a href="<?php echo esc_url(home_url()); ?>">Retour à l'accueil</a>
            </div>

            <div class="previous">

                <?php
                // Retrieve the next post object
                $previous_post = get_adjacent_post(false, '', true);

                // Check if there is a next post
                if (!empty($previous_post)) {
                    // Display the next post link
                    // Display the arrow icon
                    previous_post_link('%link');
                    echo '<i class="fa-solid fa-arrow-right"></i>';
                }
                ?>
            </div>
        </div>

<?php endwhile;
else :
    echo '<p>No content found</p>';
endif;
get_footer(); ?>
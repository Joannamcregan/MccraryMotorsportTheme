<?php
get_header();
?>

<div class="main">
    <div class="section"  id="about-section">
        <h3>About</h3>
        <p>
            <?php 
                $page = get_posts([
                    'name'      => '/about',
                    'post_type' => 'page'
                ]);
                if ( $page ){
                    echo '<p>' . wp_trim_words($page[0]->post_content, 40, '...') . '</p>';
                    ?><p class="section--link"><a href="<?php echo esc_url(site_url('/about')); ?>"> read more </a></p>                    
                <?php } 
            ?>
        </p>
    </div>
    
    <div class="section" id="contact-section">
        <h3>Contact</h3>
        <p class="centered-text">Call or Text <strong><?php echo get_option('phone'); ?></strong></p>
    </div>

    <div class="section" id="services-section">
        <h3>Services</h3>
        <p>
            <?php
                $args = array(
                    'post_type' => 'service',
                    'posts_per_page' => -1
                );
                $query = new WP_Query($args);
                if ($query->have_posts()){
                    echo '<ul>';
                    while ($query->have_posts()){
                        $query->the_post();
                        echo '<a href="<?php the_permalink();?>"><li>' . get_the_title() . '</li></a>';
                    }
                    echo '</ul>';
                    wp_reset_postdata();
                    ?><p class="section--link"><a href="<?php echo esc_url(site_url('/services')); ?>"> see all </a></p><?php
                }
            ?>
        </p>
    </div>

    <div class="section" id="reviews-section">
        <h3>Reviews</h3>
        <p>
            <?php
                $args = array(
                    'post_type' => 'review',
                    'posts_per_page' => 3
                );
                $query = new WP_Query($args);
                if ($query->have_posts()){
                    while ($query->have_posts()){
                        $query->the_post();
                        echo '<div class="review-excerpt">';
                            echo '<a href="<?php the_permalink();?>"><h4>' . get_the_title() . '</h4></a>';
                            echo '<p>' . wp_trim_words(get_the_content(), 30, '...') . '</p>';
                            echo '<a href="<?php the_permalink();?>"><p class="review--link">' . '...read more' . '</p></a>';
                        echo '</div>';
                    }
                    wp_reset_postdata();
                    ?><p class="section--link--alt"><a href="<?php echo esc_url(site_url('/reviews')); ?>"> read more reviews </a></p><?php
                }
            ?>
        </p>
    </div>

</div>

<?php
get_footer();
?>
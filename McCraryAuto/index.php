<?php
get_header();
?>

<div class="main">
    <div class="section">
        <h3>About</h3>
        <p>
            <?php 
                $page = get_posts([
                    'name'      => '/about',
                    'post_type' => 'page'
                ]);
                if ( $page ){
                    echo wp_trim_words($page[0]->post_content, 100, '...');
                    ?><p class="section--link"><a href="<?php echo esc_url(site_url('/about')); ?>"> see more </a></p>                    
                <?php } 
            ?>
        </p>
    </div>

    <div class="section">
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
                        echo '<li>' . get_the_title() . '</li>';
                    }
                    echo '</ul>';
                    wp_reset_postdata();
                }
            ?>
        </p>
    </div>
</div>

<?php
get_footer();
?>
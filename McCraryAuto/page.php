<?php get_header();

    ?><div class="main--block">
        <div class="section">
            <?php wp_reset_postdata();
            the_content(); ?>
        </div>
    </div>

<?php get_footer();
?>
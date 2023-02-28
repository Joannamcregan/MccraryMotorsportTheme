<?php
    get_header();
    ?><div class="main--block">
        <h1 class="centered-text">Services</h1>
        <?php while(have_posts()){
            the_post();
            ?><a class="no-underline" href="<?php the_permalink(); ?>">
                <div class="section--bar">
                    <?php the_title(); ?>
                </div>
            </a>
        <?php }
    ?><p class="centered-text">Not sure what your car needs or looking to have something else done?</p>
    <p class="centered-text">Call or text <strong><?php echo get_option('phone'); ?></strong>.</p>
    </div>
    <?php get_footer();
?>
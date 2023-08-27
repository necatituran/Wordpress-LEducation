<?php get_header();

    while(have_posts()){
        the_post(); ?>
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <?php the_content(); ?>
        <hr>
    <?php }

    get_footer();

?>


<?php while(have_posts()): the_post(); ?>


    <h2 class="mb-3"><?php the_title(); ?></h2>
    <?php the_content(); ?>


<?php endwhile; ?>
<?php
/*
AJAX Results Template Example

This is an example of a template part which can be used to customize how search
results appear when using AJAX.
*/
?>

<?php if ( have_posts() ): ?>
   <?php while ( have_posts() ): the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><strong><?php esc_html__( 'Author', 'wp-advanced-search' ); ?>:</strong> <?php the_author();?> &nbsp;&nbsp; <strong><?php esc_html__( 'Date', 'wp-advanced-search' ); ?>:</strong> <?php the_date();?></p>
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>"><?php esc_html__( 'Read more...', 'wp-advanced-search' ); ?></a></p>

    <?php endwhile; ?>

<?php else : ?>

    <p><?php esc_html__( 'Sorry, no posts matched your criteria.', 'wp-advanced-search' ); ?></p>

<?php endif; ?>

<?php wp_reset_query(); ?>

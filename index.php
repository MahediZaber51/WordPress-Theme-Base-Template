<?php
/**
 * The main template file
 *
 * @package Your_Theme
 * @link https://github.com/MahediZaber51/WordPress-Theme-Base-Template
 */
?>

<?php get_header(); ?>
<main>
    <!-- Main content of the theme -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
        </article>
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'your-theme' ); ?></p>
    <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

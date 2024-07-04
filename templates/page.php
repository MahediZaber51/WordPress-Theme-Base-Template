<?php
/**
 * The page template
 *
 * @package Your_Theme
 * @link https://github.com/MahediZaber51/WordPress-Theme-Base-Template
 */
?>

<?php get_header(); ?>
<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no pages matched your criteria.', 'your-theme' ); ?></p>
    <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

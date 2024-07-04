<?php
/**
 * The single post template
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
            <div class="post-meta">
                <span class="author"><?php _e( 'By', 'your-theme' ); ?> <?php the_author(); ?></span>
                <span class="date"><?php the_date(); ?></span>
            </div>
            <?php comments_template(); ?>
        </article>
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'your-theme' ); ?></p>
    <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

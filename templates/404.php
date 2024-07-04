<?php
/**
 * The 404 template
 *
 * @package Your_Theme
 * @link https://github.com/MahediZaber51/WordPress-Theme-Base-Template
 */
?>

<?php get_header(); ?>
<main>
    <h1><?php _e( 'Page Not Found', 'your-theme' ); ?></h1>
    <p><?php _e( 'Sorry, but the page you were looking for could not be found.', 'your-theme' ); ?></p>
    <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Return to the homepage', 'your-theme' ); ?></a></p>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

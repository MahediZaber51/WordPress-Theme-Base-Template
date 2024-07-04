<?php
/**
 * The sidebar template
 *
 * @package Your_Theme
 * @link https://github.com/MahediZaber51/WordPress-Theme-Base-Template
 */
?>

<aside>
    <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'primary-sidebar' ); ?>
    <?php else : ?>
        <p><?php _e( 'Add widgets to the sidebar.', 'your-theme' ); ?></p>
    <?php endif; ?>
</aside>

<?php
/**
 * The comments template
 *
 * @package Your_Theme
 * @link https://github.com/MahediZaber51/WordPress-Theme-Base-Template
 */
?>

<?php
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            printf(
                _nx(
                    'One comment on &ldquo;%2$s&rdquo;',
                    '%1$s comments on &ldquo;%2$s&rdquo;',
                    get_comments_number(),
                    'comments title',
                    'your-theme'
                ),
                number_format_i18n( get_comments_number() ),
                get_the_title()
            );
            ?>
        </h2>

        <ul class="comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ul',
                'short_ping'  => true,
                'avatar_size' => 50,
            ) );
            ?>
        </ul>

        <?php the_comments_navigation(); ?>
    <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.', 'your-theme' ); ?></p>
    <?php endif; ?>

    <?php comment_form(); ?>
</div>

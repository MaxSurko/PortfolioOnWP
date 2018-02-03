<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
    register_setting( 'sample_options', 'sample_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
    add_theme_page( __( 'Настройки найшей темы', 'sampletheme' ), __( 'Настройки найшей темы', 'sampletheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create arrays for our select and radio options
 */

function theme_options_do_page() {
    global $select_options, $radio_options;

    if ( ! isset( $_REQUEST['settings-updated'] ) )
        $_REQUEST['settings-updated'] = false;

    ?>
    <div class="wrap">
        <?php screen_icon(); echo "<h2>" . get_current_theme() . __( ': Настройки', 'sampletheme' ) . "</h2>"; ?>

        <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
            <div class="updated fade"><p><strong><?php _e( 'Options saved', 'sampletheme' ); ?></strong></p></div>
        <?php endif; ?>

        <form method="post" action="options.php">
            <?php settings_fields( 'sample_options' ); ?>
            <?php $options = get_option( 'sample_theme_options' ); ?>

            <table class="form-table">

                <?php
                /**
                 * A sample text input option
                 */
                ?>
                <tr valign="top"><th scope="row"><?php _e( 'Logo text', 'sampletheme' ); ?></th>
                    <td>
                        <input id="sample_theme_options[logotext]" class="regular-text" type="text" name="sample_theme_options[logotext]" value="<?php esc_attr_e( $options['logotext'] ); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e( 'Your email (for forms)', 'sampletheme' ); ?></th>
                    <td>
                        <input id="sample_theme_options[your email]" class="regular-text" type="text" name="sample_theme_options[your email]" value="<?php esc_attr_e( $options['your email'] ); ?>" />
                    </td>
                </tr>

                <tr valign="top"><th scope="row"><?php _e( 'Link for button (Explore more)', 'sampletheme' ); ?></th>
                    <td>
                        <input id="sample_theme_options[explore more]" class="regular-text" type="text" name="sample_theme_options[explore more]" value="<?php esc_attr_e( $options['explore more'] ); ?>" />
                    </td>
                </tr>

            </table>

            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'sampletheme' ); ?>" />
            </p>
        </form>
    </div>
    <?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
    global $select_options, $radio_options;

    // Say our textarea option must be safe text with the allowed tags for posts
    $input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

    return $input;
}
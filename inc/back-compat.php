<?php
/**
 * Guo Yunhe 2 back compat functionality
 *
 * Prevents Guo Yunhe 2 from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Guo_Yunhe_2
 * @since Guo Yunhe 2 1.0
 */

/**
 * Prevent switching to Guo Yunhe 2 on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Guo Yunhe 2 1.0
 */
function guoyunhe2_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'guoyunhe2_upgrade_notice' );
}
add_action( 'after_switch_theme', 'guoyunhe2_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Guo Yunhe 2 on WordPress versions prior to 4.7.
 *
 * @since Guo Yunhe 2 1.0
 *
 * @global string $wp_version WordPress version.
 */
function guoyunhe2_upgrade_notice() {
	$message = sprintf( __( 'Guo Yunhe 2 requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'guoyunhe2' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Guo Yunhe 2 1.0
 *
 * @global string $wp_version WordPress version.
 */
function guoyunhe2_customize() {
	wp_die( sprintf( __( 'Guo Yunhe 2 requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'guoyunhe2' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'guoyunhe2_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Guo Yunhe 2 1.0
 *
 * @global string $wp_version WordPress version.
 */
function guoyunhe2_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Guo Yunhe 2 requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'guoyunhe2' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'guoyunhe2_preview' );

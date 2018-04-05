<?php
/**
 * Template for displaying search forms in Guo Yunhe 2
 *
 * @package WordPress
 * @subpackage Guo_Yunhe_2
 * @since 1.0
 * @version 1.0
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search"class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'guoyunhe2' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><?php echo _x( 'Search', 'guoyunhe2' ); ?></button>
</form>

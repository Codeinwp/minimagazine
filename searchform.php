<?php
/**
 * The template for displaying search forms in minimagazine
 *
 * @package minimagazine
 */
?>

<form class="searchForm" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'minimagazine' ); ?>" />
	<input type="text" placeholder="search for something" name="s" />
</form>

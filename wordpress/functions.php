<?
/*
* functions.php
* Add this function to a WordPress theme file to properly add classes
* to sub-menu items for responsive navigation to work with WordPress navigation
*
*/

//add custom class name to navigation elements with child pages
add_filter( 'wp_nav_menu_objects', 'add_has_children_to_nav_items' );

function add_has_children_to_nav_items( $items ){
	$parents = wp_list_pluck( $items, 'menu_item_parent');
	foreach ( $items as $item )
		in_array( $item->ID, $parents ) && $item->classes[] = 'has-submenu';
	return $items;
}
<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Catch Themes
 * @subpackage Fabulous Fluid
 * @since Fabulous Fluid 0.2
 */

/**
 * fabulous_fluid_before_secondary hook
 */
do_action( 'fabulous_fluid_before_secondary' );

$fabulous_fluid_layout = fabulous_fluid_get_theme_layout();

if ( 'no-sidebar' == $fabulous_fluid_layout ) {
	return;
}

do_action( 'fabulous_fluid_before_primary_sidebar' );
?>
	
<?php
/**
 * fabulous_fluid_after_primary_sidebar hook
 */
do_action( 'fabulous_fluid_after_primary_sidebar' );

/**
 * fabulous_fluid_after_secondary hook
 *
 */
do_action( 'fabulous_fluid_after_secondary' );


<?php
/**
 * Plugin Name:     Sample Unittest Plugin
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     Learning WordPress plugin unit testing in this plugin
 * Author:          Alberuni Azad
 * Author URI:      https://twitter.com/HelloAlberuni
 * Text Domain:     sample-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 */

// Assume $values comes from database dynamically
// It's possible that some times there will be no values, so the example 1: below will lead a DivisionByZeroError

// Example 1
function calculate_average( $values ){
	return 60 / count($values);
}

// Let's solve make a unit test for the example 1 function, so the error will be produced while run the unit test, and from the error during unit test. Updated the example 1 function below.

// Example 2 (Updated error free functions)
// function calculate_average( $values ){
// 	if( $values ){
// 		return 60 / count($values);
// 	}

// 	return '';
// }


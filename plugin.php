<?php
/*
Plugin Name: CI Slope calculator
Plugin URI: https://www.calculator.io/slope-calculator/
Description: The slope calculator finds the slope of a line using the slope formula. It can also find point coordinates, incline angle, and length if the slope and one point are known.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_slope_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Slope Calculator by Calculator.iO";

function display_ci_slope_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Slope Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_slope_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_slope_calculator', 'display_ci_slope_calculator' );
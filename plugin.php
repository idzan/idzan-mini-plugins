<?php
/*
Plugin Name: CPT & Tweaks for idzan.eu
Plugin URI: https://idzan.eu
Description: Tweaks and Custom Post Type - Portfolio for my WordPress based Site
Version: 1.0
Author: Marko Idzan
Author URI: https://idzan.eu
License: GPLv3
*/

// Custom Post Type - Portfolio with Taxonomies
require 'portfolio.php';

// Removal of WordPress Generator tag and RSS Feed tags
// Also removes Windows Live Writer Manifest File (Security Fix)
require 'header-optimize.php';

// Login Page Tweaks
require 'login.php';

// Emoji removal, as it is bloated, use System provided ones
require 'emoji-removal.php';

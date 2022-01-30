<?php

/* Remove RSS and related links from head
 * As described here: https://stackoverflow.com/questions/34750148/how-to-delete-remove-wordpress-feed-urls-in-header
 * and here: https://wordpress.stackexchange.com/questions/211467/remove-json-api-links-in-header-html */
 remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
 remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
 remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
 remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
 remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
 remove_action( 'wp_head', 'rest_output_link_wp_head'); // Outputs the REST API link tag into page header.
 remove_action( 'wp_head', 'wp_oembed_add_discovery_links'); // Adds oEmbed discovery links in the website.
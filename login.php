<?php 

// Change login URL for logo to redirect not to WordPress.org but to Site Homepage
function change_wp_login_url() {
	return bloginfo('url');
}
add_filter('login_headerurl', 'change_wp_login_url');


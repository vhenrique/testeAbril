<?php
// Remove the WP version from the header
	add_filter('the_generator', 'vhs_remove_wp_version');
	function vhs_remove_wp_version(){
		return '';
	}

// Add a class to the navigation buttons
	add_filter('next_posts_link_attributes', 'vhs_posts_link_attributes');
	add_filter('previous_posts_link_attributes', 'vhs_posts_link_attributes');
	function vhs_posts_link_attributes(){
		return 'class="nav-links"';
	}

// WP Login
	function vhs_wp_login() {
        echo '<style type="text/css">';
            echo 'body.login div#login h1::after{content:"'.get_bloginfo('site_title').'"; color: #FFF;}';
            echo 'body.login {background-image: url('.get_template_directory_uri().'/screenshot.png); background-repeat:no-repeat; background-position:50%; background-size:50%;} body.login div#login h1 a, #nav {display: none;}';
            echo 'body.login form{background:#000;}';
            echo 'body.login form input{color:#fbfbfb;}';
            echo 'body.login form p label{color:#FFF;}';
        echo '</style>';
    }
    add_action( 'login_enqueue_scripts', 'vhs_wp_login' );
    
// Admin footer info
	function admin_footer(){
	    echo '<div id="wpfooter" role="contentinfo">';
		echo sprintf('<p id="footer-left" class="alignleft"><span id="footer-thankyou">Theme developped by <a href="%s" title="%s" target="_BLANK">vhenrique</a>. Thanks for use!</span></p>', 'http://vhenrique.com', 'Vhenrique portfolio.');
		echo sprintf('<p id="footer-upgrade" class="alignright"><a href="%s" title="%s"><img src="%s" width="50px"/></a></p>', 'http://vhenrique.com', 'Vhenrique portfolio.', TEMPLATEURL.'/screenshot.png');
		echo '<div class="clear"></div></div>';
	}
	add_action( 'admin_footer', 'admin_footer' );
	add_filter( 'update_footer', '__return_empty_string', 11 );
?>
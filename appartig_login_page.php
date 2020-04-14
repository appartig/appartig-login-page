<?php
	
	/*
		Plugin Name: AppArtig Login Page
		Description: Login Page Styling with AppArtig e.U. Logo
		Version:     1.0.0
		Author:      AppArtig e.U.
		Author URI:  https://www.appartig.at
		License:     APPARTIG/AGB
		License URI: https://www.appartig.at/agb
		Text Domain: aalp
	*/

	/******************************************************
	** Main
	******************************************************/

	defined('ABSPATH') || exit('');

	add_action('login_enqueue_scripts', function() {

?>
		<style type="text/css">
			#login h1 a, .login h1 a {
				background-image: url(<?php echo plugin_dir_url( __FILE__ ) . "img/logo.png"; ?>);
				height: 46px;
    			width: 220px;
				background-size: contain;
				background-repeat: no-repeat;
				margin-bottom: 30px;
			}
		</style>
<?php
	
	});

	add_filter('login_headerurl', function () {
		return home_url();
	});

	add_filter('login_headertitle', function () {
		return get_bloginfo() . ' by AppArtig e.U.';
	});

?>
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

	add_filter('login_headertext', function () {
		return get_bloginfo() . ' by AppArtig e.U.';
	});

	add_action('wp_head', function () {
?>	
	<!--

	- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	- - -        __                __                         - - -
	- - -    ___/ /__  ___  ___   / /  __ __                  - - -
	- - -   / _  / _ \/ _ \/ -_) / _ \/ // /                  - - -
	- - -   \_,_/\___/_//_/\__/ /_.__/\_, /                   - - -
	- - -                            /___/                    - - -
	- - -       ___                ___         __  _          - - -
	- - -      /   |  ____  ____  /   |  _____/ /_(_)___ _    - - -
	- - -     / /| | / __ \/ __ \/ /| | / ___/ __/ / __ `/    - - -
	- - -    / ___ |/ /_/ / /_/ / ___ |/ /  / /_/ / /_/ /     - - -
	- - -   /_/  |_/ .___/ .___/_/  |_/_/   \__/_/\__, /      - - -
	- - -         /_/   /_/                      /____/       - - -
	- - -                                                     - - -
	- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	- - -                                                     - - -
	- - -   AppArtig e.U. ist ein Ein-Personen-Unternehmen    - - -
	- - -   von Jakob Vesely und entwickelt Software 		  - - -
	- - -   im Herzen von Niederösterreich.       			  - - -
	- - -                                                     - - -
	- - -   office@appartig.at                                - - -
	- - -   www.appartig.at                                   - - -
	- - -                                                     - - -
	- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	
	-->

<?php
	}, 0);

?>
<?php
/**
 * Plugin Name: Origami-Export
 * Plugin URI: https://github.com/syfxlin/origami-wp-hexo
 * Description: Origami-Export
 * Author: Otstar Lin
 * Author URI: https://ixk.me
 * Version: 1.0.0
 * License: GPL3.0
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 *
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once( ABSPATH . 'wp-admin/includes/export.php' );

function origami_export() {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'origami_export') {
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
            $user = get_user_by('id', '1');
            if(wp_check_password($_POST['password'], $user->data->user_pass, $user->ID)) {
                $args = ['content' => 'all'];
                $args = apply_filters( 'export_args', $args );
                export_wp( $args );
            } else {
                http_response_code(401);
                // echo 'error';
            }
            die();
        }
    }
}
add_action('init', 'origami_export');

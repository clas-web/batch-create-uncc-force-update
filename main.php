<?php
/*
Plugin Name: Batch Create - Force Update
Plugin URI: https://github.com/clas-web/batch-create-uncc-force-update
Description: On activation, forces the Batch Create plugin to run its update code.
Version: 1.1.0
Author: Crystal Barton
Author URI: https://www.linkedin.com/in/crystalbarton
GitHub Plugin URI: https://github.com/clas-web/batch-create-uncc-force-update
*/


register_activation_hook( __FILE__, 'bcfu_update_batch_create' );


/**
 * Force the Batch Create plugin to run its update code.
 */
if( !function_exists('bcfu_update_batch_create') ):
function bcfu_update_batch_create()
{
	if( !class_exists('Incsub_Batch_Create_Model') )
		require_once( ABSPATH . 'wp-content/plugins/batch-create-uncc/model/model.php' );
	$model = Incsub_Batch_Create_Model::get_instance();
	$model->create_schema();
}
endif;


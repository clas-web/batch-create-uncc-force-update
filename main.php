<?php
/*
Plugin Name: Batch Create - Force Update
Plugin URI: 
Description: On activation, forces the Batch Create plugin to run its update code.
Version: 1.0.0
Author: Crystal Barton
Author URI: http://www.crystalbarton.com
*/

register_activation_hook( __FILE__, array('BatchCreate_ForceUpdate' , 'update_batch_create') );

class BatchCreate_ForceUpdate
{
	public static function update_batch_create()
	{
		if( !class_exists('Incsub_Batch_Create_Model') )
			require_once( ABSPATH . 'wp-content/plugins/batch-create-uncc/model/model.php' );
		$model = Incsub_Batch_Create_Model::get_instance();
		$model->create_schema();
	}
}



<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Init file for smarty module. This sets up the demo which can be accessed at
 * {base_url}/smarty. Delete/rename/comment out this file if you don't want the
 * demo.
 *
 * @todo don't set route in production mode.
 *
 * @package    Smarty3
 * @author     Mr Anchovy
 * @copyright  (c) 2011 Mr Anchovy
 * @license    http://kohanaframework.org/license
 */
Route::set('smarty', 'smarty(/<template>)')
	->defaults(array(
		'controller' => 'smartydemo',
		'action'     => 'index',
	));

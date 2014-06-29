<?php
/* ***********************************************************************
 * @author : Purusothaman Ramanujam
 * @link http://www.iYaffle.com/
 * ***********************************************************************/

	register_elgg_event_handler('init','system','disable_members_menu_item_init');

	function disable_members_menu_item_init() 
	{
		if (!elgg_is_admin_logged_in()) // I only show More menu and Members item for administrator
		{
           elgg_unregister_plugin_hook_handler('prepare', 'menu:site', 'elgg_site_menu_setup');
		   elgg_unregister_menu_item('site','members');
		}
}
?>
<?php

class ES_Menus {
	
	
	public function __construct() {
		
		add_action( 'admin_menu', array( $this, 'admin_menu' ), 6 );
}

public function admin_menu() {
		global $menu;
	    if (! current_user_can( 'manage_options' ) )
	    	$menu[] = array( '', 'read', 'separator-sportspress', '', 'wp-menu-separator sportspress' );
		$main_page = add_menu_page('Esport', 'Esport', 'manage_options', 'es_options', 'es_options', $icon_url = plugins_url('Admin/img/AHQ.png'), 2);
		
	}
	

}


return new ES_Menus();
?>
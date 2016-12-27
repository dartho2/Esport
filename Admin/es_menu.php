<?php







function esport_menu(){
		add_menu_page('Esport', 'Esport', 'manage_options', 'es_options', 'es_options', $icon_url = plugins_url('Admin/img/AHQ.png'), 2);
		add_submenu_page('es_options', 'Add_Team', 'Add Team', 'manage_options', 'es_add_team', 'config_page');
		}
add_action('admin_menu', 'esport_menu'); /* Wywolanie menu w panelu admin */

function es_options(){
	if (! current_user_can( 'manage_options' ))
	{
		wp_die(__('brak uprawnien do tej strony'));
		
	}


/* glowna strona menu */

	
}



function es_add_team(){
	if (! current_user_can( 'manage_options' ))
	{
		wp_die(__('brak uprawnien do tej strony'));
	}	
}
function config_page() {
		include( 'views/html-admin-config.php' );
	}

?>
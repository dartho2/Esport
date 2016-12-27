<?php

function register_menu(){
	register_nav_menu('header-menu' , _('header-menu'));

}

add_action('init', 'register_menu');



?>
<?php
/*
Plugin Name: DL Maintenance Mode
Description: Включаем режим обслуживания на сайте 
Plugin URI: http://vcard.dd-l.name/wp-plugins/
Version: 1.0
Author: Dyadya Lesha (info@dd-l.name)
Author URI: http://dd-l.name
*/


add_action('get_header', 'dl_maintenance_mode');

function dl_maintenance_mode() {
    if ( !(current_user_can( 'administrator' ) ||  current_user_can( 'super admin' ))) {
    wp_die('<h1 style="font-size:32px;">Сайт на обслуживании</h1>
			<p style="font-size: 18px;">Извините, сейчас наш сайт закрыт на ремонтные работы. Загляните чуть позже, спасибо. Мы ценим ваше терпение.</p>', 'Сайт на обслуживании');
    }
}
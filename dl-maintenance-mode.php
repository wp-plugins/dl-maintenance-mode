<?php
/*
Plugin Name: DL Maintenance Mode
Description: Включаем режим обслуживания на сайте 
Plugin URI: http://vcard.dd-l.name/wp-plugins/
Version: 1.1
Author: Dyadya Lesha (info@dd-l.name)
Author URI: http://dd-l.name
*/


// Выводим сообщение 'Сайт на обслуживании'
add_action('get_header', 'dl_maintenance_mode');

function dl_maintenance_mode() {
    if ( !(current_user_can( 'administrator' ) ||  current_user_can( 'super admin' ) ||  current_user_can( 'editor' ))) {
    wp_die('<h1 style="font-size:32px;">Сайт на обслуживании</h1>
			<p style="font-size: 18px;">Извините, сейчас наш сайт закрыт на ремонтные работы. Загляните чуть позже, спасибо. Мы ценим ваше терпение.</p>', 'Сайт на обслуживании');
    }
}


// Выводим сообение в Admin Head
add_action('admin_head', 'dl_maintenance_mode_msg');

function dl_maintenance_mode_msg()
{
	echo '<div id="message" class="error"><p>Сайт находиться в режиме обслуживании. По окончанию работ перейдите в раздел <strong><a href="../wp-admin/plugins.php">Плагины</a></strong> и диактивируйте <strong>DL Maintenance Mode</strong>.</p></div>';
}
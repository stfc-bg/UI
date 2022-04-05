<?php
$config=array();
$config['server']="localhost";
$config['port']=3306;
$config['user']="stfc";
$config['password']='$S6ij27c';
$config['game_database']="test_stfc";
$config['game_url']="https://test.stfc.fam-hinrichsen.de/ui/game";
$config['site_url']="https://test.stfc.fam-hinrichsen.de/ui";
$config['game_path']="/var/www/vhosts/fam-hinrichsen.de/test.stfc.fam-hinrichsen.de/ui/game/";
$config['scheduler_path']="/var/www/vhosts/fam-hinrichsen.de/test.stfc.fam-hinrichsen.de/scheduler/";
$config['galaxy']=0;
$config['uploaddir'] = '/var/www/vhosts/fam-hinrichsen.de/test.stfc.fam-hinrichsen.de/gallery/';
$config['admin_email'] = 'florian@fam-hinrichsen.de';

define ('ERROR_LOG_FILE', '/var/www/vhosts/fam-hinrichsen.de/test.stfc.fam-hinrichsen.de/error_log.htm');
define ('ADMIN_LOG_FILE', '/var/www/vhosts/fam-hinrichsen.de/test.stfc.fam-hinrichsen.de/admin_log.htm');
define('DEFAULT_GFX_PATH', 'https://test.stfc.fam-hinrichsen.de/graphics/stfc_gfx/');
define('PROXY_GFX_PATH', 'https://test.stfc.fam-hinrichsen.de/graphics/stfc_gfx/');
define('JSCRIPT_PATH', 'https://test.stfc.fam-hinrichsen.de/ui/game/');
?>
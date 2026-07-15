<?php
// Obtiene la instancia del objeto que guarda los datos de configuración
$config = Config::singleton();

// Carpetas para los Controladores, los Modelos y las Vistas
$config->set('controllersFolder', 'controllers/');
$config->set('modelsFolder', 'models/');
$config->set('viewsFolder', 'views/');

// Parámetros de conexión a la BD
// Parámetros de conexión a la BD
//$config->set('dbhost', 'localhost');
//$config->set('dbname', 'test');
//$config->set('dbuser', 'root');
//$config->set('dbpass', '');


$config->set('dbhost', 'hayabusa.proxy.rlwy.net:55164');
$config->set('dbname', 'railway');
$config->set('dbuser', 'root');
$config->set('dbpass', 'HLATxBNBbujWqwhYVJzaLiRBIFZVpghh');

//mysql://root:ciTQiihTMkrqrUVDoFPHleNoZEhOYzMi@shuttle.proxy.rlwy.net:49542/railway
//mysql://root:HLATxBNBbujWqwhYVJzaLiRBIFZVpghh@hayabusa.proxy.rlwy.net:55164/railway  este es el mio
?>

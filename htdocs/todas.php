<?php

$dbUser = 'admin';
$dbPwd = 'jK3mwHkS';
$dbNameControl = 'tv_control';

$control = new mysqli('localhost', $dbUser, $dbPwd, $dbNameControl);
if(!$control) {
        print 'Error al conectarse a la base'.PHP_EOL;
        exit(0);
}
$query = 'SELECT * FROM tiendas';
$result = $control->query($query);
if(!$result){
        print 'Error al ejecutar query "'.$query.'"'.PHP_EOL;
        exit(0);
}

while($row = $result->fetch_assoc()){
	if(!isset($row['db_name']) || trim($row['db_name']) == ''){
	        print 'No se encontro resultado'.PHP_EOL;
	        exit(0);
	}
	
	$db_name = $row['db_name'];
	$clave = $row['Clave'];

	$p_m = './xargs.sh '.$clave;
	exec($p_m);
	//print $p_m.PHP_EOL;
}

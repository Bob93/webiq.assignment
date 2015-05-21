<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
	'driver' => 'mysql',
	'host' => '127.0.0.1',
	'username' => 'root',
	'password' => 'root',
	'database' => 'mvccontacts',
	'charset' => 'latin1',
	'collation' => 'latin1_swedish_ci',
	'prefix' => ''
]);

$capsule->bootEloquent();

?>
<?php

$router = new Phalcon\Mvc\Router(false);

$router->add('/', [
	'controller'	=> 'main',
	'action'		=> 'index'
]);

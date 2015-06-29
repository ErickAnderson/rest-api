<?php
//Carrega dependências
require 'vendor/autoload.php';

//instancia o objeto e define o caminho para templates (default = templates)
$app = new \Slim\Slim(array(
	'templates.path' => 'templates'
));

//define a rota para users
include_once 'routers/user.php';

//rode a aplicação Slim
$app->run();
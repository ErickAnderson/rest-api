<?php
//Define rotas para o grupo URI /users
$app->group('/user', function() use ($app){
	//rota para a home
	$app->get('/', function() use ($app){
		//exemplo de lista de usuarios
		$users = array(
			'user' => array(
				'erick' => 'senhaerick',
				'joão' => 'senhajoao',
				'teste' => 'testesenha'
				)
			);
		$data = array(
			'data' => $users
			);
		$app->render('json.php', $data, 200);
	});

	//rota para login
	$app->post('/login/', function() use ($app){
		if (isset($_POST)) {
			$data = $_POST;
			$app->render('json.php', $data, 200);
		} else {
			$app->render(404);
		}
	});
});
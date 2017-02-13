<?php 

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/login', function (Request $request, Response $response) {

    $login = new ctl_Login($_POST['usuario'], $_POST['clave']);
    $is_valid = $login->Validate();
    if ($is_valid) {
    	header('Location: /dashboard');
    	exit;
    } else {
    	header('Location: /');
    	exit;
    }

});

?>
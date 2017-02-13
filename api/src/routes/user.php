<?php 

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/user', function (Request $request, Response $response) {
	$user = new User();
	$message = $user->Message();
	$response->getBody()->write($message);

	return $response;
});

?>
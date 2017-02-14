<?php 

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/comercial', function (Request $request, Response $response) {

    return $this->view->render($response, 'comercial.html', [
        'employees' => $result

    ]);
});

?>
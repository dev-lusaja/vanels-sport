<?php 

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/almacen', function (Request $request, Response $response) {

    return $this->view->render($response, 'almacen.html', [
        'employees' => $result

    ]);
});

?>
<?php 

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/dashboard', function (Request $request, Response $response) {

    return $this->view->render($response, 'dashboard.html', [
        'employees' => $result

    ]);
});

?>
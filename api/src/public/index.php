<?php 

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'api/configs/init.php';

$app = new \Slim\App;


$container = $app->getContainer();
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('api/templates', [
        'cache' => 'api/templates/cache'
    ]);
    
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    return $view;
};


require 'api/routes/router.php';

$app->run();

?>

<?php

require '../vendor/autoload.php';

$app = new \Slim\App;
$container = $app->getContainer();
$root = dirname(__DIR__);

$container['view'] = new \Slim\Views\Twig("$root/views");
$container['data'] = new \Skybet\DataLoader("$root/data");

$app->get('/',  'Skybet\\PeopleController:display');
$app->post('/', 'Skybet\\PeopleController:update');

$app->run();

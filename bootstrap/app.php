<?php
require __DIR__.'../../vendor/autoload.php';
ini_set('display_errors',1);
$settings = require __DIR__ . '/../src/settings.php';
// App instance
$app = new \Slim\App($settings);

$container = $app->getContainer();

//CORS handler
$app->add(new \Tuupola\Middleware\Cors([
    "origin" => ["*"],
    "methods" => ["GET", "POST", "PUT", "PATCH","OPTIONS", "DELETE"],
    "headers.allow" => [],
    "headers.expose" => [],
    "credentials" => false,
    "cache" => 0,
]));

// Eloquent
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function($container) use ($capsule){
    return $capsule;
};

//
$container['TestController'] = function($container){
    return new \App\Controllers\TestController;
};

//
$container['randomPass'] = function($container){
   return new \App\Helpers\RandomPass;
};


require __DIR__.'/../app/routes.php';

<?php

$app->get('/',function($request,$response){
    
    return $response->withJson( [
        'name'=>'App',
        'version'=>'1.0.0',
        'owner'=>'Someone'
    ] );
});
//Auth
$app->get('/hello','TestController:sayHello');
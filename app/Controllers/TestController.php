<?php

namespace App\Controllers;

/**
* 
*/
class TestController
{
	
	function sayHello($request,$response)
	{

		return $response->withJson(['cod'=>'00','msg'=>$request->getParam('name')]);
	}
}
<?php

// Arquivo responsável por gerenciar as rotas

$action = '/' . $_GET['action'];



echo "action: " . $action . "<br>";


$allowedRoutes = [
	'/view-promo' => 'ProductController@listProductsInPromotion',
	'/view-categories' => 'ProductController@teste',
	'/view-cart' => 'CartController@view'
];

if(array_key_exists($action, $allowedRoutes)){
	$route = $allowedRoutes[$action];

	list($controller, $method) = explode('@', $route);

	// echo "Controller {$controller} Metodo {$method}";

	require_once "../Controllers/". $controller . ".php";

	// Verificando se a classe do diabo do cotroller existe
	if(class_exists($controller)){
		$controllerInstance = new $controller();
	}

	// var_dump($controllerInstance);

	// Vendo tambem se o metodo existe
	if(method_exists($controllerInstance, $method)){
		$controllerInstance->$method();
	}else{
		echo "Método não encontrado!";
	}

}else{
	echo "Erro 404! Rota não encontradakkkk";
}
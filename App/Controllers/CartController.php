<?php

session_start();

/*
	Controller do carrinho de compras
	Author: Mateus 'oestrangeiro' Almeida
*/

class CartController{

	protected $productsInCart;

	public function view(){
		$this->productsInCart =  $_SESSION['cart'];

		require "../Views/in-cart.php";

		foreach ($this->productsInCart as $product => $value) {
			echo "Produto {$product} -- Valor: R$: {$value} -- Qntd 1<br>";
		}
	}
}
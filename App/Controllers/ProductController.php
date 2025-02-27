<?php

/*
	Controller do Prodtuo
	Author: Mateus 'oestrangeiro' Almeida
*/

require "../Models/ProductModel.php";

class ProductController extends ProductModel{

	public function listProductsInPromotion(){

		$productModel = new ProductModel();

		require "../Views/in-promotion.php";

		$productModel->getAllProductsInPromotion();
		$result = $productModel->getResult();

		echo "<pre>";
		print_r($result);
		echo "</pre>";
	}
}
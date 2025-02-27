<?php

/*
	Script de configuração do banco de dados com PDO
	Author: Mateus 'oestrangeiro' Almeida
*/

class Database {
	// ATRIBUTOS

	private static $database_addr = 'localhost';
	private static $database_name = 'deposito_bom_preco';
	private static $user = 'admin';
	private static $passwd = 'admin';
	

	// METODOS

	public static function getConnection(){
		try {
			// Variavel que será retornada para fazer as conexões com o banco
			$conn =  new PDO(
				'mysql:host=localhost;dbname=' .
				self::$database_name,
				self::$user,
				self::$passwd
			);

			// Em caso de sucesso, retorna a conexao
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;

		} catch (PDOException $e) {
			// Em caso de erro, retona uma mensagem
			echo "ERRO AO CONECTAR AO BANCO: {$e->getMessage()}\n";
		}
		
	}

}
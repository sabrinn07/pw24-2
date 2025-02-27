<?php



/*
	Model dos produtos no banco de dados
*/

require __DIR__ . "/Manager.php";


class ProductModel extends Manager{
	// ATRIBUTOS
	private $table_name  = 'produtos';
	protected $conn;
	protected $result;
	protected $fields = [
		'nome',
		'quantidade',
		'marca',
		'descricao',
		'categoria',
		'preco',
		'unidade',
		'esta_em_promocao',
		'nome_da_imagem',
		'valor_promocao'
	];

	public function __construct(){
		$this->conn = Manager::getConnection();
	}

	// METODOS

	// Não sei se em inglês 'promoção' é 'in offer', 'discount' ou 'promotion',
	// Nesse caso, vai 'promotion' mesmo
	public function getAllProductsInPromotion(){
		$query = "SELECT * FROM {$this->table_name} WHERE esta_em_promocao=1";

		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		$produtosEmPromocao = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$this->result = $produtosEmPromocao;
	}

	// Retorna a variavel result com o resultado da ultima consulta
	public function getResult(){
		return $this->result;
	}

	public function searchByName(string $name){
		$query = "SELECT * FROM {$this->table_name} WHERE nome = :product_name ";

		$stmt = $this->conn->prepare($query);
		$stmt->execute(['product_name' => $name]);

		$produtoPesquisado = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$this->result = $produtoPesquisado;
	}

}
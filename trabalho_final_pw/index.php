<?php



session_start();

$_SESSION['loggedIn'] = true;
$_SESSION['cart'];

// TESTE DO CARRINHO
$_SESSION['cart'] = array(
    'Iphone' => 13000,
    'Fone de ouvidio Wireless' => 320 
);

require __DIR__ . '/App/Models/ProductModel.php';


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depósito Bom Preço</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Depósito Bom Preço</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav">
                    <!-- Links da navbar -->
                </div>
                <form class="d-flex">
                    <div class="input-group">                    
                        <input type="text" class="form-control" placeholder="Search">
                        <button type="button" class="btn btn-secondary"><i class="bi-search"></i></button>
                    </div>
                </form> 
                <div class="navbar-nav">
                    <a href="<?php echo "routes.php?action=view-cart"?>" class="nav-item nav-link">Seu carrinho</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Menu lateral -->
    <div id="fixed_column">
        <h5>Produtos</h5>
        <p><a href="<?php echo "routes.php?action=view-promo"; ?>">Promoções</a></p>
        <p><a href="#secaoMaterialBasico" style="text-decoration: none; color: inherit;">Material Básico</a></p>
        <p><a href="#secaoHidraulica" style="text-decoration: none; color: inherit;">Hidráulica</a></p>
        <p>Elétrica</p>   
        <p>Ferramentas</p>
        <p>Ferragens</p>
        <p><a href="#secaoTintas" style="text-decoration: none; color: inherit;">Tinturaria</a></p>
        <p>Ver mais</p>
    </div>


    

    <!-- Seção de Tinturaria -->
    <div id="secaoTintas">
        <h2>Tinturaria</h2>
        <div id="mother">
            <!-- Card 1 -->
            <div id="card1">
                <div class="card" style="width: 200px;">
                    <img src="imagens/tinta1.png" class="card-img-top" alt="Tinta coral Rende Mais">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tinta coral Rende Mais</h5>
                        <p class="card-text">R$59,90</p>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalProduto" data-produto="produto1">Comprar</a>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div id="card2">
                <div class="card" style="width: 200px;">
                    <img src="imagens/tinta2.jpeg" class="card-img-top" alt="Tinta Acrílica Coralar">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tinta Acrílica Coralar</h5>
                        <p class="card-text">R$67,90</p>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalProduto" data-produto="produto2">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div id="card3">
                <div class="card" style="width: 200px;">
                    <img src="imagens/tinta4.jpeg" class="card-img-top" alt="Tinta Coral Proteção Sol e Chuva">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tinta Coral Proteção Sol e Chuva</h5>
                        <p class="card-text">R$75,99</p>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalProduto" data-produto="produto3">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div id="card4">
                <div class="card" style="width: 200px;">
                    <img src="imagens/tinta5.jpeg" class="card-img-top" alt="Tinta Coral Proteção Sol e Chuva">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tinta Coral Proteção Sol e Chuva</h5>
                        <p class="card-text">R$75,99</p>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalProduto" data-produto="produto4">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção de Material Básico -->
    <div id="secaoMaterialBasico">
        <h2>Material Básico</h2>
        <div id="mother">
            <!-- Card 5: Tijolo -->
            <div id="card5">
                <div class="card" style="width: 200px;">
                    <img src="imagens/tijolo1.png" class="card-img-top" alt="Tijolo">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tijolo</h5>
                        <p class="card-text">R$1,70</p>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalProduto" data-produto="produto5">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Card 6: Telha -->
            <div id="card6">
                <div class="card" style="width: 200px;">
                    <img src="imagens/telha.png" class="card-img-top" alt="Telha">
                    <div class="card-body text-center">
                        <h5 class="card-title">Telha</h5>
                        <p class="card-text">R$51,90</p>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalProduto" data-produto="produto6">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção de Hidráulica -->
    <div id="secaoHidraulica">
        <h2>Hidráulica</h2>
        <div id="mother">
            <!-- Card 7: Joelho 90 graus -->
            <div id="card7">
                <div class="card" style="width: 200px;">
                    <img src="imagens/joelho90.jpg" class="card-img-top" alt="Joelho 90 graus">
                    <div class="card-body text-center">
                        <h5 class="card-title">Joelho 90 graus</h5>
                        <p class="card-text">R$0,91</p>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalProduto" data-produto="produto7">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Card 8: Cano PVC -->
            <div id="card8">
                <div class="card" style="width: 200px;">
                    <img src="imagens/canopvc.jpg" class="card-img-top" alt="Cano PVC">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cano PVC</h5>
                        <p class="card-text">R$132,90</p>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalProduto" data-produto="produto8">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Card 9: Cola para PVC -->
            <div id="card9">
                <div class="card" style="width: 200px;">
                    <img src="imagens/colapvc.jpg" class="card-img-top" alt="Cola para PVC">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cola para PVC</h5>
                        <p class="card-text">R$52,00</p>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalProduto" data-produto="produto9">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <div id="footer">
        <h6>Copyright information</h6>
    </div>

    <!-- JavaScript -->
    <script>
        // Dados dos produtos
        const produtos = {
            produto1: {
                titulo: "Tinta coral Rende Mais",
                marca: "Coral",
                descricao: "Tinta de alta qualidade para pintura interna e externa.",
                preco: "R$ 59,90"
            },
            produto2: {
                titulo: "Tinta Acrílica Coralar",
                marca: "Coral",
                descricao: "Tinta acrílica para acabamentos perfeitos.",
                preco: "R$ 67,90"
            },
            produto3: {
                titulo: "Tinta Coral Proteção Sol e Chuva",
                marca: "Coral",
                descricao: "Proteção contra intempéries para áreas externas.",
                preco: "R$ 75,99"
            },
            produto4: {
                titulo: "Tinta Coral Proteção Sol e Chuva",
                marca: "Coral",
                descricao: "Proteção contra intempéries para áreas externas.",
                preco: "R$ 75,99"
            },
            produto5: {
                titulo: "Tijolo",
                marca: "Cerâmica Guarani",
                descricao: "Tijolo cerâmico para construção.",
                preco: "R$1,70"
            },
            produto6: {
                titulo: "Telha",
                marca: "Brasilit",
                descricao: "Telha de fibrocimento para coberturas.",
                preco: "R$51,90"
            },
            produto7: {
                titulo: "Joelho 90 graus",
                marca: "Tigre",
                descricao: "Joelho 90 graus soldável para conexões hidráulicas.",
                preco: "R$0,91"
            },
            produto8: {
                titulo: "Cano PVC",
                marca: "Tigre",
                descricao: "Cano PVC de 6 metros para instalações hidráulicas.",
                preco: "R$132,90"
            },
            produto9: {
                titulo: "Cola para PVC",
                marca: "Tigre",
                descricao: "Cola para união de tubos e conexões de PVC.",
                preco: "R$52,00"
            }
        };

        // Função para abrir o modal com as informações do produto
        function abrirModal(produto) {
            document.getElementById('modalTitle').innerText = produto.titulo;
            document.getElementById('modalBody').innerHTML = `
                <li>Marca: ${produto.marca}</li>
                <li>Descrição: ${produto.descricao}</li>
                <li>Preço: ${produto.preco}</li>
            `;
        }

        // Adicionar eventos aos botões de compra
        document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
            button.addEventListener('click', function() {
                const produtoId = this.getAttribute('data-produto');
                abrirModal(produtos[produtoId]);
            });
        });

        // Adicionar evento ao botão "Adicionar ao carrinho"
        document.getElementById('btnAdicionarCarrinho').addEventListener('click', function() {
            alert('Produto adicionado ao carrinho!');
            // Fechar o modal após adicionar ao carrinho
            const modal = bootstrap.Modal.getInstance(document.getElementById('modalProduto'));
            modal.hide();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
                    
                </div>
            </div>
        </div>
    </nav>
    <!-- Menu lateral -->
    <div id="fixed_column">
        <h5>Produtos</h5>
        <p><a href="<?php echo "/App/Router/routes.php?action=view-promo"; ?>">Promoções</a></p>
        <!-- Link para a seção de Material Básico -->
        <p><a href="#secaoMaterialBasico" style="text-decoration: none; color: inherit;">Material Básico</a></p>
        <p><a href ="secaoHidraulica" style= "text-decoration: none; color: inherit;" >Hidráulica</a></p>
        <p>Elétrica</p>   
        <p>Ferramentas</p>
        <p>Ferragens</p>
        <!-- Link para a seção de tintas -->
        <p><a href="#secaoTintas" style="text-decoration: none; color: inherit;">Tinturaria</a></p>
        <p>Ver mais</p>
    </div>

    <!-- Seção de tintas com ID -->
    <div id="secaoTintas">
        <h2>Tintas</h2>
        <div id="mother">
            <!-- Card 1 -->
            <div id="card1">
                <div class="card" style="width: 200px;">
                    <img src="src/images/tinta1.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tinta coral Rende Mais</h5>
                        <p class="card-text">R$:59,90</p>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalProduto" data-produto="produto1">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div id="card2">
                <div class="card" style="width: 200px;">
                    <img src="src/images/tinta2.jpeg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tinta Acrílica Coralar</h5>
                        <p class="card-text">R$:67,90</p>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalProduto" data-produto="produto2">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div id="card3">
                <div class="card" style="width: 200px;">
                    <img src="src/images/tinta4.jpeg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tinta Coral Proteção Sol e Chuva</h5>
                        <p class="card-text">R$:75,99</p>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalProduto" data-produto="produto3">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div id="card4">
                <div class="card" style="width: 200px;">
                    <img src="src/images/tinta5.jpeg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tinta Coral Proteção Sol e Chuva</h5>
                        <p class="card-text">R$:75,99</p>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalProduto" data-produto="produto4">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalProduto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Título do Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Mais informações sobre o produto:</p>
                    <ul id="modalBody">
                        <!-- As informações do produto serão inseridas aqui via JavaScript -->
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="btnAdicionarCarrinho">Adicionar ao carrinho</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Seção de Material Básico -->
    <div id="secaoMaterialBasico">
        <h2>Material Básico</h2>
        <div id="mother">
            <!-- Card 1: Tijolo -->
            <div id="card5">
                <div class="card" style="width: 200px;">
                    <img src="src/images/tijolo1.png" class="card-img-top" alt="Tijolo">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tijolo</h5>
                        <p class="card-text">R$1,70</p>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalProduto" data-produto="produto5">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Telha -->
            <div id="card6">
                <div class="card" style="width: 200px;">
                    <img src="src/images/telha.png" class="card-img-top" alt="Telha">
                    <div class="card-body text-center">
                        <h5 class="card-title">Telha</h5>
                        <p class="card-text">R$51,90</p>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalProduto" data-produto="produto6">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="modalProduto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Título do Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Mais informações sobre o produto:</p>
                <ul id="modalBody">
                    <!-- As informações do produto serão inseridas aqui via JavaScript -->
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" id="btnAdicionarCarrinho">Adicionar ao carrinho</button>
            </div>
        </div>
    </div>
</div>

    <div id="footer">
        <h6>Copyrigth information</h6>
    </div>

    <!-- JavaScript -->
    <script>
        // Dados dos produtos
        const produtos = {
            produto1: {
                titulo: "Tinta coral Rende Mais",
                marca: "Coral",
                rendimento: "10m² por litro",
                preco: "R$ 59,90"
            },
            produto2: {
                titulo: "Tinta Acrílica Coralar",
                marca: "Coral",
                rendimento: "10m² por litro",
                preco: "R$ 67,90"
            },
            produto3: {
                titulo: "Tinta Coral Proteção Sol e Chuva",
                Marca: "Coral",
                rendimento: "12m² por litro",
                preco: "R$ 75,99"
            },
            produto4: {
                titulo: "Tinta Coral Proteção Sol e Chuva",
                Marca: "Coral",
                rendimento: "12m² por litro",
                preco: "R$ 75,99"
            },
            produto5: {
                titulo: "Tijolo",
                marca: "Cerâmica Guarani",
                rendimento: "9x19x19cm",
                preco: "R$1,70"
            },
            produto6: {
                titulo: "Telha",
                marca: "Brasilit",
                rendimento: "5mm244x110cm",
                preco: "R$:51,90"
            },
            produto7:{
                titulo: "Joelho 90 graus",
                marca: "Tigre",
                rendimento: "Joelho 90 graus Soldável",
                preco: "R$:0,91"
            },
            produto8:{
                titulo: "Cano PVC",
                marca: "Tigre",
                rendimento: "Cano PVC 6M",
                preco: "R$:132,90"
            },
            produto9:{
                titulo: "Cola para PVC",
                marca: "Tigre",
                rendimento: "Cola PVC Incolor",
                preco: "R$:52,00"
            }
        };

        // Função para abrir o modal com as informações do produto
        function abrirModal(produto) {
            document.getElementById('modalTitle').innerText = produto.titulo;
            document.getElementById('modalBody').innerHTML = `
                <li>Cor: ${produto.cor}</li>
                <li>Rendimento: ${produto.rendimento}</li>
                <li>Preço: ${produto.preco}</li>
            `;
            new bootstrap.Modal(document.getElementById('modalProduto')).show();
        }

        // Adicionar eventos aos botões de compra
        document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
            button.addEventListener('click', function() {
                const produtoId = this.getAttribute('data-produto');
                abrirModal(produtos[produtoId]);
            });
        });

        // Adicionar evento ao botão "Adicionar ao carrinho"
        document.getElementById('btnAdicionarCarrinho').addEventListener('click', function() {
            alert('Produto adicionado ao carrinho!');
            // Aqui você pode adicionar outras funcionalidades, como adicionar o item ao carrinho.
        });
        // Função para abrir o modal com as informações do produto
        function abrirModal(produto) {
            document.getElementById('modalTitle').innerText = produto.titulo;
            document.getElementById('modalBody').innerHTML = `
                <li>Marca: ${produto.marca}</li>
                <li>Descrição: ${produto.descricao}</li>
                <li>Preço: ${produto.preco}</li>
            `;
            new bootstrap.Modal(document.getElementById('modalProduto')).show();
        }

        // Adicionar eventos aos botões de compra
        document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
            button.addEventListener('click', function() {
                const produtoId = this.getAttribute('data-produto');
                abrirModal(produtos[produtoId]);
            });
        });

        // Adicionar evento ao botão "Adicionar ao carrinho"
        document.getElementById('btnAdicionarCarrinho').addEventListener('click', function() {
            alert('Produto adicionado ao carrinho!');
            // Aqui você pode adicionar outras funcionalidades, como adicionar o item ao carrinho.
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
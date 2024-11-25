<?php
session_start();

include_once("config/config.php");
include_once("carrinho.php");

if ($_COOKIE['loggedin'] == "1") {
    $username = isset($_COOKIE['username']) ? $_COOKIE['username'] : "";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDigital</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/favicon/favicon.ico" type="image/x-icon">
</head>

<body class="bg-dark text-light d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <img src="../assets/logo-site.jpeg" class="rounded-circle mx-3" border="1" width="40vw" height="40vw">
            <a class="navbar-brand" href="#">UDigital</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Produtos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <div class="container flex-grow-1 my-4">
        <p class="fs-1">Olá <strong><?php echo $username ?></strong>!</p>
        <div class="row">
            <!-- Coluna de Produtos -->
            <div class="col-md-8">
                <h2 class="text-center mb-4">Produtos Disponíveis</h2>
                <div class="table-responsive">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Imagem</th>
                                <th>Preço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $path = "../assets/";
                            $directory = "product-images/";
                            $sql = "SELECT descricao, imagem, preco FROM carrinhocompras";
                            $result = mysqli_query($link, $sql);

                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                echo
                                    "<tr>
                                    <td class='text-center mx-2'>" . $row['descricao'] . "</td>
                                    <td class='text-center mx-2'><img src='" . $path . $directory . $row['imagem'] . "' style='width:100px;height:100px;border-radius:7px' ></td>
                                    <td class='text-center mx-2'>R$" . $row['preco'] . "</td>
                                    <td>
                                        <form method='POST'>
                                            <input type='hidden' name='descricao' value='" . $row['descricao'] . "'>
                                            <input type='hidden' name='imagem' value='" . $row['imagem'] . "'> 
                                            <input type='hidden' name='preco' value='" . $row['preco'] . "'> 
                                            <button type='submit' name='add_to_cart' class='btn btn-primary'>Adicionar</button>
                                        </form>
                                    </td>
                                </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Coluna do Carrinho -->
            <div class="col-md-4">
                <h2 class="text-center mb-4">Carrinho</h2>
                <div class="table-responsive">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Imagem</th>
                                <th>Preço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($_SESSION['carrinho'])) {
                                foreach ($_SESSION['carrinho'] as $index => $item) {
                                    echo "<tr>";
                                    echo "<td class='text-center'>" . $item['descricao'] . "</td>";
                                    echo "<td class='text-center'><img src='" . $path . $directory . $item['imagem'] . "' style='width:100px;height:100px;border-radius:7px'></td>";
                                    echo "<td class='text-center'>R$". $item['preco'] . "</td>";
                                    echo "<td>
                                            <form method='POST'>
                                                <input type='hidden' name='index' value='$index'>
                                                <button type='submit' name='remove_from_cart' class='btn btn-danger'>Remover</button>
                                            </form>
                                          </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='3' class='text-center'>Seu carrinho está vazio.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="bg-primary text-center py-3 mt-auto">
        <div class="container">
            <p class="mb-0">© 2024 Eletrônicos. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
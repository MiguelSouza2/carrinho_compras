<?php
session_start(); 

include_once("config/config.php"); // conectar com o banco de dados
include_once("carrinho.php"); // inclui a parte do carrinho

if ($_COOKIE['loggedin'] == "1") { // Verifica se o usuário está logado
    $username = isset($_COOKIE['username']) ? $_COOKIE['username'] : ""; 
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title> 
</head>

<body>
    <p>Olá <?php echo $username . "!"; ?></p> 

    <section>
        <h2>Produtos Disponíveis</h2>
        <table border="1"> 
            <tr>
                <td>Nome</td>
                <td>Imagem</td>
                <td>Adicionar</td>
            </tr>
            <?php
            $path = "../"; 
            $directory = "product-images/"; 
            $sql = "SELECT descricao, imagem FROM carrinhocompras"; 
            $result = mysqli_query($link, $sql); 

            // loop pra mostrar os produtos selecionados
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo
                "<tr>
                    <td>" . $row['descricao'] . "</td> <!-- descrição do produto -->
                    <td><img src='" . $path . $directory . $row['imagem'] . "' style='width:10vw;height:10vw;'></td> <!-- imagem do produto -->
                    <td>
                        <form method='POST'>
                            <input type='hidden' name='descricao' value='" . $row['descricao'] . "'> <!-- adiciona as tags name para pegar os valores pelo método post -->
                            <input type='hidden' name='imagem' value='" . $row['imagem'] . "'> 
                            <button type='submit' name='add_to_cart'>Adicionar ao carrinho</button>
                        </form>
                    </td>
                </tr>";
            }
            ?>
        </table>
    </section>

    <section>
        <h2>Carrinho</h2>
        <table border="1"> 
            <tr>
                <td>Nome</td>
                <td>Imagem</td>
                <td>Remover</td>
            </tr>
            <?php
            
            if (!empty($_SESSION['carrinho'])) {
                // loop para exibir os itens no carrinho
                foreach ($_SESSION['carrinho'] as $index => $item) {
                    echo "<tr>";
                    echo "<td>" . $item['descricao'] . "</td>"; // Exibe a descrição do item no carrinho
                    echo "<td><img src='" . $path . $directory . $item['imagem'] . "' style='width:10vw;height:10vw;'></td>"; // Exibe a imagem do item no carrinho
                    
                   
                    echo "<td>
                             <form method='POST'>
                                <input type='hidden' name='index' value='$index'> <!-- Envia o índice do item no carrinho -->
                                <button type='submit' name='remove_from_cart'>Remover</button> <!-- Botão para remover o item do carrinho -->
                            </form>
                          </td>";
                    echo "</tr>";
                }
            } else {
                
                echo "<tr><td>Seu carrinho está vazio.</td></tr>";
            }
            ?>
        </table>
    </section>
</body>

</html>

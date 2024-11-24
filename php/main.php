<?php
include_once("config/config.php");
session_start();

if ($_COOKIE['loggedin'] == "1") {
    $username = isset($_COOKIE['username']) ? $_COOKIE['username'] : "";
}


// parte do carrinho de compras

// inicializando o carrinho de compras

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
    $carrinho = $_SESSION['carrinho'];

}


// adicionando a descricao e a imagem ao carrinho
if (isset($_POST['add_to_cart'])) {
    $descricao = $_POST['descricao'];
    $imagem = $_POST['imagem'];

    // colocando os valores dentro do array do carrinho
    $carrinho[] = [
        'descricao' => $descricao,
        'imagem' => $imagem
    ];
}

// 
if (isset($_POST['remove_from_cart'])) {
    $index = $_POST['index'];

    
    if (isset($carrinho[$index])) {
        unset($carrinho[$index]);   
    }
}

?>

<!DOCTYPE html>
<html lang="en">

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

            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['descricao'] . "</td>";
                echo "<td><img src='" . $path . $directory . $row['imagem'] . "' style='width:10vw;height:10vw;'></td>";
                echo "<td>
                        <form method='POST'>
                            <input type='hidden' name='descricao' value='" . $row['descricao'] . "'>
                            <input type='hidden' name='imagem' value='" . $row['imagem'] . "'>
                            <button type='submit' name='add_to_cart'>Adicionar ao carrinho</button>
                        </form>
                      </td>";
                echo "</tr>";
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
            // carrinho
            if (!empty($carrinho)) {
                foreach ($carrinho as $index => $item) {
                    echo "<tr>";
                    echo "<td>" . $item['descricao'] . "</td>";
                    echo "<td><img src='" . $path . $directory . $item['imagem'] . "' style='width:10vw;height:10vw;'></td>";
                    
                    echo "<td>
                            
                            <form method='POST'>
                                <input type='hidden' name='index' value='$index'>
                                <button type='submit' name='remove_from_cart'>Remover</button>
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

<?php

// Parte do carrinho de compras

// Inicializando o carrinho de compras
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = []; 
}

// Adicionando a descrição,, preço e a imagem ao carrinho
if (isset($_POST['add_to_cart'])) { // gambiarra
    $descricao = $_POST['descricao'];
    $imagem = $_POST['imagem']; 
    $preco = $_POST['preco'];  

    // Colocando os valores dentro do array do carrinho (salvo na variável de sessão)
    $_SESSION['carrinho'][] = [ 
        'descricao' => $descricao,
        'imagem' => $imagem,
        'preco' => $preco
    ];
}

// Remover produto do carrinho
if (isset($_POST['remove_from_cart'])) {
    $index = $_POST['index']; // índice do produto selecionado
    
    // se existir index, não terá mais index
    if (isset($_SESSION['carrinho'][$index])) {
        unset($_SESSION['carrinho'][$index]); 

        // Reindexando o array para não termos índices não consecutivos (ex: 0, 2, 5 em vez de 0, 1, 2)
        $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
    }
}
?>

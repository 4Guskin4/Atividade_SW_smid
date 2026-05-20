<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['acao']) && $_POST['acao'] == 'inserir') {

    include 'conecta.php';
   

    $cor = $_POST['cor'];

    $tamanho = $_POST['tamanho'];



    $sql = "INSERT INTO tb_camiseta (cor, tamanho) VALUES (:cor, :tamanho)";

    $stmt = $pdo->prepare($sql);



    if ($stmt->execute([':cor' => $cor, ':tamanho' => $tamanho])) {

        echo "Sucesso";
      
    } else {

        echo "Erro";

    }

    exit;

}

?>
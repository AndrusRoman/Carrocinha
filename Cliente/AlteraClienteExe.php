<?php
    include('../Includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./cssClienteGeral.css">
</head>
<body>
    <h1> Alteração de cliente</h1>
    <?php 
        echo "<p>Id: $id</p>";
        echo "<p>Nome cliente: $nome</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Endereco: $endereco</p>";
        echo "<p>Bairro: $bairro</p>";
        echo "<p>Cep: $cep</p>";
        echo "<p>Nome cidade: $cidade</p>";
        $sql = "UPDATE Pessoa SET nome = '$nome', email = '$email', endereco = '$endereco', bairro = '$bairro', cep = '$cep', id_cidade = '$cidade' WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result)
            echo "Dados Atualizados";
        else
            echo "Erro ao atualizar dados!\n".mysqli_error($con);
    ?>
    <div>
        <a href="./ListarCliente.php">Retornar</a>
    </div>
</body>
</html>
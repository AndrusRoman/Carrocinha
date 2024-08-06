<?php
    include('../Includes/conexao.php');
    $id = $_POST['id_animal'];
    $nome = $_POST['nome_animal'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $data_nascimento = $_POST['data_nascimento'];
    $castrado = $_POST['castrado'];
    $pessoa = $_POST['pessoa'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Alteração de Animal</h1>
    <?php 
        echo "<p>Id: $id</p>";
        echo "<p>Nome Animal: $nome</p>";
        echo "<p>Especie: $especie</p>";
        echo "<p>Raça: $raca</p>";
        echo "<p>Data de nascimento: $data_nascimento</p>";
        echo "<p>Castrado: $castrado</p>";
        echo "<p>Código dono: $pessoa</p>";
        $sql = "UPDATE Animal SET nome_animal = '$nome', especie = '$especie', raca = '$raca', data_nascimento = '$data_nascimento', castrado = '$castrado', id_pessoa = '$pessoa' WHERE id_animal = $id";
        $result = mysqli_query($con, $sql);
        if($result)
            echo "Dados Atualizados";
        else
            echo "Erro ao atualizar dados!\n".mysqli_error($con);
    ?>
    <div>
        <a href="./ListarAnimal.php">Retornar</a>
    </div>
</body>
</html>
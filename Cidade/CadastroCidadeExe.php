<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./cssCidadeGeral.css">
</head>
<body>
    <?php
        include('../Includes/conexao.php');
        $nome = $_POST['nome_cidade'];
        $estado = $_POST['estado'];
        echo "<h1>Dados da Cidade</h1>";
        echo "Nome: $nome<br>";
        echo "Estado: $estado<br>";

        $sql = "INSERT INTO cidade (nome_cidade,estado)";
        $sql .= "VALUES('".$nome."','".$estado."')";
        echo $sql;
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h1>Dados cadastrados com sucesso</h2>";
        }else{
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
    ?>
    <div>
        <button><a href="CadastroCidade.php">Retornar ao Cadastro</a></button>
    </div>
</body>
</html>
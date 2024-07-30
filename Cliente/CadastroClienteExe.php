<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssCadastrophp.css">
</head>
<body>
    <?php
        include('../Includes/conexao.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        echo "<h1>Dados do Cliente</h1>";
        echo "Nome: $nome<br>";
        echo "Email: $email<br>";
        echo "Endereco: $endereco<br>";
        echo "Bairro: $bairro<br>";
        echo "Cep: $cep<br>";
        echo "Cidade: $cidade<br>";


        $sql = "INSERT INTO Pessoa (nome, email, endereco, bairro, cep, id_cidade)";
        $sql .= "VALUES('".$nome."','".$email."','".$endereco."','".$bairro."','".$cep."','".$cidade."')";
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
        <button><a href="CadastroCliente.php">Retornar ao Cadastro</a></button>
    </div>
</body>
</html>
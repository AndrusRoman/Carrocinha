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
        $nome = $_POST['nome_animal'];
        $especie = $_POST['especie'];
        $raca = $_POST['raca'];
        $data_nascimento = $_POST['data_nascimento'];
        $castrado = $_POST['castrado'];
        $pessoa = $_POST['pessoa'];

        $idade = new DateTime($data_nascimento);
        $da = new DateTime();
        $idade = $da->diff($idade);
        $idade = $idade->y;

        echo "<h1>Dados do Cliente</h1>";
        echo "Nome: $nome<br>";
        echo "Especie: $especie<br>";
        echo "Raça: $raca<br>";
        echo "Data de nascimento: $data_nascimento<br>";
        echo "Idade: $idade<br>";
        echo "Castrado: $castrado<br>";
        echo "Pessoa: $pessoa<br>";

        $sql = "INSERT INTO Animal (nome_animal, especie, raca, data_nascimento, idade, castrado, id_pessoa)";
        $sql .= "VALUES('".$nome."','".$especie."','".$raca."','".$data_nascimento."','".$idade."','".$castrado."','".$pessoa."')";
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
        <button><a href="CadastroAnimal.php">Retornar ao Cadastro</a></button>
    </div>
</body>
</html>
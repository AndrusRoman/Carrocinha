<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CssCadastro.css">
</head>
<body>
    <h1>Deletar Animal</h1>
    <?php 
        include('../Includes/conexao.php');
        $id = $_GET['id'];
        $sql = "DELETE FROM Animal WHERE id_animal = $id";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados deletados!</h2>";
        }else{
            echo "<h2>Erro ao deletar!</h2>";
            echo "<h2>".mysqli_error($con)."</h2>";
        } 
    ?>
    <div>
        <a href="./ListarAnimal.php">Retornar</a>
    </div>
</body>
</html>
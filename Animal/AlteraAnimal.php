<?php
    include('../Includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM Animal WHERE id_animal = $id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
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
    <form action="AlteraAnimalExe.php" method="post">
        <fieldset>
        <legend>Altera Animal</legend>
        <div>
            <label for="nome_animal">Nome</label>
            <input type="text" name="nome_animal" id="nome_animal" value="<?php echo $row['nome_animal'] ?>">
        </div>
        <div>
            <label for="especie">Especie</label>
            <input type="text" name="especie" id="especie" value="<?php echo $row['especie']?>">
        </div>
        <div>
            <label for="raca">Raça</label>
            <input type="text" name="raca" id="raca" value="<?php echo $row['raca']?>">
        </div>
        <div>
            <label for="data_nascimento">Data de nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $row['data_nascimento']?>">
        </div>
        <div>
            <label for="castrado">Castrado</label>
            <br>
            <input type="radio" id="castrado" name="castrado" value="1" value="<?php echo $row['1']?>">Sim
            <input type="radio" id="castrado" name="castrado" value="0" value="<?php echo $row['0']?>">Não<br>
        </div>
        <div>
            <input type="hidden" name="id_animal" value="<?php echo $row['id_animal']?>">
        </div>
        <div>
            <label for="pessoa">Pessoa</label>
            <select name="pessoa" id="pessoa">
           <?php
                include('../Includes/conexao.php');
                $sql = "SELECT * FROM Pessoa";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<option value='".$row['id']."'>".$row['nome']."</option>";
                }
            ?>
            </select>
        </div> 
        <div>
            <button type="submit">Alterar<br></button>
            <button><a href="./ListarAnimal.php">Retortar</a></button>
        </div>
        </fieldset>
    </form>
</body>
</html>
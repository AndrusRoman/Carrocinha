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
    <form action="CadastroAnimalExe.php" method="post" enctype="multipart/form-data"> <!-- Codificação para upload -->
        <fieldset>
        <legend>Cadastro Animal</legend>
        <div>
            <label for="foto">Foto</label>
           <input type="file" name="foto" id="foto" accept="image/*" /> 
        </div>
        <div>
            <label for="nome_animal">Nome</label>
            <input type="text" name="nome_animal" id="nome_animal">
        </div>
        <div>
            <label for="especie">Especie</label>
            <input type="text" name="especie" id="especie">
        </div>
        <div>
            <label for="raca">Raça</label>
            <input type="text" name="raca" id="raca">
        </div>
        <div>
            <label for="data_nascimento">Data de nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento">
        </div>
        <div>
            <label for="castrado">O animal e castrado?</label>
            <br>
            <input type="radio" id="castrado" name="castrado" value="1">Sim
            <input type="radio" id="castrado" name="castrado" value="0">Não<br>
        </div>
        <div>
            <label for="pessoa">Dono</label>
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
            <br>
            <button type="submit">Cadastrar</button>
            <button><a href="../index.php">Retornar</a></button>
        </div>
        </fieldset>
    </form>
</body>
</html>
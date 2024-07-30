<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="CadastroClienteExe.php" method="post">
        <fieldset>
        <legend>Cadastro Cliente</legend>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco">
        </div>
        <div>
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro">
        </div>
        <div>
            <label for="cep">Cep</label>
            <input type="mixed" name="cep" id="cep">
        </div>
        <br>
        <div>
            <label for="cidade">Cidade</label>
            <select name="cidade" id="cidade">
           <?php
                include('../Includes/conexao.php');
                $sql = "SELECT * FROM cidade";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<option value='".$row['id']."'>".$row['nome_cidade']."/".$row['estado']."</option>";
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
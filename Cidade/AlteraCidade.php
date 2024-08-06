<?php
    include('../Includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM Cidade WHERE id=$id";
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
    <link rel="stylesheet" href="./cssCidadeGeral.css">
</head>
<body>
    <form action="AlteraCidadeExe.php" method="post">
        <fieldset>
        <legend>Altera Cidade</legend>
        <div>
            <label for="nome_cidade">Nome</label>
            <input type="text" name="nome_cidade" id="nome_cidade" value="<?php echo $row['nome_cidade']?>">
        </div>
        <div>
            <label for="nome">Estado</label>
            <select name="estado" id="estado">
                <option value="AC" <?php echo $row['estado'] == "AC" ? "selected" : "" ?>>Acre</option>
                <option value="AL" <?php echo $row['estado'] == "AL" ? "selected" : "" ?>>Alagoas</option>
                <option value="AP" <?php echo $row['estado'] == "AP" ? "selected" : "" ?>>Amapá</option>
                <option value="AM" <?php echo $row['estado'] == "AM" ? "selected" : "" ?>>Amazonas</option>
                <option value="BA" <?php echo $row['estado'] == "BA" ? "selected" : "" ?>>Bahia</option>
                <option value="CE" <?php echo $row['estado'] == "CE" ? "selected" : "" ?>>Ceará</option>
                <option value="DF" <?php echo $row['estado'] == "DF" ? "selected" : "" ?>>Distrito Federal</option>
                <option value="ES" <?php echo $row['estado'] == "ES" ? "selected" : "" ?>>Espírito Santo</option>
                <option value="GO" <?php echo $row['estado'] == "GO" ? "selected" : "" ?>>Goiás</option>
                <option value="MA" <?php echo $row['estado'] == "MA" ? "selected" : "" ?>>Maranhão</option>
                <option value="MT" <?php echo $row['estado'] == "MT" ? "selected" : "" ?>>Mato Grosso</option>
                <option value="MS" <?php echo $row['estado'] == "MS" ? "selected" : "" ?>>Mato Grosso do Sul</option>
                <option value="MG" <?php echo $row['estado'] == "MG" ? "selected" : "" ?>>Minas Gerais</option>
                <option value="PA" <?php echo $row['estado'] == "PA" ? "selected" : "" ?>>Pará</option>
                <option value="PB" <?php echo $row['estado'] == "PB" ? "selected" : "" ?>>Paraíba</option>
                <option value="PR" <?php echo $row['estado'] == "PR" ? "selected" : "" ?>>Paraná</option>
                <option value="PE" <?php echo $row['estado'] == "PE" ? "selected" : "" ?>>Pernambuco</option>
                <option value="PI" <?php echo $row['estado'] == "PI" ? "selected" : "" ?>>Piauí</option>
                <option value="RJ" <?php echo $row['estado'] == "RJ" ? "selected" : "" ?>>Rio de Janeiro</option>
                <option value="RN" <?php echo $row['estado'] == "RN" ? "selected" : "" ?>>Rio Grande do Norte</option>
                <option value="RS" <?php echo $row['estado'] == "RS" ? "selected" : "" ?>>Rio Grande do Sul</option>
                <option value="RO" <?php echo $row['estado'] == "RO" ? "selected" : "" ?>>Rondônia</option>
                <option value="RR" <?php echo $row['estado'] == "RR" ? "selected" : "" ?>>Roraima</option>
                <option value="SC" <?php echo $row['estado'] == "SC" ? "selected" : "" ?>>Santa Catarina</option>
                <option value="SP" <?php echo $row['estado'] == "SP" ? "selected" : "" ?>>São Paulo</option>
                <option value="SE" <?php echo $row['estado'] == "SE" ? "selected" : "" ?>>Sergipe</option>
                <option value="TO" <?php echo $row['estado'] == "TO" ? "selected" : "" ?>>Tocantins</option>
            </select>
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
        </div>
        <div>
            <button type="submit">Alterar <br></button>
            <button><a href="./ListarCidade.php">Retortar</a></button>
        </div>
        
        </fieldset>
    </form>
</body>
</html>
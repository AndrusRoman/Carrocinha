<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssListar.css">
</head>
<body>
    <?php
        include('../Includes/conexao.php');
        $sql = "SELECT * FROM Cidade";
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Cidades</h1>
    <button><a href="../index.php">Retornar</a></button>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome_cidade']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td><a href='alteraCidade.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletaCidade.php?id=".$row['id']."'>Deletar</a></td>";
                echo "</td>";
            }
        ?>
    </table>
</body>
</html>
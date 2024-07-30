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
        $sql = "SELECT pes.id, pes.nome nomepessoa, pes.email, pes.endereco, pes.bairro, pes.cep, cid.nome_cidade nomecidade, cid.estado 
        FROM Pessoa pes
        LEFT JOIN Cidade cid on cid.id = pes.id_cidade";
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Cliente</h1>
    <button><a href="../index.php">Retornar</a></button>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereco</th>
            <th>Bairro</th>
            <th>Cep</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nomepessoa']."</td>";
                echo "<td>".$row['email']."</td>";        
                echo "<td>".$row['endereco']."</td>";         
                echo "<td>".$row['bairro']."</td>"; 
                echo "<td>".$row['cep']."</td>"; 
                echo "<td>".$row['nomecidade']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td><a href='alteraCliente.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletaCliente.php?id=".$row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
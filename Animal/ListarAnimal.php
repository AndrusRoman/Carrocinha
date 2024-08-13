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
        $sql = "SELECT an.id_animal, an.nome_animal nomeanimal, an.especie, an.raca, an.data_nascimento, an.idade, an.castrado, pes.nome nomepessoa, pes.id, an.foto 
        FROM Animal an 
        LEFT JOIN Pessoa pes on pes.id = an.id_pessoa";
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Animal</h1>
    <button><a href="../index.php">Retornar</a></button>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Especie</th>
            <th>Raça</th>
            <th>Data de nascimento</th>
            <th>Idade</th>
            <th>Castrado</th>
            <th>Nome dono</th>
            <th>Id Dono</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id_animal']."</td>";
                if($row['foto'] == "")
                    echo "<td></td>";
                else
                    echo "<td><img src='".$row['foto']."' width='80' height='100'/></td>";
                echo "<td>".$row['nomeanimal']."</td>";
                echo "<td>".$row['especie']."</td>";        
                echo "<td>".$row['raca']."</td>";         
                echo "<td>".$row['data_nascimento']."</td>"; 
                echo "<td>".$row['idade']."</td>"; 
                echo "<td>".$row['castrado']."</td>";
                echo "<td>".$row['nomepessoa']."</td>";
                echo "<td>".$row['id']."</td>";
                echo "<td><a href='./AlteraAnimal.php?id=".$row['id_animal']."'>Alterar</a></td>";
                echo "<td><a href='./DeletaAnimal.php?id=".$row['id_animal']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
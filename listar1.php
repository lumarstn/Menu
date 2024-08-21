<style>
    body {
        background-image: linear-gradient(white,rgb(87, 64, 189));
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        margin: 250px;        
    }
</style>
<?php
    include('conectar.php');
    $sql="select * from tbagenda";
    $resultado=mysqli_query($conexao,$sql);
    $total=mysqli_num_rows($resultado);
    echo "<center><table border='5' bgcolor='white'><tr><th colspan='4'>Listagem dos alunos do TIN3B</th></tr><tr><th>ID</th><th>NOME</th><th>TELEFONE</th><th>E-MAIL</th></tr>";
    while($reg=mysqli_fetch_array($resultado))
    {
        echo "<tr><th>".$reg['Id']."</th>";
        echo "<th>".$reg['Nome']."</th>";
        echo "<th>".$reg['Telefone']."</th>";
        echo "<th>".$reg['Email']."</th></tr>";
    }
    echo "<tr><th colspan='4'>Total de alunos: ".$total."</th></tr></table>";
    mysqli_close($conexao);
?>

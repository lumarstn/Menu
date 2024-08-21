<body>
    <form name="dados" method="POST" action="">
        <h1>Inclusão dos Registros</h1><h3>
        Id <input type="text" name="txtid" size="5" maxlength="5" style="font-size: 20px;color: red;"><br>
        Nome <input type="text" name="txtnome" size="30" maxlength="30" style="font-size: 20px;color: red;"><br>
        Telefone <input type="text" name="txttelefone" size="30" maxlength="30" style="font-size: 20px;color: red;"><br>
        Email <input type="text" name="txtemail" size="50" maxlength="50" style="font-size: 20px;color: red;"><br><br>
        <input type="submit" name="btngravar" value="Gravar" style="font-size: 20px;color: blue;">
        <input type="reset" name="btnlimpar" value="Limpar" style="font-size: 20px;color: blue;"><br>
    </form>
</body>
<?php
    include('conectar.php');
    if(!empty($_POST['txtid']))
    {
        $id = $_POST['txtid'];
        $nome = $_POST['txtnome'];
        $telefone = $_POST['txttelefone'];
        $email = $_POST['txtemail'];
        $sql="insert into tbagenda(id,nome,telefone,email)
        values('$id','$nome','$telefone','$email')";
        if (mysqli_query($conexao,$sql))
        {
            echo "<script>alert('Gravado com sucesso!');</script>";
        }
        mysqli_close($conexao);        
    }
?>
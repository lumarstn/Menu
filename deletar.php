<style>
    body {
        background-image: url('fundo.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        margin: 50px;        
    }
</style>
<body>
    <center>
    <form name="entrada" action="" method="post">            
        <font size="6" color="blue">Pesquisa de Amigos da Agenda</font><p>
        ID <input type="text" name="txtid" size="5" maxlength="5" style="font-size: 16px; color:blue;">
        <input type="submit" name="btnpesquisar" value="Pesquisar"style="font-size: 18px; color:blue;"><br>
        <input type="submit" name="btndeletar" value="Deletar"style="font-size: 18px; color:blue;"><br>
    </form>
</body>

<?php
    if(!empty($_POST['txtid']))
    {
        include("conectar.php");
        $id=$_POST['txtid'];
        $sql="select * from tbagenda where '$id' = id";
        $resultado = mysqli_query($conexao,$sql);
        if(mysqli_num_rows($resultado)==0)
        {
            echo "Aluno não cadastrado !";
        }
        while($reg=mysqli_fetch_array($resultado))
        {
            echo "<br>ID: ".$reg['id'];
            echo "<br>Nome: ".$reg['nome'];
            echo "<br>Telefone: ".$reg['telefone'];
            echo "<br>Email: ".$reg['email'];
        }
        mysqli_close($conexao);
    }
    if(isset($_POST['btndeletar']))
    {
        include("conectar.php");
        $id=$_POST['txtid'];
        $sql="delete from tbagenda where '$id' = id";
        $resultado = mysqli_query($conexao,$sql);
        echo "Deletado com sucesso !";
    }
?>

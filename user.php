<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    /*Lembre depois do "insert into" usamos `` e NÃO "" !!!!!!!*/
    $sql="insert into `crud` (name,email,phone,password) values ('$name','$email','$phone','$password')";
    $result = mysqli_query ($con,$sql);
    if($result){
        // Antigo não possibilitava ver a tabela: echo "Dados cadastrados com sucesso!!!";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
</head>
<body>
        <div class="container">
         <form method="post">
            <div>
                <label for="id">Cadastrar dados</label>
            </div>
            <div>
                <label for="name">Nome</label>
                <input type="text" placeholder="Digite seu nome"
                name="name" autocomplete="off">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" placeholder="Digite seu email"
                name="email" autocomplete="off">
            </div>
            <div>
                <label for="phone">Telefone</label>
                <input type="text" placeholder="Digite seu numero"
                name="phone" autocomplete="off">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" placeholder="Digite uma senha"
                name="password" autocomplete="off">
            </div>
            <button type="submit" class="btn-pimary" name="submit">Enviar</button>
        </div>
    </form>
</body>
</html>
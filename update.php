<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$password=$row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql="update `crud` set id=$id,name='$name', email='$email', phone='$phone',password='$password'where id=$id";
    $result = mysqli_query ($con,$sql);
    if($result){
        echo "Dados atualizados com sucesso!";
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
                <label for="id">Atualizar Dados</label>
            </div>
            <div>
                <label for="name">Nome</label>
                <input type="text" placeholder="Digite seu nome"
                name="name" autocomplete="off" value=<?php echo $name ?>>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" placeholder="Digite seu email"
                name="email" autocomplete="off" value=<?php echo $email ?>>
            </div>
            <div>
                <label for="phone">Telefone</label>
                <input type="text" placeholder="Digite seu numero"
                name="phone" autocomplete="off" value=<?php echo $phone ?>>
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" placeholder="Digite uma nova senha"
                name="password" autocomplete="off">
            </div>
            <button type="submit" class="btn-pimary" name="submit">Confirmar</button>
        </div>
    </form>
</body>
</html>
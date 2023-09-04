<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th >ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Senha</th>
                    <th>Data</th>
                    <th>Gerenciar</th>
                </tr>
            </thead>
            <tbody>

                    <?php
                    $sql = "Select * from `crud`";
                    $result = mysqli_query($con,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $phone = $row['phone'];
                            $password = $row['password'];
                            $date_time = $row ['date_time'];
                            $data_formatada = date('d/m/Y', strtotime($date_time));
                            echo '<tr> <td scope="row">' . $id . '</td>
                                    <td>' . $name . '</td>
                                    <td>' . $email . '</td>
                                    <td>' . $phone . '</td>
                                    <td>' . $password . '</td>
                                    <td>' . $data_formatada . '</td>
                                    <td>
                                    <button class="btnupdate"><a href="update.php? updateid='.$id.'">Editar</a></button>
                                    <button class="btndelete"><a href="delete.php? deleteid='.$id.'">Apagar</a></button>
                                    </td>
                                    </tr>';
                        }
                    }
                    ?>
                <tr>
                </tr>
            </tbody>
        </table>
        <button class="btnuser"> <a href="user.php">Cadastrar Usuário</a></button>
    </div>
    
</body>
</html>
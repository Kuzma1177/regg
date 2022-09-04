<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   
    <title></title>
</head>
<body>
<?php
require('connect.php');

if (isset($_POST['username']) && isset ($_POST['username'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, email, password) VALUES('username', 'email', 'password')";
    $result = mysqli_query($connection, $query);

    if($result){
        $smsg = "Регистрация завершена";
    } else{
        $fsmsg = "Ошибка регистрации";
    }
}
?>
    <div class="container">
        <form class="form-signin" method="POST">
            <h2>Registration</h2>
            <?php
            if(isset($smsg)){?><div class="alert alert-success" role="alert"><?php echo $smsg;  ?></div><?php } ?>
            <?php
            if(isset($fsmsg)){?><div class="alert alert-danger" role="alert"><?php echo $fsmsg;  ?></div><?php } ?>
            
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">RUN!</button>
            <!-- <button type="button" class="btn btn-primary">RUN</button></form> -->
    </div>

</body>
</html>
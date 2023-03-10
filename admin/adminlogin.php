<?php
include '../include/config.php';

if(isset($_SESSION['admin'])){
    redirect('index');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-5 col-md-9 col-sm-11 col-12 mx-auto" style="margin-top: calc(50vh - 200px);">
        <div class="card shadow-sm">
            <div class="card-body m-5">
                <h5 class="text-center text-muted">Golu jha | Admin panel</h5>

                <form action="adminlogin.php" method="post">
                    <div class="mb-3">
                        <label for="" class="col-form-label">Username</label>
                        <input type="text" name="username" placeholder="email or phone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="col-form-label">Password</label>
                        <input type="password" name="password" placeholder="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button name="login" class="btn btn-info w-100 text-light"><strong>Login</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(countRecord('admin', "username='$username' and password='$password'")){
        $_SESSION['admin']=$username;
        redirect('index');
    }else{
        alert('wrong username or password', 'danger');
    }
}
?>
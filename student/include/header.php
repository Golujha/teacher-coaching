
 <?php include('../include/config.php'); 
   if(!check_session($_SESSION['student'])){
       redirect('../index');
   }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golu jha || Student</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="../css/style.css"> 
</head>
<style>
    .list{
        background-color:transparent;
        transition:.3s ;
    }
    .list:hover{
        background:grey;
    }
    .content2{
        width:80%;
    }
    @media (max-width: 992px) {
        .content2{
            width:100%;
        }
    }
    <?php include('../css/style.php'); ?>
</style>
<?php
$id = $_SESSION['student'];
$user = callingRecord('students',"contact = '$id' or email = '$id'"); 
?>
<body style="">
<div class="header sticky-top" style="background-color: #3a4a52;">
    <a class="menu-toggle rounded d-lg-none text-white d-block" href="#">
                <i class="fa fa-bars fa-2x"></i>
            </a>
            <nav id="sidebar-wrapper" style="background-image: url('../images/5.svg');background-color:black; background-size:cover; background-position:bottom;">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand shadow-sm h-100">
                        <a class="js-scroll-trigger text-decoration-none" href="#page-top">
                            <div class="dp bg-danger mx-auto mt-4 rounded-circle" style="width:70px; height:70px;"><img src="../images/<?= $user['dp']; ?>" alt="" class="img-fluid rounded-circle w-100 h-100"></div>
                            <h5 class="text-center text-white mt-2"><?= $user['name']; ?></h5>
                        </a>
                    </li>
                    <li class="sidebar-nav-item ">
                        <a class="js-scroll-trigger" href="index.php">Dashboard</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a class="js-scroll-trigger" href="mycourse.php">Course</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a class="js-scroll-trigger" href="payments.php">Payment</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a class="js-scroll-trigger" href="profile.php">Profile</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a class="js-scroll-trigger" href="setting.php">Setting</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a class="js-scroll-trigger" href="logout.php"><i class="fa fa-power-off text-danger"></i> Logout</a>
                    </li>
                </ul>
            </nav>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="height:62px;">
        <div class="container">
            <a href="../index.php" class="navbar-brand">Student</a>
            
        </div>
    </nav>
   

</div>
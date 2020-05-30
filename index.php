<?php
include('config/serverconfig.php');
include("lang/$lang.lang.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('../includes/include.php')?>
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
</head>
<body>
<?php include('includes/navbar.php')?>
<div class="container">
    <h1>Welcome to UWUCRAFT</h1>
    <div class="button">
        <button class="btn btn-dark"><a href="../users/register.php">Join US</a></button>
        <button class="btn btn-dark"><a href="../users/login.php">Already Joined?</a></button>
        <button class="btn btn-dark"><a href="../users/register.php">Click Me</a></button>
    </div>
</div>
<main>
<main>
        <div class="container">
            <h1>About</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores cupiditate harum natus aut veniam
                blanditiis error, est ab optio ad animi. Sunt recusandae, architecto eveniet voluptate velit enim optio
                cupiditate.</p>
            <br>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis voluptatibus voluptatum, ex harum
                vel deserunt nemo placeat quia labore sequi deleniti earum, saepe temporibus modi sint dicta aperiam
                cupiditate eum.</p>
        </div>
    </main>
    <footer class="py-5 page-footer">
        <div class="container-fluid container-fluid-max foote">
            <div class="row">
                <div class="col-12 col-md-6 footer-child copyright">
                    UwuCraft © 2020 All Rights Reserved
                </div>
                <div class="col-12 col-md-6 footer-child footer-links">
                    <a href="" class="mr-3">Privacy Policy</a>
                    <a href="">FAQ</a>
                    <div>
                        <small>Made with <i class="fas fa-heart text-red"></i> by <a href="#"
                                target="_blank">UwuCraft</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
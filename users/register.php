<?php
include '../controller/autoload.php';
include '../controller/session.php';
$session->checkSession("index"); // do not  allow access page after session inisiated
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>Signin Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/register.css" rel="stylesheet">
</head>
<body class="text-center">
    <form action="register.php" method="POST" class="form-signin">
        <img class="mb-4" src="<?= $website['brand']?>" alt="logo" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal"><?= $translate['Register']?></h1>
        <div class="alert-danger">
            <p><?= $error[0] ?></p> <!-- array message -->
        </div>
        <label for="inputEmail" class="sr-only"><?= $translate['Username']?></label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="<?= $translate['Username']?>" required autofocus>
        <label for="inputEmail" class="sr-only"><?= $translate['Email']?></label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="<?= $translate['Email']?>" required autofocus>
        <label for="inputPassword" class="sr-only"><?= $translate['Password']?></label>
        <input type="password" name="password_1" id="inputPassword" class="form-control" placeholder="<?= $translate['Password']?>" required>
        <label for="inputPassword" class="sr-only"><?= $translate['Confirm_Password']?></label>
        <input type="password" name="password_2" id="inputPassword" class="form-control" placeholder="<?= $translate['Confirm_Password']?>" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" name="register" type="submit"><?= $translate['Register']?></button>
        <a class="btn btn-lg btn-primary btn-block" href="../users/login.php"><?= $translate['Login']?></a>
        <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
</body>
</html>


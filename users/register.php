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
    <title><?= $pageTitle['Register']?></title>
    <!-- Bootstrap core CSS -->
    <?php include('../includes/include.php')?>
    <!-- Custom styles for this template -->
    <link href="../css/register.css" rel="stylesheet">
</head>

<body class="text-center">
<?php include("../includes/navbar.php"); ?>
    <form action="register.php" method="POST" class="form-signin">
        <img class="mb-4" src="<?= $website['brand']?>" alt="logo" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal"><?= $language['Register']?></h1>
        <div class="alert-danger">
            <p><?= $error ?></p> <!-- array message -->
        </div>
        <label for="inputEmail" class="sr-only"><?= $language['Username']?></label>
        <input type="text" name="username" class="form-control" placeholder="<?= $language['Username']?>" required autofocus>
        <label for="inputEmail" class="sr-only"><?= $language['Email']?></label>
        <input type="email" name="email" class="form-control" placeholder="<?= $language['Email']?>" required autofocus>
        <label for="inputPassword" class="sr-only"><?= $language['Password']?></label>
        <input type="password" name="password_1" class="form-control" placeholder="<?= $language['Password']?>" required>
        <label for="inputPassword" class="sr-only"><?= $language['Confirm_Password']?></label>
        <input type="password" name="password_2" class="form-control" placeholder="<?= $language['Confirm_Password']?>" required>
        <br>
        <button class="btn btn-lg btn-pri-mary btn-block" name="register" type="submit"><?= $language['Register']?></button>
        <a class="btn btn-lg btn-primary btn-block" href="../users/login.php"><?= $language['Login']?></a>
        <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
</body>
</html>


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
    <title><?= $pageTitle['Login']?></title>
    <!-- Bootstrap core CSS -->
    <?php include('../includes/include.php')?>
    <!-- Custom styles for this template -->
    <link href="../css/login.css" rel="stylesheet">
</head>

<body class="text-center">
<?php include("../includes/navbar.php"); ?>
    <form action="login.php" method="post" class="form-signin">
        <img class="mb-4" src="<?= $website['brand']?>" alt="Logo" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal"><?= $language['Login']?></h1>
        <div class="alert-danger">
            <p><?= $error ?></p> <!-- array message -->
        </div>
        <label for="inputEmail" class="sr-only"><?= $language['Username']?></label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="<?= $language['Username']?>" required autofocus>
        <label for="inputPassword" class="sr-only"><?= $language['Password']?></label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="<?= $language['Password']?>" required>
        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" value="remember-me"> <?= $language['Remember_me']?>
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="login" type="submit"><?= $language['Login']?></button>
        <a class="btn btn-lg btn-primary btn-block" href="../users/register.php"><?= $language['Register']?></a>
        <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
</body>
</html>


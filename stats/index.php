<?php
include '../controller/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .container{
            margin-top: 6rem;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../includes/include.php')?>
    <title><?= $pageTitle['Stats']?></title>
</head>
<body>
    <?php include('../includes/navbar.php')?>
    <div class="container">
    <a href="listplayer.php">Player List</a>
    <a href="leaderboard.php">Leaderboard</a>
    </div>
</body>
</html>
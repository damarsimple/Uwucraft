<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "UWUCRAFT"?></title>
    <!-- add include to this file for html file like css or js -->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/search.js"></script>
    <link href="../css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body style="margin-top: 6rem;">
<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="../">
        <img src="<?= "../favicon.ico" ?>" width="30" height="30" class="d-inline-block align-top" alt=""><?= "A" ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  href="../users/index"><?= lang('App.Home')?><span class="sr-only">(current)</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../users/index"><?= lang("App.Home")?></a>
                <a class="dropdown-item" href="../users/update"><?= lang('App.Update')?></a>
                <a class="dropdown-item" href="../games/log"><?= lang('App.Log')?></a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  href="../shop/index"><?= lang('App.Shop')?> <span class="sr-only">(current)</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../shop/index"><?= lang('App.Market')?></a>
                <a class="dropdown-item" href="../shop/search"><?= lang('App.Search')?></a>
                <a class="dropdown-item" href="../shop/checkout"><?= lang('App.Checkout')?></a>
                <a class="dropdown-item" href="../shop/payment"><?= lang('App.Payment')?></a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="../games/Index"><?= lang('App.Games')?> <span class="sr-only">(current)</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../games/betting"><?= lang('App.Betting')?></a>
                <a class="dropdown-item" href="../games/quiz"><?= lang('App.Quiz')?></a>
                <a class="dropdown-item" href="../games/poker"><?= lang('App.Poker')?></a>
                <a class="dropdown-item" href="../games/chess"><?= lang('App.Chess')?></a>
                <a class="dropdown-item" href="../games/jankenpon"><?= lang('App.Jan_Ken_Pon')?></a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="../server/index"><?= lang('App.Server')?> <span class="sr-only">(current)</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../server/player"><?= lang('App.Player_Lookup')?></a>
                <a class="dropdown-item" href="../server/mvp"><?= lang('App.MVP_Player')?></a>
                <a class="dropdown-item" href="../server/dynmap"><?= lang('App.Dynmap')?></a>
                <a class="dropdown-item" href="../server/leaderboard"><?= lang('App.Leaderboard')?></a>
                <a class="dropdown-item" href="../server/banned"><?= lang('App.Banned_Player')?></a>
                <a class="dropdown-item" href="../server/status"><?= lang('App.Status')?></a>
                </div>
            </li>
            </div>
            <ul class="navbar-nav mr-auto">
            <?php if(isset($_SESSION['username'])) : ?>
            <li class="nav-item active">
                <a class="nav-link" href="../users/logout"><?= lang('App.Logout')?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
            </li>
            <a class="nav-link" href="index"><img src="<?= "A"//$skins('HEAD').$_SESSION('username')?>" width="30" height="30" alt=""> <?= "a"//$_SESSION['username'] ?><span class="sr-only">(current)</span></a>
            <?php if(isset($_SESSION['cartcount'])) : ?>
            <li class="nav-item active">
            <a class="nav-link" href="../shop/checkout">
            <button type="button" class="btn btn-dark">
            <?= lang('App.Shopping_Cart')?><span class="badge badge-dark"><?= ":"//$_SESSION('cartcount')?></span>
            </button>
            </a>
            </li>
            <?php endif ?>
            <?php if(isset($_SESSION['data']['isLogged']) && $_SESSION['data']['isLogged'] == 1) : ?>
            <li class="nav-item active">
            <a class="nav-link badge-success" href="#"><?= lang('App.Online')?><span class="sr-only">(current)</span></a>
            </li>
            <?php else :?>
            <li class="nav-item active mr-2">
            <a class="nav-link badge-danger" href="#"><?= lang('App.Offline')?><span class="sr-only">(current)</span></a>
            </li>
            <?php endif ?>
            <?php else :?>
            <li class="nav-item active mr-2">
            <a class="nav-link" href="../users/login"><?= lang('App.Login')?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active mr-2">
            <a class="nav-link" href="../users/register"><?= lang('App.Register')?><span class="sr-only">(current)</span></a>
            </li>
            <?php endif ?>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
            <input id="search" class="form-control mr-sm-2" type="text" placeholder="<?= lang('App.Search')?>" aria-label="Search">
            <style>
            </style>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?= lang('App.Search')?></button>
            </form>
            </ul>
            </nav>
<script src="../js/js.js"></script>

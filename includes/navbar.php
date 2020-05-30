<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="#">
        <img src="<?= $website['brand']?>" width="30" height="30" class="d-inline-block align-top" alt=""> UWUCRAFT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../users/index.php"><?= $language['Home']?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../shop/index.php"><?= $language['Shop']?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../games/Index.php"><?= $language['Games']?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../stats/index.php"><?= $language['Stats']?> <span class="sr-only">(current)</span></a>
            </li>
            <?php if(isset($_SESSION['username'])) : ?>
            <li class="nav-item active">
                <a class="nav-link" href="../users/index.php?logout=1"><?= $language['Logout']?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
            </li>
            <a class="nav-link" href="index.php"><img src="<?= $skins['HEAD'].$_SESSION['username']?>" width="30" height="30" alt="userphoto"> <?= $_SESSION['username'] ?><span class="sr-only">(current)</span></a>
            <?php if(isset($_SESSION['cartcount'])) : ?>
            <li class="nav-item active">
            <a class="nav-link" href="../shop/checkout.php">
            <button type="button" class="btn btn-dark">
            <?= $language['Shopping_Cart']?><span class="badge badge-dark"><?= $_SESSION['cartcount']?></span>
            </button>
            </a>
            </li>
            <?php endif ?>
            <?php if(isset($_SESSION['data']['isLogged']) && $_SESSION['data']['isLogged'] == 1) : ?>
            <li class="nav-item active">
            <a class="nav-link badge-success" href="#"><?= $language['Online']?><span class="sr-only">(current)</span></a>
            </li>
            <?php else :?>
            <li class="nav-item active">
            <a class="nav-link badge-danger" href="#"><?= $language['Offline']?><span class="sr-only">(current)</span></a>
            </li>
            <?php endif ?>
            <?php else :?>
            <li class="nav-item active">
            <a class="nav-link" href="../users/login.php"><?= $language['Login']?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="../users/register.php"><?= $language['Register']?><span class="sr-only">(current)</span></a>
            </li>
            <?php endif ?>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="<?= $language['Search']?>" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?= $language['Search']?></button>
            </form>
        </div>
    </nav>

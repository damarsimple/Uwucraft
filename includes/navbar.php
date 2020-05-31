<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
        <img src="<?= $website['brand']?>" width="30" height="30" class="d-inline-block align-top" alt=""> UWUCRAFT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php"><?= $translate['Home']?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../shop/index.php"><?= $translate['Shop']?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../games/Index.php"><?= $translate['Games']?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../stats/index.php"><?= $translate['Server']?> <span class="sr-only">(current)</span></a>
            </li>
            <?php if($_SESSION['username']) : ?>
            <li class="nav-item active">
                <a class="nav-link" href="../users/index.php?logout=1"><?= $translate['Logout']?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="index.php"><img src="<?= $skins['HEAD'].$_SESSION['username']?>" width="30" height="30" alt="userphoto"> <?= $_SESSION['username'] ?><span class="sr-only">(current)</span></a>
            </li>
            <?php endif ?>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?= $translate['Search']?></button>
            </form>
        </div>
    </nav>
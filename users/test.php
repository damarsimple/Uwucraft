<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand logo-site" href="index.php">
        <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Uwucraft
    </a>
    <form class="navbar-brand" method="GET" action="search.php">
        <input type="text" name="search" id="search" placeholder="Search">
        <button class="navbar-brand search" name="search" type="submit">Search</button>
    </form>
    <a class="navbar-brand" href="index.php"><img src='http://framework.uwucraft.lan/users/skin/resources/server/skinRender.php?vr=0&hr=0&headOnly=true&ratio=4&user=<?= $_SESSION['username']?>' width="30" height="30" class="d-inline-block align-top" alt=""> <?= $_SESSION['username']?></a>
    <a class="navbar-brand" href="index.php">Home</a>
    <a class="navbar-brand" href="../shop/">Shop</a>
    <a class="navbar-brand" href="../stats/leaderboard.php">Leaderboard</a>
    <a class="navbar-brand" href="../stats/listplayer.php">List Player</a>
    <a class="navbar-brand" href="index.php?logout='1'">Logout</a>
</nav> -->

<!--
    https://grid.layoutit.com/?id=mRETZQd /playerdata grid
-->
<!-- https://grid.layoutit.com/?id=HI4IcLT / leaderboard grid-->
<?php include '../controller/autoload.php';
include '../controller/query.php';
include '../controller/session.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet">
    <?php include('../includes/include.php')?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col">
    <div class="news">
                        <div class="dashbutton">
                        <a class="dashnav" href=""><?= $language['Home']?></a><a class="dashnav" href=""><?= $language['Update']?></a><a  class="dashnav" href=""><?= $language['Log']?></a>
                        </div>
                    <div class="news-content">
                        <h1><?= $language['Announcement']?></h1>
                            <?php foreach($news as $row) : ?>
                            <div class='news-box'>
                            <h2 class="title"><?= $row['title'] ?></h2>
                            <p class="author"><?= $language['By']?> : <?= $row['author'] ?> <?= gmdate("d/m/Y",$row['date']);?> <?= $language['At']?> <?= gmdate("H:i",$row['date']);?></p>
                            <p class="isi"><?= $row['value'] ?></p>
                            <?= "</div>"?>
                            <?php endforeach ?>
                    </div>
                </div>
            </div>
    </div>
    <div class="col">2</div>
    <div class="w-100"></div>
    <div class="col"><div class="grid-playerdata">
                    <div class="profile">
                        <div class="username">
                            <h1> <?= $_SESSION['username']?></h1>
                        </div>
                        <div class="photo-profile">
                        <img src="<?= $skins['HEAD'].$_SESSION['username']?>" width="65" height="65" alt="userphoto">
                        </div>
                        <div class="hunger-health">
                            <?php for($i=0; $i < $sessionData['health'] / 2; $i++) :?>
                            <img src="../img/textures/gui/health.png" alt="health">
                            <?php endfor ?>
                            <br>
                            <?php for($i=0; $i < $sessionData['hunger'] / 2; $i++) :?>
                            <img src="../img/textures/gui/hunger.png" alt="health">
                            <?php endfor ?>
                        </div>
                    </div>
                    <div class="kill-rank">
                        <div class="kill">
                        <p><?= $language['Kills']?> : <?= $sessionData['Kills']?></p>
                        </div>
                        <div class="rank">
                        <p><?= $language['Rank']?> : <?= $sessionData['rank']?></p>
                        </div>
                    </div>
                    <div class="dead-rank-money">
                        <div class="dead">
                        <p><?= $language['Deaths']?> : <?= $sessionData['Deaths']?></p>
                        </div>
                        <div class="rank-money">
                        <p><?= $language['Rank_Money']?> : <?= $sessionData['rank_money']?></p>
                        </div>
                    </div>
                    <div class="games-money">
                        <div class="games">
                        <p><?= $language['Games']?> : <?= $sessionData['Games']?></p>
                        </div>
                        <div class="money">
                        <p><?= $language['Money']?> : <?= $language['Currency_Symbol']?> <?= number_format($sessionData['money']/1) ?></p>
                        </div>
                    </div>
                    <div class="level-bar">
                        <div class="level">
                        <p><?= $language['Level']?> : <?= $sessionData['health']?></p>
                        <div class="progress">
                            <div aria-valuenow="60" style="width: 1%;" aria-valuemin="0"aria-valuemax="100" role="progressbar" class="progress-bar">
                            </div>
                        </div>
                        <div class="bar">
                        </div><p><?= intval($sessionData['experience']/1*100) ?>%</p>
                        </div>
                    </div>
                    </div></div>
    <div class="col">4</div>
</div>
</div>
</body>
</html>
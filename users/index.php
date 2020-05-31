<?php
include '../controller/autoload.php';
include '../controller/query.php';
include '../controller/session.php';
//for login users only
if($_SESSION['username'] == null){
    header("location: ../users/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap core CSS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"</script> -->
    <script src="../js/bootstrap.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php include("../includes/navbar.php"); ?>
        <div class="grid-container">
        <!-- This is Homepage news section -->
            <div class="dashboard">
                <div class="news">
                        <div class="dashbutton">
                        <a class="dashnav" href=""><?= $translate['Home']?></a><a class="dashnav" href=""><?= $translate['Update']?></a><a  class="dashnav" href=""><?= $translate['Log']?></a>
                        </div>
                    <div class="news-content">
                        <h1><?= $translate['Announcement']?></h1>
                            <?php foreach($news as $row) : ?>
                            <div class='news-box'>
                            <h2 class="title"><?= $row['title'] ?></h2>
                            <p class="author"><?= $translate['By']?> : <?= $row['author'] ?> <?= gmdate("d/m/Y",$row['date']);?> <?= $translate['At']?> <?= gmdate("H:i",$row['date']);?></p>
                            <p class="isi"><?= $row['value'] ?></p>
                            <?= "</div>"?>
                            <?php endforeach ?>
                    </div>
                </div>
            </div>
            <!-- this is the end of news section-->
            <div class="card-data">
                <div class="playerdata">
                <div class="grid-playerdata">
                    <div class="profile">
                        <div class="username">
                            <h1> <?= $_SESSION['username']?></h1>
                        </div>
                        <div class="photo-profile">
                        <img src="<?= $skins['HEAD'].$_SESSION['username']?>" width="65" height="65" alt="userphoto">
                        </div>
                        <div class="hunger-health">
                            <?php $x = 0; while($x < $sessionData['health'] / 2) : $x++ ?>
                            <img src="../img/textures/gui/health.png" alt="health">
                            <?php endwhile ?>
                            <br>
                            <?php $x = 0; while($x < $sessionData['hunger'] / 2) : $x++ ?>
                            <img src="../img/textures/gui/hunger.png" alt="health">
                            <?php endwhile ?>
                        </div>
                    </div>
                    <div class="kill-rank">
                        <div class="kill">
                        <p><?= $translate['Kills']?> : <?= $sessionData['Kills']?></p>
                        </div>
                        <div class="rank">
                        <p><?= $translate['Rank']?> : <?= $sessionData['rank']?></p>
                        </div>
                    </div>
                    <div class="dead-rank-money">
                        <div class="dead">
                        <p><?= $translate['Deaths']?> : <?= $sessionData['Deaths']?></p>
                        </div>
                        <div class="rank-money">
                        <p><?= $translate['Rank_Money']?> : <?= $sessionData['rank_money']?></p>
                        </div>
                    </div>
                    <div class="games-money">
                        <div class="games">
                        <p><?= $translate['Games']?> : <?= $sessionData['Games']?></p>
                        </div>
                        <div class="money">
                        <p><?= $translate['Money']?> : <?= $sessionData['money']/1?></p>
                        </div>
                    </div>
                    <div class="level-bar">
                        <div class="level">
                        <p><?= $translate['Level']?> : <?= $sessionData['health']?></p>
                        </div>
                        <div class="bar">
                        <p><?= intval($sessionData['experience']/1*100) ?>%</p>
                        </div>
                    </div>
                    </div>
                <div class="queryserver">
                <div class="grid-query">
                    <div class="gamemode-playerlist">
                        <div class="gamemode">
                        <p><?= $translate['Gamemode']?> : <?= $gametype?></p>
                        </div>
                        <div class="playerlist">
                        <p><?= $translate['Player']?> : <?= $players?>/<?= $maxplayers ?> </p>
                        </div>
                    </div>
                    <div class="version-checkonline">
                        <div class="version">
                        <p><?= $translate['Version']?> : <?= $version ?></p>
                        </div>
                        <div class="checkonline">
                        <p><?= $translate['Online']?></p>
                        </div>
                    </div>
                    <div class="motd">
                        <p><?= $translate['MOTD'] ?></p>
                    </div>
                    <div class="servername-ip">
                        <div class="ip">
                        <p><?= $translate['IP']?> : <?= $server_ip ?>:<?= $port ?></p>
                        </div>
                        <div class="servername">
                        <p><?= $servername ?></p>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
</body>
</html>
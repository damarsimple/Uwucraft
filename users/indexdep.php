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

    <?php include('../includes/include.php')?>
    <link href="index.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle['Home']?></title>
</head>
<body>
    <?php include("../includes/navbar.php"); ?>
        <div class="grid-container">
        <!-- This is Homepage news section -->
            <div class="dashboard">
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
                        <p><?= $language['Level']?> : <?= $sessionData['level']?></p>
                        </div>
                        <div class="bar">
                            <div class="progress">
                                <?= "<div aria-valuenow='60' style='width: ".intval($sessionData['experience']/1*100)."%;' aria-valuemin='0'aria-valuemax='100' role='progressbar' class='progress-bar'>" ?>
                                </div>
                        </div><p><?= intval($sessionData['experience']/1*100) ?>%</p>
                        </div>
                    </div>
                    </div>
                <div class="queryserver">
                <div class="grid-query">
                    <div class="gamemode-playerlist">
                        <div class="gamemode">
                        <p><?= $language['Gamemode']?> : <?= $queryData['gametype']?></p>
                        </div>
                        <div class="playerlist">
                        <p><?= $language['Player']?> : <?= $queryData['players']?>/<?= $queryData['maxplayers'] ?> </p>
                        </div>
                    </div>
                    <div class="version-checkonline">
                        <div class="version">
                        <p><?= $language['Version']?> : <?= $queryData['version'] ?></p>
                        </div>
                        <div class="checkonline">
                        <p><?= $check?></p>
                        </div>
                    </div>
                    <div class="motd">
                        <p><?= $language['MOTD'] ?></p>
                    </div>
                    <div class="servername-ip">
                        <div class="ip">
                        <?php if ($queryData['online']) :?>
                        <p><?= $language['IP']?> : <?= $minecraftServer['ip'] ?>:<?= $minecraftServer['port'] ?></p>
                        <?php else :?>
                        <p><?= $language['IP']?> : <?= $language['Offline']?></p>
                        <?php  endif?>
                        </div>
                        <div class="servername">
                        <p><?= $queryData['servername'] ?></p>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
<?php include("../includes/footer.php")?>

</body>
</html>

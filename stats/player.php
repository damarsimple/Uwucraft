<?php
include '../controller/autoload.php';
include '../controller/stats.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="grid-server.css">
    <title>Document</title>
</head>
<body>
<?php include("../includes/navbar.php"); ?>
<div class="grid-playerdata">
    <div class="info">
        <div class="userdata">
        <p>Rank : <?= $stats['rank']?></p>
        <p>Rank Money : <?= $stats['rank_money']?></p>
        <p>Money : $<?= $stats['money']?></p>
        <p>Level : <?= $stats['level']?></p>
        <p>Experience : <?= intval($stats['experience']/1*100)?>%</p>
        <p>Health :
            <?php $x = 0; while($x < $stats['health'] / 2) : $x++ ?>
            <img src="../img/textures/gui/health.png" alt="health">
            <?php endwhile ?>
        </p>
        <p>Hunger :
            <?php $x = 0; while($x < $stats['hunger'] / 2) : $x++ ?>
            <img src="../img/textures/gui/hunger.png" alt="hunger">
            <?php endwhile ?>
        </p>
        <p>Saturation : <?= $stats['saturation']?></p>
        <p>Exhaustion : <?= intval($stats['exhaustion']/1*100)?>%</p>
        <p>Currently Playing : <?= $db->returnCheckOfflineOnlineStrings($stats['isLogged'])?></p>
        <p>Coordinate : <a href="../shop/index.php?addtocart=item&playercoordinate=<?= $pname?>">PURCHASE THIS INFO</a></p>
        <p>UUID : <a href="../shop/index.php?addtocart=item&UUID=<?= $pname?>">PURCHASE THIS INFO</a></p>
        </div>
        <div class="userstats">
        <p>Kills : <?= $stats['Kills']?></p>
        <p>Deaths : <?= $stats['Deaths']?></p>
        <p>Games : <?= $stats['Games']?></p>
        <p>Wins : <?= $stats['Wins']?></p>
        <p>Placed Blocks : <?= $stats['Placedblocks']?></p>
        <p>Broken Blocks : <?= $stats['Brokenblocks']?></p>
        <p>Open Chest : <?= $stats['Openchests']?></p>
        <p>Skillpoints : <?= $stats['Skillpoints']?></p>
        </div>
    </div>
<div class="photo-username">
<img src="<?= $skins['HEAD'].$pname ?>" width="65" height="65" alt="userphoto"><span class="sr-only">(current)</span> <?= $pname ?>
</div>
</div>
</body>
</html>

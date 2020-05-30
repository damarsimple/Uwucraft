<?php
include '../controller/autoload.php';
include '../controller/query.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../includes/include.php')?>
    <link rel="stylesheet" href="grid-server.css">
    <title><?= $pageTitle['PlayerList']?></title>
</head>
<body>
<?php include("../includes/navbar.php"); ?>
<div class="grid-container">
    <div class="table">
        <h2 class="text-center"> <?= $language['Players_on_Server']?> </h2>
        <h2 class="text-center"> <?= $queryData['players'] ?> / <?= $queryData['maxplayers'] ?></h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th><?= $language['No']?></th>
                    <th><?= $language['Head']?></th>
                    <th><?= $language['Nickname']?></th>
                </tr>
            </thead>
            <tbody>
            <?php if($queryData['online'] == True && $queryData['players'] != 0) : ?>
            <?php foreach($queryData['array_current_players'] as $username) : ?>
                <?= "<tr>" ?>
                <td><?= $i++ ?></td>
                <td><img src="<?= $skins['HEAD'].$username?>" alt=""></td>
                <td><a href="player.php?username=<?= $username ?>"><?= $username ?></a></td>
                <?= "</tr>" ?>
            <?php endforeach ?>
            <?php elseif($queryData['online'] == True && $queryData['players'] == 0) : ?>
                <td>0</td>
                <td><img src="<?= $skins['HEAD'].$username?>" alt=""></td>
                <td><?= $language['Server_Empty']?></td>
            <?php else : ?>
                <td>0</td>
                <td><img src="<?= $skins['HEAD'].""?>" alt=""></td>
                <td><?= $language['Server_Currently_Offline']?></td>
            <?php endif ?>
            </tbody>
        </table>
    </div>
</div>
<?php include('../includes/footer.php')?>
</body>
</html>

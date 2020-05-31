<?php
include '../controller/autoload.php';
include '../controller/query.php';
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
<div class="grid-container">
    <div class="table">
        <h2 class="text-center"> <?= $translate['Players_on_Server']?> </h2>
        <h2 class="text-center"> <?= $players ?> / <?= $maxplayers ?></h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th><?= $translate['No']?></th>
                    <th><?= $translate['Head']?></th>
                    <th><?= $translate['Nickname']?></th>
                </tr>
            </thead>
            <tbody>
            <?php if($status===True && $currentplayers = True) : ?>
            <?php foreach($array_current_players as $username) : ?>
                <?= "<tr>" ?>
                <td><?= $i++ ?></td>
                <td><img src="<?= $skins['HEAD'].$username?>" alt=""></td>
                <td><a href="player.php?username=<?= $username ?>"><?= $username ?></a></td>
                <?= "</tr>" ?>
            <?php endforeach ?>
            <?php elseif($currentplayers === False) : ?>
                <td>0</td>
                <td><img src="<?= $skins['HEAD'].$username?>" alt=""></td>
                <td><?= $translate['Server_Empty']?></td>
            <?php else : ?>
                <td>0</td>
                <td><img src="<?= $skins['HEAD'].$username?>" alt=""></td>
                <td><?= $translate['Server_Currently_Offline']?></td>
            <?php endif ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

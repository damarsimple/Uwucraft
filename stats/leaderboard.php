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
<div class="grid-container">
    <div class="table">
    <h2 class="text-center"> <?= $translate['Top']?> <?= $limit?> <?= $translate['Players']?> </h2>
            <h2 class="text-center"> <?= $translate['Top_Players_by']?> <?= $order ?></h2>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th><?= $translate['Rank']?></th>
                            <th><?= $translate['Head']?></th>
                            <th><?= $translate['Nickname']?></th>
                            <th><a href="leaderboard.php?order=Kills"><?= $translate['Kills']?></a></th>
                            <th><a href="leaderboard.php?order=Deaths"><?= $translate['Deaths']?></a></th>
                            <th><a href="leaderboard.php?order=Wins"><?= $translate['Wins']?></a></th>
                            <th><a href="leaderboard.php?order=money&tables=eco_accounts"><?= $translate['Money']?></a></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($statsleaderboard as $row) : ?>
                            <?= "<tr>" ?>
                            <td><?= $i++ ?></td>
                            <?php $user = $row['Name']; ?>
                            <td><img src="<?= $skins['HEAD']. $row['Name']?>" alt=""></td>
                            <!--  $imgApi-->
                            <td><a target="_blank" href="player.php?username=<?= $row['Name'] ?>"><?= $row['Name'] ?></a></td>
                            <td><?= $row['Kills'] ?></td>
                            <td><?= $row['Deaths'] ?></td>
                            <td><?= $row['Wins'] ?></td>
                            <td><?= $row['money']/1 ?></td>
                            <?= "</tr>" ?>
                    <?php endforeach ?>
                    </tbody>
                </table>
    </div>
</div>


</body>
</html>

<?php
include '../controller/autoload.php';
include '../controller/stats.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../includes/include.php')?>
    <link rel="stylesheet" href="grid-server.css">
    <title><?= $pageTitle['Leaderboard']?></title>
</head>
<body>
<?php include("../includes/navbar.php"); ?>
<div class="container-fluid">
<div class="table-responsive">
    <div class="grid-container">
        <div class="table table-hover table-responsive">
        <h2 class="text-center"> <?= $language['Top']?> <?= $limit?> <?= $language['Players']?> </h2>
                <h2 class="text-center"> <?= $language['Top_Players_by']?> <?= $order ?></h2>
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th><?= $language['Rank']?></th>
                                <th><?= $language['Head']?></th>
                                <th><?= $language['Nickname']?></th>
                                <th><a href="?order=Kills"><?= $language['Kills']?></a></th>
                                <th><a href="?order=Deaths"><?= $language['Deaths']?></a></th>
                                <th><a href="?order=Wins"><?= $language['Wins']?></a></th>
                                <th><a href="?order=money&tables=eco_accounts"><?= $language['Money']?></a></th>
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
                                <td><?= $language['Currency_Symbol']?> <?= number_format($row['money']/1) ?></td>
                                <?= "</tr>" ?>
                        <?php endforeach ?>
                        </tbody>
                    </table>
        </div>
    </div>
</div>
</div>
<?php include('../includes/footer.php')?>
</body>
</html>

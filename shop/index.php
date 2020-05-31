<?php
include '../controller/autoload.php';
include '../controller/shop.php';

// It takes 2 seconds to load this page need explanation posibly Database query?
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('../includes/include.php')?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shop-grid.css">
    <title><?= $pageTitle['Shop']?></title>
</head>
<body>
<?php include('../includes/navbar.php')?>
<div class="grid-container">
    <div class="item">
    <div class="grid-item">
        <div class="paging">
        PAGING
        </div>
        <div class="navbar-item">
            <h1><?= $language['List'] ?><br></h1>
        </div>
        <div class="content-item">
            <?php foreach($itemIndex as $val) : ?>
            <div class="grid-item-box">
                <div class="item-icon">
                    <img src="<?= itemicon($val['name']) ?>" height="65"  alt="">
                    </div>
                    <div class="item-description">
                    <h1 ><?= $val['name'] ?><br>
                    <?= $language['Currency_Symbol']?><?= number_format($val['price']) ?></h1><br>
                    Seller : <?= $val['seller'] ?><br>
                    <?= $val['description'] ?><br>
                    </div>
                    <div class="item-action">
                    <form method="POST" action="index.php">
                    <input type="hidden" name="item" value="<?= $val['name'] ?>">
                    <input type="number" placeholder="<?= $language['Amounts'] ?>" name="amount" id="">
                    <br>
                    <button name="cart" type="submit" class="btn"><?= $language['Add_to_Cart']?></button>
                </form>
                </div>
            </div>
            <?php endforeach ?>
        </div>
</div>
    </div>
    <div class="type">
        <div class="grid-categories">
            <div class="categories">
                <h1><?= $language['Categories']?></h1>
            </div>
            <div class="categories-value">
                <p>MISC</p>
            </div>
        </div>
        <div class="grid-purchased">
            <div class="purchased">
            <h1><?= $language['Most_Purchased']?></h1>
            </div>
            <div class="purchased-value">
            <?php foreach($itemCounter as $val):?>
                <p> <img src="<?= itemicon($val['name']) ?>" height="25"  alt="">
                <a href="?sortbyItem=<?= $val['name']?>"><?= $val['name']?></a> <?= $val['counter']?></p>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
<?php include("../includes/footer.php")?>
</body>
</html>
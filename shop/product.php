<?php
include '../controller/autoload.php';
include '../controller/shop.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('../includes/include.php')?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shop-grid.css">
    <title><?= $pageTitle['Product']?></title>
</head>
<body>
<?php include('../includes/navbar.php')?>
<div class="container-fluid">
    <main class="mt-5 pt-4">
        <div class="container dark-grey-text mt-5">
        <div class="row wow fadeIn">
            <div class="col-md-6 mb-4">
                <img src="<?= itemicon($product['name'])?>" width="360" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 mb-4">
            <div class="p-4">
                <div class="mb-3">
                <a href="index.php?item=<?=$product['name']?>">
                    <span class="badge purple mr-1"><?= $product['type']?></span>
                </a>
                </div>
                <p class="lead">
                <p class="lead font-weight-bold"><?= $product['name']?></p>
                <!-- <span class="mr-1">
                    <del>$200</del>
                </span> discount -->
                <span><?= $language['Currency_Symbol']?> <?= $product['price']?></span>
                </p>
                <p><?= $product['description']?></p>
                <form class="d-flex justify-content-left">
                <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
                <button class="btn btn-primary btn-md my-0 p" type="submit"><?= $language['Add_to_Cart']?>
                    <i class="fas fa-shopping-cart ml-1"></i>
                </button>
                </form>
            </div>
            </div>
        </div>
        <hr>
        <div class="row d-flex justify-content-center wow fadeIn">
            <div class="col-md-6 text-center">
            <h4 class="my-4 h4">Additional information</h4>
            <p>DESCRIPTION RECOMENDATION.</p>
            </div>
        </div>
        <div class="row wow fadeIn">
            <div class="col-lg-4 col-md-12 mb-4">
            <img src="<?= itemicon("iron ingot")?>" width="360" class="img-fluid" alt="">
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
            <img src="<?= itemicon("paper")?>" width="360" class="img-fluid" alt="">
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
            <img src="<?= itemicon("diamond sword")?>" width="360" class="img-fluid" alt="">
            </div>
        </div>
        </div>
    </main>
</div>
<?php include("../includes/footer.php")?>
</body>
</html>
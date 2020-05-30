<?php
include '../controller/autoload.php';
include '../controller/shop.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    </style>
    <meta charset="UTF-8">
    <?php include('../includes/include.php')?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shop-grid.css">
    <title><?= $pageTitle['Shop']?></title>
    <style>
    .grid-container {
    display: grid;
    grid-template-columns: 1.3fr 0.7fr;
    grid-template-rows: 1fr;
    gap: 1px 1px;
    grid-template-areas: "cart-list cart-total";
    }

    .cart-list {
        grid-area: cart-list;
        margin: 2rem;
    }

    .cart-total { grid-area: cart-total; }
    </style>
</head>
<body>
<?php include('../includes/navbar.php')?>
    <div class="grid-container">
        <div class="cart-list">
        <div class="table">
        <h2 class="text-center"> <?= $language['Shopping_Cart']?> </h2>
                    <table class="table table-striped table-bordered">
                        <thead class="thead-light">
                            <tr class='cart-padding'>
                                <th><?= $language['Item_Name']?></th>
                                <th><?= $language['Quantity']?></th>
                                <th><?= $language['Price']?></th>
                                <th><?= $language['Remove']?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($cart as $row) : ?>
                                <tr class='cart-padding'>
                <td><h5><img src="<?= itemicon($row['items_name'])?>" width="35" alt=""> <?= $row['items_name']?></h5></td>
                                <td><?= $row['amounts']?></td>
                                <td><?= $language['Currency_Symbol']?><?= number_format($row['amounts']* $buydb->getPrice($row['items_name']))?></td>
                                <td><button class="btn btn-dark"><a href="?removeItem=<?= $row['items_name']?>"><?= $language['Remove']?></a></button></td>
                                </tr>
                                <?php $totalPrice += ($buydb->getPrice($row['items_name'])*$row['amounts']) ?>
                                <?php $totalQuantity +=$row['amounts']; ?>
                                <?php endforeach ?>
                                <tr class='cart-padding'>
                                <td><?= $language['Total']?></td>
                                <td><?= $totalQuantity ?></td>
                                <td><?= $language['Currency_Symbol']?><?= number_format($totalPrice) ?></td>
                                <td><button class="btn btn-dark"><a href="?clear="><?= $language['Clear']?></a></button></td>
                            </tr>
                        </tbody>
                    </table>
    </div>
        </div>
        <div class="cart-total">
        </div>
</div>
<?php include('../includes/footer.php')?>
</body>
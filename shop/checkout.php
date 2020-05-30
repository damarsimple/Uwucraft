<?php
include '../controller/autoload.php';
include '../controller/shop.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Checkout example · Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <?php include("../includes/include.php") ?>
    <style>
      body{
        margin-top: 6rem;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
<?php include('../includes/navbar.php')?>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?= $website['brand']?>" alt="" width="72" height="72">
    <h2><?= $language['Shopping_Cart']?></h2>
  </div>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <?php foreach($cart as $row) :?>
      <?php $totalPrice += ($buydb->getPrice($row['items_name'])*$row['amounts']) ?>
      <?php $totalQuantity +=$row['amounts']; ?>
      <?php endforeach //do someone know better way to get totalPrice?/Or this is already better way?>
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted"><?= $language['Shopping_Cart']?></span>
        <span class="badge badge-secondary badge-pill"><?= count($cart) ?></span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?= $language['Total_Purchase']?></h6>
            <small class="text-muted"><?= $language['Total_Price']?></small>
          </div>
          <span class="text-muted"><?= $language['Currency_Symbol']?> <?= $totalPrice?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?= $language['Service_Fee']?></h6>
            <small class="text-muted"><?= $language['Fee']?></small>
          </div>
          <span class="text-muted"><?= $language['Currency_Symbol']?> <?= $totalPrice/100*$settings['serviceFee']?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?= $language['Tax']?></h6>
            <small class="text-muted"><?= $language['Tax']?></small>
          </div>
          <span class="text-muted"><?= $language['Currency_Symbol']?> <?= $totalPrice/100*$settings['Tax']?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0"><?= $language['Promo_Code']?></h6>
            <small></small>
          </div>
          <span class="text-success"><?= $language['Currency_Symbol']?> <?= $promocode = 10 ?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span><?= $language['Total']?> (<?= $language['Currency_Name']?>)</span>
          <?php $totals = $totalPrice/100*$settings['Tax']+$totalPrice/100*$settings['serviceFee']?>
          <?php $totals=+ $promocode?>
          <strong><?= $language['Currency_Symbol']?> <?= $totalPrice - $totals?></strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="<?= $language['Promo_Code']?>">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary"><?= $language['Redeem']?></button>
          </div>
        </div>
      </form>
      <br>
      <a href="payment.php"><button class="btn btn-primary btn-lg btn-block" type="submit"><?= $language["Payment_Button"]?></button></a>
    </div>
    <div class="col-md-8 order-md-1">
    <div class="table">
            <h2><span class="text-muted"><?= $language['List']?></span></h2>
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
                                <?php endforeach ?>
                                <tr class='cart-padding'>
                                <td><?= $language['Total']?></td>
                                <td><?= $totalQuantity ?></td>
                                <td><?= $language['Currency_Symbol']?><?= number_format($totalPrice) ?></td>
                                <td><button class="btn btn-dark"><a class="link" href="?clear="><?= $language['Clear']?></a></button></td>
                            </tr>
                        </tbody>
                    </table>
    </div>
    </div>
  </div>

</div>
<?php include('../includes/footer.php')?>
</body>
</html>

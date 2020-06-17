    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../favicon.ico" alt="" width="72" height="72">
    <h2><?= lang('App.Shopping_Cart')?></h2>
  </div>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted"><?= lang('App.Shopping_Cart')?></span>
        <span class="badge badge-secondary badge-pill"><?= 1//count($cart) ?></span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?= lang('App.Total_Purchase')?></h6>
            <small class="text-muted"><?= lang('App.Total_Price')?></small>
          </div>
          <span class="text-muted"><?= lang('App.Currency_Symbol')?> <?= "1"//$totalPrice?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?= lang('App.Service_Fee')?></h6>
            <small class="text-muted"><?= lang('App.Fee')?></small>
          </div>
          <span class="text-muted"><?= lang('App.Currency_Symbol')?> <?= "1"//$totalPrice/100*$settings['serviceFee')?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?= lang('App.Tax')?></h6>
            <small class="text-muted"><?= lang('App.Tax')?></small>
          </div>
          <span class="text-muted"><?= lang('App.Currency_Symbol')?> <?= 1//$totalPrice/100*$settings['Tax')?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0"><?= lang('App.Promo_Code')?></h6>
            <small></small>
          </div>
          <span class="text-success"><?= lang('App.Currency_Symbol')?> <?= 1//$promocode = 10 ?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span><?= lang('App.Total')?> (<?= lang('App.Currency_Name')?>)</span>
          <?php //$totals = $totalPrice/100*$settings['Tax')+$totalPrice/100*$settings['serviceFee')?>
          <?php //$totals=+ $promocode?>
          <strong><?= lang('App.Currency_Symbol')?> <?= 1//$totalPrice - $totals?></strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="<?= lang('App.Promo_Code')?>">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary"><?= lang('App.Redeem')?></button>
          </div>
        </div>
      </form>
      <br>
      <a href="payment.php"><button class="btn btn-primary btn-lg btn-block" type="submit"><?= lang('App.Clear')//$language["Payment_Button"]?></button></a>
    </div>
    <div class="col-md-8 order-md-1">
    <div class="table">
            <h2><span class="text-muted"><?= lang('App.List')?></span></h2>
                    <table class="table table-striped table-bordered">
                        <thead class="thead-light">
                            <tr class='cart-padding'>
                                <th><?= lang('App.Item_Name')?></th>
                                <th><?= lang('App.Quantity')?></th>
                                <th><?= lang('App.Price')?></th>
                                <th><?= lang('App.Remove')?></th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr class='cart-padding'>
                                <td><?= lang('App.Total')?></td>
                                <td><?= 1//$totalQuantity ?></td>
                                <td><?= lang('App.Currency_Symbol')?><?= 1//number_format($totalPrice) ?></td>
                                <td><button class="btn btn-dark"><a class="link" href="?clear="><?= lang('App.Clear')?></a></button></td>
                            </tr>
                        </tbody>
                    </table>
    </div>
    </div>
  </div>

</div>

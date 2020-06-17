    <div class="grid-container">
        <div class="cart-list">
        <div class="table">
        <h2 class="text-center"> <?= lang('App.Shopping_Cart')?> </h2>
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
                                <td><?= "10"//TotalQuantity ?></td>
                                <td><?= lang('App.Currency_Symbol')?><?= number_format("100") //Number Price ?></td>
                                <td><button class="btn btn-dark"><a href="?clear="><?= lang('App.Clear')?></a></button></td>
                            </tr>
                        </tbody>
                    </table>
    </div>
        </div>
        <div class="cart-total">
        </div>
</div>

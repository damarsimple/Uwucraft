<div class="container-fluid">
<div class="table-responsive">
    <div class="grid-container">
        <div class="table table-hover table-responsive">
        <h2 class="text-center"> <?= lang('App.Top')?> <?= 1//$limit?> <?= lang('App.Players')?> </h2>
                <h2 class="text-center"> <?= lang('App.Top_Players_by')?> <?= 2//$order ?></h2>
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark text-center">
                            <tr>
                                <th><?= lang('App.Rank')?></th>
                                <th><?= lang('App.Head')?></th>
                                <th><?= lang('App.Nickname')?></th>
                                <th><a class="text-light" href="?order=Kills"><?= lang('App.Kills')?></a></th>
                                <th><a class="text-light" href="?order=Deaths"><?= lang('App.Deaths')?></a></th>
                                <th><a class="text-light" href="?order=Wins"><?= lang('App.Wins')?></a></th>
                                <th><a class="text-light" href="?order=money&tables=eco_accounts"><?= lang('App.Money')?></a></th>
                            </tr>
                        </thead>
                        <tbody>
                                <!-- body table -->
                        </tbody>
                    </table>
        </div>
    </div>
</div>
</div>

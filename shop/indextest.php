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
    <title><?= $pageTitle['Shop']?></title>
</head>
<body>
<?php include('../includes/navbar.php')?>
    <!--Main layout-->
    <main>
        <div class="container" style="margin-top: 6rem;">

        <!--Navbar-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">

            <!-- Navbar brand -->
            <span class="navbar-brand">Categories</span>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">All
                    <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">MISC</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">FOOD</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">ARMOR</a>
                </li>

            </ul>
            <!-- Links -->

            <form class="form-inline">
                <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
            </form>
            </div>
            <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->

        <!--Section: Products v.3-->
        <section class="text-center mb-4">
        <div class="row row-cols-1 row-cols-md-3"> <!-- first row -->
        <?php foreach($itemIndex as $row) :?>
            <div class="col mb-4"> <!-- foreach from here-->
            <a class="card-link" href="product.php?item=<?= $row['name']?>">
                <div class="card">
                    <img src="<?= itemicon($row['name'])?>" class="card-img-top"  alt="<?= $row['name']?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['name']?></h5>
                        <p class="text-info"><?= $language['Currency_Symbol']?><?= $row['price']?></p>
                        <p class="text-muted"><?= $row['type']?></p>
                        <p class="card-text"><?= $row['description']?></p>
            </a>
                            <form class="d-flex justify-content-center mb-1">
                            <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
                            <button class="btn btn-primary btn-md my-0 p" type="submit"><?= $language['Add_to_Cart']?>
                            <i class="fas fa-shopping-cart ml-1"></i>
                            </button>
                            </form>
                    </div>
                </div>
            </div><!-- end foreach this row-->
            <?php endforeach?>
        </div>
        </section>
        <!--Section: Products v.3-->

        <!--Pagination-->
        <nav class="d-flex justify-content-center wow fadeIn">
            <ul class="pagination pg-blue">

            <!--Arrow left-->
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only"><?= $language['Previous']?></span>
                </a>
            </li>

            <li class="page-item active">
                <a class="page-link" href="#">1
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">5</a>
            </li>

            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only"><?= $language['Previous']?></span>
                </a>
            </li>
            </ul>
        </nav>
        <!--Pagination-->

        </div>
    </main>
    <!--Main layout-->

<?php include("../includes/footer.php")?>
</body>
</html>
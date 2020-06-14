<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="#">
        <img src="<?= $website['brand']?>" width="30" height="30" class="d-inline-block align-top" alt=""><?= $website['title']?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  href="../users/index.php"><?= $language['Home']?><span class="sr-only">(current)</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../users/index.php"><?= $language['Home']?></a>
                <a class="dropdown-item" href="../users/update.php"><?= $language['Update']?></a>
                <a class="dropdown-item" href="../games/log.php"><?= $language['Log']?></a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  href="../shop/index.php"><?= $language['Shop']?> <span class="sr-only">(current)</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../shop/index.php"><?= $language['Market']?></a>
                <a class="dropdown-item" href="../shop/search.php"><?= $language['Search']?></a>
                <a class="dropdown-item" href="../shop/checkout.php"><?= $language['Checkout']?></a>
                <a class="dropdown-item" href="../shop/payment.php"><?= $language['Payment']?></a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="../games/Index.php"><?= $language['Games']?> <span class="sr-only">(current)</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../games/betting.php"><?= $language['Betting']?></a>
                <a class="dropdown-item" href="../games/quiz.php"><?= $language['Quiz']?></a>
                <a class="dropdown-item" href="../games/poker.php"><?= $language['Poker']?></a>
                <a class="dropdown-item" href="../games/chess.php"><?= $language['Chess']?></a>
                <a class="dropdown-item" href="../games/jankenpon.php"><?= $language['Jan_Ken_Pon']?></a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="../server/index.php"><?= $language['Server']?> <span class="sr-only">(current)</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../server/player.php"><?= $language['Player_Lookup']?></a>
                <a class="dropdown-item" href="../server/mvp.php"><?= $language['MVP_Player']?></a>
                <a class="dropdown-item" href="../server/dynmap.php"><?= $language['Dynmap']?></a>
                <a class="dropdown-item" href="../server/leaderboard.php"><?= $language['Leaderboard']?></a>
                <a class="dropdown-item" href="../server/banned.php"><?= $language['Banned_Player']?></a>
                <a class="dropdown-item" href="../server/status.php"><?= $language['Status']?></a>
                </div>
            </li>
            </div>
            <ul class="navbar-nav mr-auto">
            <?php if(isset($_SESSION['username'])) : ?>
            <li class="nav-item active">
                <a class="nav-link" href="../users/index.php?logout=1"><?= $language['Logout']?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
            </li>
            <a class="nav-link" href="index.php"><img src="<?= $skins['HEAD'].$_SESSION['username']?>" width="30" height="30" alt="userphoto"> <?= $_SESSION['username'] ?><span class="sr-only">(current)</span></a>
            <?php if(isset($_SESSION['cartcount'])) : ?>
            <li class="nav-item active">
            <a class="nav-link" href="../shop/checkout.php">
            <button type="button" class="btn btn-dark">
            <?= $language['Shopping_Cart']?><span class="badge badge-dark"><?= $_SESSION['cartcount']?></span>
            </button>
            </a>
            </li>
            <?php endif ?>
            <?php if(isset($_SESSION['data']['isLogged']) && $_SESSION['data']['isLogged'] == 1) : ?>
            <li class="nav-item active">
            <a class="nav-link badge-success" href="#"><?= $language['Online']?><span class="sr-only">(current)</span></a>
            </li>
            <?php else :?>
            <li class="nav-item active">
            <a class="nav-link badge-danger" href="#"><?= $language['Offline']?><span class="sr-only">(current)</span></a>
            </li>
            <?php endif ?>
            <?php else :?>
            <li class="nav-item active">
            <a class="nav-link" href="../users/login.php"><?= $language['Login']?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="../users/register.php"><?= $language['Register']?><span class="sr-only">(current)</span></a>
            </li>
            <?php endif ?>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
            <input id="search" class="form-control mr-sm-2" type="text" placeholder="<?= $language['Search']?>" aria-label="Search">
            <style>
            </style>
            <div id="result">
            <ul class="list-group"></ul>
            </div>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?= $language['Search']?></button>
            </form>
            </ul>
            </nav>
            <script>
                //Close Dropdown and Show dropdown On Hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    $(window).on("load resize", function() {
    if (this.matchMedia("(min-width: 768px)").matches) {
        $dropdown.hover(
        function() {
            const $this = $(this);
            $this.addClass(showClass);
            $this.find($dropdownToggle).attr("aria-expanded", "true");
            $this.find($dropdownMenu).addClass(showClass);
        },
        function() {
            const $this = $(this);
            $this.removeClass(showClass);
            $this.find($dropdownToggle).attr("aria-expanded", "false");
            $this.find($dropdownMenu).removeClass(showClass);
        }
        );
    } else {
        $dropdown.off("mouseenter mouseleave");
    }
    });


    // $( "search" ).keydown(function() {
    //     console.log("keydown triggered")
    // });
    // $( "#search" ).keyup(function() {
    //     console.log("keyup triggered")
    //     var count = 1
    //     console.count(count)
    //     $.get( "../api/player.php?username=<?= $_SESSION['username']?>", function( data ) {
    //     $( "#result" )
    //     .append('<li id="delete" class="list-group-item link-class"> '+data.data.username+' | <span class="text-muted">'+data.data.type+'</span></li>'),
    //     "json"});
    // });
    // $( "body" ).click(function() {
    //     for(i=0; i < count; i++){
    //         setInterval(function(){
    //     $( "#delete" ).remove();
    //     console.log("remove triggered")
    //     },10000000)
    //     }

    // });
    // $( "#search" ).mouseout(function() { //event clear input
    //     this.value=""
    //     console.log('out')
    //     });

    //close div
            </script>
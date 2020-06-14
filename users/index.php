<?php
include '../controller/autoload.php';
include '../controller/query.php';
include '../controller/session.php';
//for login users only
if($_SESSION['username'] == null){
    header("location: ../users/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include('../includes/include.php')?>
    <link href="index.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle['Home']?></title>
</head>
<body>
    <?php include("../includes/navbar.php"); ?>
<div class="container-fluid" style="margin-top:6rem;">
    <div class="row">
        <div style="margin-bottom : 1.5rem !important;" class="col-xl-8">
                        <div class="news-content">
                            <h1><?= $language['Announcement']?></h1>
                            <?php foreach($news as $row) : ?>
                                <div class='news-box'>
                                <h2 class="title"><?= $row['title'] ?></h2>
                                <p class="author"><?= $language['By']?> : <?= $row['author'] ?> <?= gmdate("d/m/Y",$row['date']);?> <?= $language['At']?> <?= gmdate("H:i",$row['date']);?></p>
                                <p class="isi"><?= $row['value'] ?></p>
                                </div>
                                <?php endforeach ?>
                        </div>
        </div>
        <div class="col-xl-4">
        <div class="grid-playerdata">
                                <div class="profile">
                                    <div class="username">
                                        <h1> <?= $_SESSION['username']?></h1>
                                    </div>
                                    <div class="photo-profile">
                                    <img src="<?= $skins['HEAD'].$_SESSION['username']?>" width="65" height="65" alt="userphoto">
                                    </div>
                                    <div id="health" class="hunger-health">
                                    </div>
                                </div>
                                <div class="kill-rank">
                                    <div class="kill">
                                    <p id="kills"><?= $language['Kills']?> : </p>
                                    </div>
                                    <div class="rank">
                                    <p id="rank"><?= $language['Rank']?> : </p>
                                    </div>
                                </div>
                                <div class="dead-rank-money">
                                    <div class="dead">
                                    <p id="deaths"><?= $language['Deaths']?> : </p>
                                    </div>
                                    <div class="rank-money">
                                    <p id="rank_money"><?= $language['Rank_Money']?> : </p>
                                    </div>
                                </div>
                                <div class="games-money">
                                    <div class="games">
                                    <p id="games"><?= $language['Games']?> : </p>
                                    </div>
                                    <div class="money">
                                    <p id="money"><?= $language['Money']?> : <?= $language['Currency_Symbol']?> </p>
                                    </div>
                                </div>
                                <div class="level-bar">
                                    <div class="level">
                                    <p id="level"><?= $language['Level']?> : </p>
                                    </div>
                                    <div class="bar">
                                        <div class="progress">
                                        <div id="bar" class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                    </div><p id="experience"></p>
                                    </div>
        </div> <!-- playerdata-->
        <br>
        <div class="grid-query">
                                                    <div class="gamemode-playerlist">
                                                        <div class="gamemode">
                                                        <p id="gamemode"><?= $language['Gamemode']?> : </p>
                                                        </div>
                                                        <div class="playerlist">
                                                        <p id="player"><?= $language['Player']?> :  </p>
                                                        </div>
                                                    </div>
                                                    <div class="version-checkonline">
                                                        <div class="version">
                                                        <p id="version"><?= $language['Version']?> : </p>
                                                        </div>
                                                        <div class="checkonline">
                                                        <p id="check"></p>
                                                        </div>
                                                    </div>
                                                    <div class="motd">
                                                        <p><?= $language['MOTD'] ?></p>
                                                    </div>
                                                    <div class="servername-ip">
                                                        <div class="ip">
                                                        <p id="ip"><?= $language['IP']?> : </p>
                                                        </div>
                                                        <div class="servername">
                                                        <p id="servername"></p>
                                                        </div>
                                                    </div>
        </div><!-- Query -->
    </div>
</div>
</div>
<?php include("../includes/footer.php")?>
<script>
//VANILLA JS VERSION
    //Player API
    var PlayerData = new XMLHttpRequest();
    PlayerData.open('GET', '../api/player.php?username=<?= $_SESSION['username']?>');
    PlayerData.onload = function() {
        switch(this.status)
        {
            case 200:
            // SUCCESS !
            var data = JSON.parse(this.response);
            document.getElementById("kills").append(data.data.Kills);
            document.getElementById("deaths").append(data.data.Deaths);
            document.getElementById("games").append(data.data.Games);
            document.getElementById("rank").append(data.data.rank);
            document.getElementById("rank_money").append(data.data.rank_money);
            document.getElementById("money").append(data.data.money/1);
            document.getElementById("level").append(data.data.level);
            document.getElementById("level-bar").getComputedStyle(data.data.Kills);
            document.getElementById("kills").append(data.data.Kills);
            break;
            case 400:
            // No INPUT !
            var data = JSON.parse(this.response);
            console.log(data);
            break;
            case 404:
            // NOT FOUND !
            var data = JSON.parse(this.response);
            console.log(data);
            break;
        }
    };

    PlayerData.onerror = function() {
  // There was a connection error of some sort
};
PlayerData.send();


// // JQUERY VERSION
//     $.get( "../api/player.php?username=<?= $_SESSION['username']?>", function( data ) {
//     $( "#kills" )
//     .append(data.data.Kills)
//     $( "#deaths" )
//     .append(data.data.Deaths)
//     $( "#rank" )
//     .append(data.data.rank)
//     $( "#rank_money" )
//     .append(data.data.rank_money)
//     $( "#games" )
//     .append(data.data.Games)
//     $( "#level" )
//     .append(data.data.level)
//     $( "#bar" )
//     .css({
//         "width": Math.round(data.data.experience/1*100) + "%",
//     })
//     $( "#money" )
//     .append(data.data.money/1)
//     $( "#experience" )
//     .append(Math.round(data.data.experience/1*100) + "%")
//     for(i = 0; i < data.data.health/2; i++)
//     {
//     $( "#health" ).append("<img src='../img/textures/gui/health.png'>")
//     }
//     $( "#health" ).append("<br>") //separator
//     for(i = 0; i < data.data.hunger/2; i++)
//     {
//     $( "#health" ).append("<img src='../img/textures/gui/hunger.png'>")
//     }
// }, "json" );
//     //Server Query API
//     $.get( "../api/query.php", function( data ) {
//     $( "#gamemode" )
//     .append(data.data.gametype)
//     $( "#player" )
//     .append(data.data.players + " / " + data.data.maxplayers)
//     $( "#version" )
//     .append(data.data.gametype)
//     if(data.data.online)
//     {
//         $( "#check" )
//         .append("Online")
//     }else{
//         $( "#check" )
//         .append("Offline")
//     }
//     $( "#ip" )
//     .append(data.data.ip + ":" + data.data.port)
//     $( "#servername" )
//     .append(data.data.servername)
// },"json");
</script>
</body>
</html>

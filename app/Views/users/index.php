<style>
.button {
    margin-left: 65%;
}
.button:hover {
    box-sizing: border-box;
    box-shadow: red;
    background-color: azure;

}
.search{
    font-size: 10px;
}
#search{
    box-sizing: 10px;
}
.search input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
* {
    padding: 0;
    box-sizing: border-box;
}

/* main grid system */
.grid-container {
    margin-top: 2rem;
    display: grid;
    grid-template-columns: 1.4fr 0.6fr;
    grid-template-rows: 1fr;
    gap: 1px 1px;
    grid-template-areas: "dashboard card-data";
}
/* grid */
.dashboard {
    grid-area: dashboard;
    padding-top: 5rem !important;
    margin-right: 1rem !important;
}

.card-data {
    grid-area: card-data;
    padding-top: 5rem !important;
    margin-right: 1rem !important;
}
/* main news content */

.dashbutton{
    padding-top: 30px;
    padding-bottom: 20px;
}
.news-content{
    padding-top: 2rem;
    padding-left: 3rem;
    padding-right: 3rem;
    background-color: white;
    border: 2.5px solid cornflowerblue;
    border-radius: 10px;
}
.news-content .author{
    color: gray;
    font-size: smaller;
    padding: 10px;
}
.news-content .title{
    border: 1px solid cornflowerblue;
    background-color: whitesmoke;
    padding: 10px;
    font-size: large;
    font-weight: bold;
}
.news-content .isi{
    padding: 10px;
    font-size: medium;
}
.news-box{
    border: 1px solid cornflowerblue;
    margin-bottom: 1rem;
}
/* button dashboard*/
.dashnav{
    background-color: whitesmoke;
    border: 0px solid white;
    border-radius: 5px;
    padding: 20px;
    color: black;
    text-decoration: none;
}
.dashnav:hover{
    background-color: wheat;
}
/* begin player card data */
.playerdata{
    margin-top: 4.6rem;
    margin-bottom: 0px !important;
        }
        .grid-playerdata {
            display: grid;
            grid-template-columns: 0.1fr 3.2fr 0.1fr;
            grid-template-rows: 0.2fr 0.1fr 0.1fr 0.1fr 0.1fr;
            gap: 1px 1px;
            grid-template-areas: ". profile ." ". kill-rank ." ". dead-rank-money ." ". games-money ." ". level-bar .";
            text-align: center;
            background-color: white;
            border: 2.5px solid cornflowerblue;
            border-radius: 10px;
        }

        .profile {
            display: grid;
            grid-template-columns: 0.2fr 0.2fr 2.6fr;
            grid-template-rows: 0.2fr 1.3fr 1.5fr;
            gap: 1px 1px;
            grid-template-areas: ". . ." ". photo-profile username" ". . hunger-health";
            grid-area: profile;
        }

        .username {
            grid-area: username;
            text-align: left !important;
            padding-top: 0.5rem;
        }

        .photo-profile { grid-area: photo-profile; }

        .hunger-health {
            grid-area: hunger-health;
            text-align: left !important;
        }

        .kill-rank {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr;
            gap: 1px 1px;
            grid-template-areas: "kill rank";
            grid-area: kill-rank;
        }

        .kill { grid-area: kill; }

        .rank { grid-area: rank; }

        .dead-rank-money {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr;
            gap: 1px 1px;
            grid-template-areas: "dead rank-money";
            grid-area: dead-rank-money;
        }

        .dead { grid-area: dead; }

        .rank-money { grid-area: rank-money; }

        .games-money {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr;
            gap: 1px 1px;
            grid-template-areas: "games money";
            grid-area: games-money;
        }

        .games { grid-area: games; }

        .money { grid-area: money; }

        .level-bar {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1.2fr 0.8fr;
            gap: 1px 1px;
            grid-template-areas: "level" "bar";
            grid-area: level-bar;
        }

        .level { grid-area: level; }

        .bar { grid-area: bar; }
/* begin query server card*/
.queryserver{
    margin-top: 1rem;
}

    .grid-query {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 2.6fr 0.5fr 0.5fr 0.5fr;
        gap: 1px 1px;
        grid-template-areas: "servername-ip" "gamemode-playerlist" "version-checkonline" "motd";
        text-align: center;
        background-color: white;
        padding-top: 1rem;
        border: 2.5px solid cornflowerblue;
        border-radius: 10px;
    }
    
    .gamemode-playerlist {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr;
        gap: 1px 1px;
        grid-template-areas: "gamemode playerlist";
        grid-area: gamemode-playerlist;
    }
    
    .gamemode { grid-area: gamemode; }
    
    .playerlist { grid-area: playerlist; }
    
    .version-checkonline {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr;
        gap: 1px 1px;
        grid-template-areas: "version checkonline";
        grid-area: version-checkonline;
    }
    
    .version { grid-area: version; }
    
    .checkonline { grid-area: checkonline; }
    
    .motd { grid-area: motd; }
    
    .servername-ip {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr 1fr;
        gap: 1px 1px;
        grid-template-areas: "servername" "ip";
        grid-area: servername-ip;
    }
    
    .ip { grid-area: ip; }
    
    .servername { grid-area: servername; }

</style>
<div class="container-fluid" style="margin-top:6rem;">
    <div class="row">
        <div style="margin-bottom : 1.5rem !important;" class="col-xl-8">
        </div>
        <div class="col-xl-4">
        <div class="grid-playerdata">
                                <div class="profile">
                                    <div class="username">
                                        <h1> <?= $_SESSION['username']?></h1>
                                    </div>
                                    <div class="photo-profile">
                                    <img src="<?= "PLACEHOLDER".$_SESSION['username']?>" width="65" height="65" alt="userphoto">
                                    </div>
                                    <div id="health" class="hunger-health">
                                    </div>
                                </div>
                                <div class="kill-rank">
                                    <div class="kill">
                                    <p id="kills"><?= lang('App.Kills')?> : </p>
                                    </div>
                                    <div class="rank">
                                    <p id="rank"><?= lang('App.Rank')?> : </p>
                                    </div>
                                </div>
                                <div class="dead-rank-money">
                                    <div class="dead">
                                    <p id="deaths"><?= lang('App.Deaths')?> : </p>
                                    </div>
                                    <div class="rank-money">
                                    <p id="rank_money"><?= lang('App.Rank_Money')?> : </p>
                                    </div>
                                </div>
                                <div class="games-money">
                                    <div class="games">
                                    <p id="games"><?= lang('App.Games')?> : </p>
                                    </div>
                                    <div class="money">
                                    <p id="money"><?= lang('App.Money')?> : <?= lang('App.Currency_Symbol')?> </p>
                                    </div>
                                </div>
                                <div class="level-bar">
                                    <div class="level">
                                    <p id="level"><?= lang('App.Level')?> : </p>
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
                                                        <p id="gamemode"><?= lang('App.Gamemode')?> : </p>
                                                        </div>
                                                        <div class="playerlist">
                                                        <p id="player"><?= lang('App.Player')?> :  </p>
                                                        </div>
                                                    </div>
                                                    <div class="version-checkonline">
                                                        <div class="version">
                                                        <p id="version"><?= lang('App.Version')?> : </p>
                                                        </div>
                                                        <div class="checkonline">
                                                        <p id="check"></p>
                                                        </div>
                                                    </div>
                                                    <div class="motd">
                                                        <p><?= lang('App.MOTD') ?></p>
                                                    </div>
                                                    <div class="servername-ip">
                                                        <div class="ip">
                                                        <p id="ip"><?= lang('App.IP')?> : </p>
                                                        </div>
                                                        <div class="servername">
                                                        <p id="servername"></p>
                                                        </div>
                                                    </div>
        </div><!-- Query -->
    </div>
</div>
</div>

<script>
//VANILLA JS VERSION
    //Player API
    var PlayerData = new XMLHttpRequest();
    PlayerData.open('GET', '../api/player/<?= $_SESSION['username']?>/easy');
    PlayerData.onload = function() {
        switch(this.status)
        {
            case 200:
            // SUCCESS !
            var response = JSON.parse(this.response);
            //console.log(response.data[0].experience);
            document.getElementById("kills").append(response.data[0].Kills);
            document.getElementById("deaths").append(response.data[0].Deaths);
            document.getElementById("games").append(response.data[0].Games);
            document.getElementById("rank").append(response.data[0].rank);
            document.getElementById("rank_money").append(response.data[0].rank_money);
            document.getElementById("money").append(response.data[0].money/1);
            document.getElementById("level").append(response.data[0].level);
            document.getElementById("bar").style.width = response.data[0].experience + "%";//getComputedStyle(response.data[0].health);
            document.getElementById("kills").append(response.data[0].Kills);
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

<?php
//VIEW CONTROLLER

include('../controller/autoload.php');
include('../includes/include.php');
// include('../includes/navbar.php');
echo "<br>";
var_dump($_SERVER['REQUEST_URI']);
echo "<br>";
switch($_SERVER['REQUEST_URI'])
{
    case '/';
    echo "index";
    break;
    case '/server/leaderboard.php';
    include('../server/leaderboard.php');
    break;

    default;
    echo "default triggered 404";
    break;
}

// include('../includes/footer.php');
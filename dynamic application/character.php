<?php
    include("php functions.php");
    createDatabase();

    $id = $_GET["id"];
    $data = readSubject($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - <? echo $data["name"];?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><? echo $data["name"]; ?> </h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="<? echo "images/" . $data["avatar"];?>">
            <div class="stats" style="background-color: <? echo $data["color"]; ?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <? echo $data["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <? echo $data["attack"] ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?echo $data["defense"]; ?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <? echo $data["weapon"]; ?></li>
                    <li><b>Armor</b>: <? echo $data["armor"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <? echo $data["bio"]; ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; [Willem Xu] 2020</footer>
</body>
</html>
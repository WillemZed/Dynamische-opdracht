<?php
    include("php functions.php");
    createDatabase();
    $list = readCharacters();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
<header>
    <h1>Alle [10] characters uit de database </h1>
</header>
    <div id = "container">
        <? foreach ($list as $data)
            require("characterList.php")
        ?>
    </div>
</div>
<footer>&copy; [Willem Xu] 2020</footer>
</body>
</html>
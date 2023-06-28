<?php
include "datalayer.php";
$characters = ReadCharacters();
$numberofcharacters = getAllCharacters();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle <?php echo $numberofcharacters?> characters uit de database</h1>
<?php
?>
<h1>Image: <?php ?></h1>
</header>
<!-- make for loop of the following code for every character -->
<!-- <div id="container">
    <a class="item" href="character.html">
        <div class="left">
            <img class="avatar" src="images/bowser.jpg">
        </div>
        <div class="right">
            <h2>Bowser</h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> 10000</li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> 400</li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> 100</li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
</div> -->
<!-- end for loop -->
<?php
foreach($characters as $character)
{
    // all variables of the database
    // id, name, avatar, health, attack, defense, weapon, armor
    ?>
<div id="container">
<a class="item" href="character.php?page=<?php echo $character['id'] ?>">
    <div class="left">
        <img class="avatar" src="images/<?php echo $character['avatar'] ?>">
    </div>
    <div class="right">
        <!-- dynamic name -->
        <h2><?php echo $character['name'] ?></h2>
        <div class="stats">
            <ul class="fa-ul">
                <!-- dynamic health -->
                <li><span class="fa-li"><i class="fas fa-heart"></i></span><?php echo $character['health'] ?></li>
                <!-- dynamic attack -->
                <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?php echo $character['attack'] ?></li>
                <!-- dynamic defense -->
                <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?php echo $character['defense'] ?></li>
            </ul>
        </div>
    </div>
    <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
</a>
</div>
    <?php
}
?>
<footer>&copy; <?php echo date("Y");?> - Matthijs Veldkamp</footer>
</body>
</html>


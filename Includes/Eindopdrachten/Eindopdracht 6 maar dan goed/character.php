<?php
// Include the functions
include "datalayer.php";
// Check if page is set
if(isset($_GET['page']))
{
    // Get the page id
    $id = $_GET['page'];
    // make the id a integer
    $id = intval($id);
    // Get the character from the database
    $character = ReadCharacter($id);
    // Check if the character exists
    if(empty($character))
    {
        // Character doesn't exist, redirect to index.php
        header("Location: index.php");
        exit;
    }
}
else
{
    // Page is not set, redirect to index.php
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - <?php echo $character['name']?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?php echo $character['name']?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="images/<?php echo $character['avatar']?>">
            <div class="stats" style="background-color: <?php echo $character['color']?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $character['health']?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $character['attack']?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $character['defense']?></li>
                </ul>
                <ul class="gear">
                    <?php
                    if ($character['weapon'] == NULL)
                    {
                        ?>
                        <li><b>Weapon</b>: None</li>
                        <?php
                    }
                    else
                    {
                        ?>
                        <li><b>Weapon</b>: <?php echo $character['weapon']?></li>
                        <?php
                    }
                    if($character['armor'] == NULL)
                    {
                        ?>
                        <li><b>Armor</b>: None</li>
                        <?php
                    }
                    else
                    {
                        ?>
                        <li><b>Armor</b>: <?php echo $character['armor']?></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?php echo $character['bio']?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; <?php echo date("Y");?> - Matthijs Veldkamp</footer>
</body>
</html>
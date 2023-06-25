<?php include("datalayer.php");
error_reporting (E_ALL ^ E_NOTICE);
error_reporting (E_ALL ^ E_WARNING);
// $subjects = readSubject(10);
// echo $subjects["id"];
// echo $subjects["name"];
// echo $subjects["avatar"];
// echo $subjects["health"];
// echo $subjects["bio"];
// echo $subjects["color"];
// echo $subjects["attack"];
// echo $subjects["defense"];
// echo $subjects["weapon"];
// echo $subjects["armor"];
// update $currentpage with a GET request
if(isset($_GET['page'])){
    $currentpage = $_GET['page'];
}else{
    $currentpage = 1;
}
$subjects = readSubject($currentpage);
if ($subjects == FALSE) {
    $currentpage = 1;
    $subjects = readSubject($currentpage);
}
    // if(isset($_GET['page'])){
    //     $page = $_GET['page'];
    // }else{
    //     $page = 1;
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="links">
        <!-- generate links based on the names in the database -->
        <?php
        $subjects = readSubjects();
        foreach($subjects as $subject){
            echo "<a href='index.php?page=".$subject['id']."'>".$subject['name']."</a>";
            echo "<br>";
        }
        ?>
    </div>
    <div class="container" id="container">
        <h1 id="name">
        <?php $subjects = readSubject($currentpage);
        echo $subjects["name"];
        ?>
        </h1>
        <h1 id="bio">
        <?php $subjects = readSubject($currentpage);
        echo $subjects["bio"];
        ?>
        </h1>
    </div>
    <div class="stats" id="stats">
        <h1 id="health">Health:
        <?php $subjects = readSubject($currentpage);
        echo $subjects["health"];
        ?>
        </h1>
        <h1 id="color">Color:
        <?php $subjects = readSubject($currentpage);
        echo $subjects["color"];
        ?>
        </h1>
        <h1 id="attack">Attack:
        <?php $subjects = readSubject($currentpage);
        echo $subjects["attack"];
        ?>
        </h1>
        <h1 id="defense">Defense:
        <?php $subjects = readSubject($currentpage);
        echo $subjects["defense"];
        ?>
        </h1>
        <?php
        if ($subjects["weapon"] == NULL) {
            ?>
            <h1 id="weapon">Weapon: None</h1>
            <?php
        }else{
            ?>
            </h1>
            <h1 id="weapon">Weapon:
            <?php $subjects = readSubject($currentpage);
            echo $subjects["weapon"];
            ?>
            </h1>
            <?php
        }
        ?>
        <?php
        if ($subjects["armor"] == NULL) {
            ?>
            <h1 id="armor">Armor: None</h1>
            <?php
        }else{
            ?>
            </h1>
            <h1 id="armor">Armor:
            <?php
            echo $subjects["armor"];
            ?>
            </h1>
            <?php
        }
        ?>
    </div>
    <div class="imagecontainer" id="imagecontainer">
        <img id="avatarimg" src="images/<?php $subjects = readSubject($currentpage);
        echo $subjects["avatar"];
        ?>">
    </div>
    <button id="statsbutton" onclick="togglestats()">Show Stats</button>
    <button id="imagebutton" onclick="toggleimage()">Show Image</button>
    <script defer src="script.js"></script>
</body>
</html>
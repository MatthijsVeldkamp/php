<?php
include("datalayer.php");
// update $currentpage with a GET request
if(isset($_GET['page'])){
    $currentpage = $_GET['page'];
}else{
    $currentpage = 1;
}

// Count how many subjects there are in the database
$amount_of_subjects = countSubjects();
if ($currentpage > $amount_of_subjects) {
    $currentpage = 1;
}
    // if(isset($_GET['page'])){
    //     $page = $_GET['page'];
    // }else{
    //     $page = 1;
    // }
?>
<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo readSubject($currentpage)["name"]; ?></title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php

    ?>
    <div class="links">
        <?php
        for ($i = 1; $i <= $amount_of_subjects; $i++) {
            echo "<a href='index.php?page=" . $i . "'>" . readSubject($i)["name"] . "</a>";
        }
        ?>
    </div>
    <?php
    $result = readSubject($currentpage);
    if ($result["image"] != "") {
        echo "<img src='images/" . $result["image"] . "' id='myImage'" . "'>";
    }
    ?>
    <div class="container">
    <?php
    if($result){
        echo "<h1>" . $result["name"] . ":</h1>";
        echo "<h3>" . $result["description"] . "</h3>";
    }
    else{
        echo "<h1> Die entry bestaat niet! </h1>";
    }
    

    ?>
    </div>
</body> 
</html>
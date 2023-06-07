<?php
include("datalayer.php");
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
?>
<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rubyquest</title>
</head>
<body>
<?php

    ?>
    <div class="header">
 
    </div>
    <?php
    $result = readSubject(1);
    if($result){
        echo "<h1> Id: " . $result["id"] . "</h1>";
        echo "<h3> Titel: " . $result["name"] . "</h3>";
        echo "<h3> Beschrijving: " . $result["description"] . "</h3>";
        echo "<h3> Foto: " . $result["image"] . "</h3>";
    }
    else{
        echo "<h1> Die entry bestaat niet! </h1>";
    }
    ?>
</body> 
</html>
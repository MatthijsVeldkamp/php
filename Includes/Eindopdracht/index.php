<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eindopdracht</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // header
        include("content/header.php");
        // links
        include("content/links.php");
        // content
        ?>
        <div class="content">
        <?php
            include("content/".$page.".php");
        ?>
        </div>
        <?php
        // copyright
        include("content/footer.php");
    ?>
</body>
</html>

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
    <link rel="stylesheet" href="../Eindopdracht/style.css">
</head>
<body>
    <?php
        // header
        ?>
        <div class="header">
        <?php
        include("content/header.php");
            
        ?>
        </div>
        <?php
        // links
        ?>
        <div class="links">
        <?php
        include("content/links.php")
        ?>
        </div>
        <?php
        // content
        ?>
        <div class="container">
        <?php
            include("content/".$page.".php");
        ?>
        </div>
        <?php
        // copyright
        include("content/footer.php");
    ?>
    <script defer src="script.js"></script>
</body>
</html>

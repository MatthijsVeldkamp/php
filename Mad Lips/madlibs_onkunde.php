<?php
$antwoord1 = "";
$antwoord2 = "";
$antwoord3 = "";
$antwoord4 = "";
$antwoord5 = "";
$antwoord6 = "";
$antwoord7 = "";
$antwoord1Err = $antwoord2Err = $antwoord3Err = $antwoord4Err = $antwoord5Err = $antwoord6Err = $antwoord7Err = "";
{
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madlibs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            for ($i = 1; $i <= 8; $i++) {
                if (empty($_POST["antwoord$i"])) {
                    ${"antwoord{$i}Err"} = "* Dit veld is verplicht";
                } else {
                    if (preg_match("/^[a-zA-Z-' ]*$/", $_POST["antwoord$i"])) {
                        ${"antwoord$i"} = $_POST["antwoord$i"];
                    } else {
                        ${"antwoord$i"} = "";
                        ${"antwoord{$i}Err"} = " Gebruik alleen letters en spaties!";
                    }
                }
            }
            
            if (!empty($antwoord1) && !empty($antwoord2) && !empty($antwoord3) && !empty($antwoord4) && !empty($antwoord5) && !empty($antwoord6) && !empty($antwoord7))
            {
                ?>
                <div class="header">
                    <h1>Onkunde</h1>
                </div>
                    <h2>Er zijn veel mensen die niet kunnen <?php echo $antwoord1?>.</h2>
                    <br>
                    <h2>Neem nou <?php echo $antwoord2?>.</h2>
                    <h2>Zelfs met de hulp van een <?php echo $antwoord4?> of zelfs <?php echo $antwoord3?> kan <?php echo $antwoord2?> niet <?php echo $antwoord1?>.</h2>
                    <h2>Dat heeft niet te maken met een gebrek aan <?php echo $antwoord5?>, maar met een te veel aan <?php echo $antwoord6?>.</h2>
                    <h2>Te veel <?php echo $antwoord6?> leidt tot <?php echo $antwoord7?> en dat is niet goed als je wilt <?php echo $antwoord1?>.</h2>
                    <h2>Helaas voor <?php echo $antwoord2?>.</h2>
                    
            <?php
            }
            
        }
        if (empty($antwoord1) || empty($antwoord2) || empty($antwoord3) || empty($antwoord4) || empty($antwoord5) || empty($antwoord6) || empty($antwoord7))
        {
            ?>
            <form action="madlibs_onkunde.php" method="post">
            <span><h2>Wat zou je graag willen kunnen?</h2><input type="text" required name="antwoord1" value="<?php echo $antwoord1?>"></span><span class="error"><?php echo $antwoord1Err;?></span>
            <span><h2>Met welk persoon kun je goed opschieten?</h2><input type="text" required name="antwoord2" value="<?php echo $antwoord2?>"></span><span class="error"><?php echo $antwoord2Err;?></span>
            <span><h2>Wat is je favoriete getal?</h2><input type="text" required name="antwoord3" value="<?php echo $antwoord3?>"></span> <span class="error"><?php echo $antwoord3Err;?></span>
            <span><h2>Wat heb je altijd bij je als je op vakantie gaat?</h2><input type="text" required name="antwoord4" value="<?php echo $antwoord4?>"></span> <span class="error"><?php echo $antwoord4Err;?></span>
            <span><h2>Wat is je beste persoonlijke eigenschap?</h2><input type="text" required name="antwoord5" value="<?php echo $antwoord5?>"></span><span class="error"><?php echo $antwoord5Err;?></span>
            <span><h2>Wat is je slechtste persoonlijke eigenschap?</h2><input type="text" required name="antwoord6" value="<?php echo $antwoord6?>"></span><span class="error"><?php echo $antwoord6Err;?></span>
            <span><h2>Wat is het ergste dat je kan overkomen?</h2><input type="text" required name="antwoord7" value="<?php echo $antwoord7?>"></span><span class="error"><?php echo $antwoord7Err;?></span>
            <br>
            <span>
            <input type="submit" id="submit" value="Versturen">
            </span>
            <?php
        }
        ?>

    </form>
            <?php
        }
        ?>
        

    </div>
    <div class="footer">
        <p>&copy;<?php echo date("Y"); ?> Matthijs Veldkamp</p>
    </div>
</body>
</html>
    <?php
?>
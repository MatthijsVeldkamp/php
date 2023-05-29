<?php
$antwoord1 = "";
$antwoord2 = "";
$antwoord3 = "";
$antwoord4 = "";
$antwoord5 = "";
$antwoord6 = "";
$antwoord7 = "";
$antwoord8 = "";
$antwoord1Err = $antwoord2Err = $antwoord3Err = $antwoord4Err = $antwoord5Err = $antwoord6Err = $antwoord7Err = $antwoord8Err = "";
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
            
            if (!empty($antwoord1) && !empty($antwoord2) && !empty($antwoord3) && !empty($antwoord4) && !empty($antwoord5) && !empty($antwoord6) && !empty($antwoord7) && !empty($antwoord8))
            {
                ?>
                <div class="header">
                    <h1>Paniek</h1>
                </div>
                <h2>Er heerst paniek in het koninkrijk <?php echo $antwoord3?>, Koning <?php echo $antwoord6?> is ten einde raad en als Koning <?php echo $antwoord6?><br> ten einde raad is, dan roept hij zijn te-einde-raadsheer <?php echo $antwoord2?>.<br></h2>
                <br>
                <h2>"<?php echo $antwoord2?>! Het is een ramp! Het is een schande!"</h2>
                <h2>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</h2>
                <h2>"Mijn <?php echo $antwoord1?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $antwoord5?> voor hem gekocht!"</h2>
                <h2>"Majesteit, uw <?php echo $antwoord1?> komt vast vanzelf weer terug?"</h2>
                <h2>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $antwoord8?> leren?"</h2>
                <h2>"Maar Sire, daar kunt u toch uw <?php echo $antwoord7?> voor gebruiken?"</h2>
                <h2>"<?php echo $antwoord2?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had?"</h2>
                <h2>"<?php echo $antwoord4?>, Sire."</h2>
            <?php
            }
            
        }
        if (empty($antwoord1) || empty($antwoord2) || empty($antwoord3) || empty($antwoord4) || empty($antwoord5) || empty($antwoord6) || empty($antwoord7) || empty($antwoord8))
        {
            ?>
            <form action="madlibs_paniek.php" method="post">
            <span><h2>Welk dier zou je nooit als huisdier willen hebben?</h2><input type="text" required name="antwoord1" value=<?php echo $antwoord1?>></span><span><?php echo $antwoord1Err?></span>
            <span><h2>Wie is de belangrijkste persoon in je leven?</h2><input type="text" required name="antwoord2" value=<?php echo $antwoord2?>></span><span><?php echo $antwoord2Err?></span>
            <span><h2>In welk land zou je graag willen wonen?</h2><input type="text" required name="antwoord3" value=<?php echo $antwoord3?>></span><span><?php echo $antwoord3Err?></span>
            <span><h2>Wat doe je als je je verveelt?</h2><input type="text" required name="antwoord4" value=<?php echo $antwoord4?>></span><span><?php echo $antwoord4Err?></span>
            <span><h2>Met welk speelgoed speelde je als kind het meest?</h2><input type="text" required name="antwoord5" value=<?php echo $antwoord5?>></span><span><?php echo $antwoord5Err?></span>
            <span><h2>Bij welke docent spijbel je het liefst?</h2><input type="text" required name="antwoord6" value=<?php echo $antwoord6?>></span><span><?php echo $antwoord6Err?></span>
            <span><h2>Als je €100.000,- had, wat zou je dan kopen?</h2><input type="text" required name="antwoord7" value=<?php echo $antwoord7?>></span><span><?php echo $antwoord7Err?></span>
            <span><h2>Wat is je favoriete bezigheid?</h2><input type="text" required name="antwoord8" value=<?php echo $antwoord8?>></span><span><?php echo $antwoord8Err?></span>
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
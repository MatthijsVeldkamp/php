<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $antwoord1 = $_POST['antwoord1'];
    $antwoord2 = $_POST['antwoord2'];
    $antwoord3 = $_POST['antwoord3'];
    $antwoord4 = $_POST['antwoord4'];
    $antwoord5 = $_POST['antwoord5'];
    $antwoord6 = $_POST['antwoord6'];
    $antwoord7 = $_POST['antwoord7'];
        ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madlibs</title>
</head>
<body>
    <h1>Onkunde</h1>
    <h3>Er zijn veel mensen die niet kunnen <?php echo $antwoord1?><br>Neem nou <?php echo $antwoord2?>. Zelfs met hulp van een <?php echo $antwoord4?> of zelfs <?php echo $antwoord3?> kan <?php echo $antwoord2?> niet <?php echo $antwoord1?>.<br>Dat heeft niet te maken met een gebrek aan <?php echo $antwoord5?> maar met een te veel aan <?php echo $antwoord6?>.<br>Te veel <?php echo $antwoord6?> leidt tot <?php echo $antwoord7?> en dat is niet goed als je wilt <?php echo $antwoord1?>.<br>Helaas voor <?php echo $antwoord2?>!</h3>
</body>
</html>
    <?php
    
}
else
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
    <form action="madlibs.php" method="post">
        <span><h2>Wat zou je graag willen kunnen?</h2><input type="text" required name="antwoord1"></span>
        <span><h2>Met welk persoon kun je goed opschieten?</h2><input type="text" required name="antwoord2"></span>
        <span><h2>Wat is je favoriete getal?</h2><input type="text" required name="antwoord3"></span>
        <span><h2>Wat heb je altijd bij je als je op vakantie gaat?</h2><input type="text" required name="antwoord4"></span>
        <span><h2>Wat is je beste persoonlijke eigenschap?</h2><input type="text" required name="antwoord5"></span>
        <span><h2>Wat is je slechtste persoonlijke eigenschap?</h2><input type="text" required name="antwoord6"></span>
        <span><h2>Wat is het ergste dat je kan overkomen?</h2><input type="text" required name="antwoord7"></span>
        <input type="submit">
    </form>
</body>
</html>
    <?php
}
?>
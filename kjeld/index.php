<?php
$name = $email = '';
$nameErr = $emailErr = '';
// check if request is made with POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    // check if name is empty
    if (empty($name)) {
        $nameErr = '*Name is required';
    }
    // check if email is empty
    if (empty($email)) {
        $emailErr = '*Email is required';
    }
    // check for script injection
    if (!empty($name) && !empty($email)) {
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bouwbedrijf Ritmeester</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php
    if (empty($name) || empty($email)) {
        ?>
            <h1>Welkom!</h1>
        <form action="index.php" method="POST">
        <input name="name" type="text" value="<?php echo $name?>" placeholder="Vul hier je naam in.">
        <h5 id="err"><?php echo $nameErr; ?></h5>
        <input name="email" type="email" value="<?php echo $email?>" placeholder="Vul hier je e-mail in.">
        <h5 id="err"><?php echo $emailErr; ?></h5>
        <input type="submit" value="Submit">
        </form>
        <?php
    }
    else
    {
        ?>
        <h1>Je naam is, <?php echo $name; ?>!</h1>
        <h1>Je e-mail is, <?php echo $email; ?>!</h1>
        <?php
    }
    ?>
 </div>
</body>
</html>
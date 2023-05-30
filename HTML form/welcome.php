<?php
$nameErr = $emailErr = "";
$naam = $email = "";
// check if a request has been made
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $naam = $_POST["naam"];
    $email = $_POST["email"];
    if (empty($naam))
    {
        $nameErr = "* Name is required";
    }
    else
    {
        // check if name only contains letters and whitespace
        if (preg_match("/^[a-zA-Z-' ]*$/",$_POST["naam"]))
        {
            $naam = $_POST["naam"];
        }
        else
        {
            $naam = "";
            $nameErr = "Only letters and white space allowed";
        }
       
        
    }
    if (empty($email))
    {
        $emailErr = "* Email is required";
    }
    else
    {
        $email = $_POST["email"];
        
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    if(!empty($naam) and !empty($email) and preg_match("/^[a-zA-Z-' ]*$/",$_POST["naam"])){
    ?>
    
        <h1><?php echo $naam?></h1>
        <h1><?php echo $email?></h1>
    <?php
    }
    else
    {
        ?>
        <div class="container">
        <form action="welcome.php" method="post">
            <label for="naam">Naam:</label>
            <div id="username"></div>
            <input type="text" name="naam" id="naam" value=<?php echo $naam?>><span id="nameerr"><?php echo $nameErr?><br></span>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value=<?php echo $email?>><span id="emailerr"><?php echo $emailErr?><br></span>
            <input type="submit" value="Submit">
        </form>
        </div>
    </body>
    </html>
    <?php 
    }


?>
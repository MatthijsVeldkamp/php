<?php
// check if request is sent using if request type == get
if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
    $name = $_GET["name"];
    $age = $_GET["age"];
    if ($name == "")
    {
        echo "Name is empty";
    }
    else
    {
        echo "Name: " . $name;
    }
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
        <title>Hoi</title>
    </head>
    <body>
        <div class="container">
            <h1>Hoi</h1>
            <form action="index.php" method="$_GET"></form>
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="age" placeholder="Age">
            <input type="submit" value="Submit">
        </div>
    </body>
    </html>
    <?php
}
?>
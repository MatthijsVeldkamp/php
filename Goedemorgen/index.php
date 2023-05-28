<?php
date_default_timezone_set("Europe/Amsterdam");
$time = date("H:i");
$time_hour = date("H");
if ($time_hour >= "6" AND $time_hour < "12") {
    $message = "Goedemorgen";
    // change the background image to morning
    echo "<style>
    .backgroundimage {
        background-image: url('Images/morning.png');
    }
    </style>";
}

elseif ($time_hour >= "12" AND $time_hour < "18") {
    $message = "Goedemiddag";
    // change the background image to afternoon
    echo "<style>
    .backgroundimage {
        background-image: url('Images/afternoon.png');
    }
    </style>";
}

elseif ($time_hour >= "18" AND $time_hour < "24") {
    $message = "Goedenavond";
    // change the background image to evening
    echo "<style>
    .backgroundimage {
        background-image: url('Images/evening.png');
    }
    </style>";
}

elseif ($time_hour >= "0" AND $time_hour < "6") {
    $message = "Goedenacht";
    // change the background image to night
    echo "<style>
    .backgroundimage {
        background-image: url('Images/night.png');
    }
    </style>";
}
else
{
    $message = "Error";
}
// Refresh the page every second
header("Refresh: 1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $message ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="backgroundimage">
    <div class="container">
    <h1><?php echo $message?></h1>
    <h1>Het is nu: <?php echo $time; ?></h1>
    </div>
    </div>
    <script src="updatetime.js"></script>
</body>
</html>
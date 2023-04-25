<?php 
date_default_timezone_set('Asia/Manila');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/header.css" class="rel">
    <script src="./js/header.js" defer></script>
    <title>Company Time Management</title>
</head>
<body>

    <div class="cont__pageHeader">
        <div class="ph_rightContent">
            <div class="app_title">
                <img id='logo' src="./images/comp-logo.png" alt="Logo">
            </div>
        </div>
        <div class="ph_leftContent">
            <div class="cont__dateAndTime">
                <div class="contDate">
                    <?php echo date('l F j, Y');?>
                </div>
                <div class="contTime">
                    <?php echo date('h:i:s A');?>
                </div>
            </div>
        </div>
        <!-- <div class="ph_greet">
            <div> Good afternoon </div>
            <div class='nthGreet'> jimmy! </div>
        </div> -->
    </div>


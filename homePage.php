<?php

include_once('./includes/autoLoadClassesMain.inc.php');
date_default_timezone_set('Asia/Manila');
$controller = new Controller();
$controller->redirectForeignUser();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="leavePage.php">File Leave</a>
    <br>
    <br>
    <a href="timestamp.php">My timestamp</a>
    <div class="container_actions">
        <button class='time_in tkeep_action' disabled>Time In</button>
        <button class='break_out tkeep_action' disabled>Break Out</button>
        <button class='break_in tkeep_action' disabled>Break In</button>
        <button class='time_out tkeep_action' disabled>Time Out</button>
    </div>


    <form action="./includes/logout.inc.php" method="post">
        <button name="logout">Logout</button>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/TKeep_actions.js"></script>
    <script src="./js/homePage.js"></script>
</body>
</html>
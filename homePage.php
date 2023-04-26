<?php
include 'header.php';   
include_once('./includes/autoLoadClassesMain.inc.php');
date_default_timezone_set('Asia/Manila');
$controller = new Controller();
$controller->redirectForeignUser();
?>

<link rel="stylesheet" href="./css/homePage.css">
<body>
    <div class="cont__navBar">
        <div class="nav_leave">
            <a href="leavePage.php">File Leave</a>
        </div>
        <div class="nav_timestamp">
            <a href="timestamp.php">My timestamp</a>
        </div>
        <div class="nav_logout">
            <form action="./includes/logout.inc.php" method="post">
                <button name="logout">Logout</button>
            </form>
        </div>
    </div>
    <div class="cont__bodyActions">
        <div class="container_actions">
            <div class="cont_timeIn">
                <button class='time_in tkeep_action' disabled>Time In</button>
            </div>
            <div class="cont_break">
                <button class='break_out tkeep_action' disabled>Break Out</button>
                <button class='break_in tkeep_action' disabled>Break In</button>
            </div>
            <div class="cont_logout">
                <button class='time_out tkeep_action' disabled>Time Out</button>
            </div>
        </div>
        <div class="cont__timestamp">
            <?php include 'timestamp.php' ?>
        </div>
    </div>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="./js/timestamp.js"></script>
    <script src="./js/TKeep_actions.js"></script>
    <script src="./js/homePage.js"></script>

    <?php include 'footer.php' ?>
</body>
</html>
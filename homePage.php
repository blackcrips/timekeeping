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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="./css/homePage.css">
    <title>Welcome</title>
</head>
<body>
    <div class="container-body">
        <div class="alert alert-primary" role="alert"></div>
        <?php include_once('header.php'); ?>
        <div class="right-details">
            <div class="right-header">
                <ul class="ul-nav">
                    <li>
                        <div class="nav-1">Navigation 1</div>
                    </li>
                    <li>
                        <div class="nav-2">Navigation 2</div>
                    </li>
                    <li>
                        <div class="nav-3">Navigation 3</div>
                    </li>
                    <li>
                        <div class="nav-4">Navigation 4</div>
                    </li>
                    <li class="logout">
                        <form action="./includes/logout.inc.php" method="post">
                            <button name="logout">Logout</button>
                        </form>
                    </li>
                </ul>
                <section class="container-content">
                    <div class="content-title">
                        <h2>Last timekeeping activity</h2>
                    </div>
                    <div class="container-table">
                        <table class="table active table-bordered table-striped table-hover" id="data-table">
                            <thead>
                                <tr>
                                    <td>Date</td>
                                    <td>Time In</td>
                                    <td>First Break</td>
                                    <td>First End Break</td>
                                    <td>Second Break</td>
                                    <td>Second End Break</td>
                                    <td>Time Out</td>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
        <?php include_once('footer.php'); ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="js/homePage.js"></script>
</body>
</html>
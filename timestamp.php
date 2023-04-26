<?php

include_once('./includes/autoLoadClassesMain.inc.php');
date_default_timezone_set('Asia/Manila');
$controller = new Controller();
$controller->redirectForeignUser();
$view = new View();

?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    
<div class="container_timestamp">
        <table id="tbl_timestamp" class="hover compact row-border table-striped" display style="width:100%">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time in</th>
                    <th>Break out</th>
                    <th>Break in</th>
                    <th>Time out</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($view->getTimestamp() as $value) : ?>
                    <tr>
                        <td><?php echo $value['date']; ?></td>
                        <td><?php echo $value['time_in']; ?></td>
                        <td><?php echo $value['break_out']; ?></td>
                        <td><?php echo $value['break_in']; ?></td>
                        <td><?php echo $value['time_out']; ?></td>
                        <td><?php echo $value['remarks']; ?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="./js/timestamp.js"></script>
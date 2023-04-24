<?php

include_once('./includes/autoLoadClassesMain.inc.php');
date_default_timezone_set('Asia/Manila');
$controller = new Controller();
$controller->redirectForeignUser();
$view = new View();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <title>Leave Page</title>
</head>

<style>
    .alert{
        position: fixed;
        top: -100%;
        right: 0;
        left: 0;
        transition: all 0.8s ease-in-out;
    }
</style>

<body>
<div class="alert" role="alert">
  This is a primary alert—check it out!
</div>
    <div class="container_fileLeave">
        <br>
        <select name="leave_options" id="leave_options" data-impLeaveData>
            <option value="Sick_leave">Sick leave</option>
            <option value="Vacation_leave">Vacation leave</option>
            <option value="Authorized_absent">Authorized absent</option>
            <option value="unAuthorized_absent">Unauthorized absent</option>
        </select>
        <br>
        <br>

        <label for="start_request">Leave start: </label>
        <input type="date" name="start_request" id="start_request" data-impLeaveData>
        <br>
        <br>
        <label for="end_request">Leave end: </label>
        <input type="date" name="end_request" id="end_request" data-impLeaveData>
        <br>
        <br>
        <input type="text" name="reason" id="reason" placeholder="Reason" data-impLeaveData />
        <br>
        <br>
        <button class="btn btn-primary" id="leave_submit">Submit</button>
        <button class="btn btn-danger" id="leave_cancel">Back</button>
    </div>
    <div class="container_leaveDetails">
        <table id="tbl_leaveDetails" class="hover compact" display style="width:100%">
            <thead>
                <tr>
                    <th>Leave type</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Reason</th>
                    <th>Email</th>
                    <th>acknowledge by</th>
                    <th>Date file</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($view->getLeaveDetails() as $value) : ?>
                    <tr>
                        <td><?php echo $value['leave_type']; ?></td>
                        <td><?php echo $value['start_request']; ?></td>
                        <td><?php echo $value['end_request']; ?></td>
                        <td><?php echo $value['leave_reason']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['acknowledge_by']; ?></td>
                        <td><?php echo $value['added_at']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="./js/LeaveActions.js"></script>
    <script src="./js/leavePage.js"></script>
</body>
</html>
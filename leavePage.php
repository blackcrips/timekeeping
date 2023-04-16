<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/LeaveActions.js"></script>
    <script src="./js/leavePage.js"></script>
</body>
</html>
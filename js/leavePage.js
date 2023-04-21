$(document).ready(function(){
    let leaveActions = new LeaveActions();
    $("#leave_submit").on('click',() => {
        leaveActions.leaveValidation();
    });

    leaveActions.onLoadLeaveDetails();

    $('#leave_cancel').on('click',() => {
        location.href = 'homePage.php';
    })
})
$(document).ready(function(){
    let leaveActions = new LeaveActions();
    $("#leave_submit").on('click',() => {
        // leaveActions.insertLeaveRequest();
        leaveActions.leaveValidation();
    });

    leaveActions.onLoadLeaveDetails();
})
class LeaveActions {
    insertLeaveRequest()
    {
        $.ajax(
            {
                url: "./includes/insertLeaveRequest.inc.php",
                method: "POST",
                data: {
                    // sending input leave details to database
                    "leave-type": $('#leave_options').val(),
                    "start-request": $('#start_request').val(),
                    "end-request": $('#end_request').val(),
                    "reason": $('#reason').val()
                }
            }
        );
    }

    leaveValidation()
    {
        //checking for empty input fields
        let countValue = 0;
        $('[data-impLeaveData]').each(function(){
            if($(this).val() == ""){
                $(this).css('box-shadow','2px 0 10px -1px red');
                $(this).css('border-color','red');
            } else {
                $(this).css('box-shadow','none');
                $(this).css('border-color','#000');
                countValue++;
            }
        });

        let leaveActions = new LeaveActions();

        // validation if all fields are not empty
        if(countValue == 4){
            //insert information to database
            leaveActions.insertLeaveRequest();
            alert('Record added');
            location.href = "";

        }else {

            // return feedback for empty fields
            leaveActions.alertSettings('Please fill up all fields','warning')

            setTimeout(leaveActions.alertTimeOut,3000);
        }
    }

    // creating dynamic alert message
    alertSettings(messageAlert,alertType)
    {
        let leaveActions = new LeaveActions();
        $('.alert').css('top','0');
        $('.alert').html(messageAlert);
        $('.alert').attr('class','alert alert-' + alertType);

        setTimeout(leaveActions.alertTimeOut,3000);
    }

    //dynamic timeout alert
    //reusable function that will depends on scenario
    alertTimeOut()
    {
        $('.alert').css('top','-100%');
    }

    //onload jquery datatable format and design
    onLoadLeaveDetails()
    {
        $('#tbl_leaveDetails').DataTable();
    }
}
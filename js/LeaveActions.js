class LeaveActions {
    insertLeaveRequest()
    {
        
        $('#start_request').val();
        $('#end_request').val();
        $('#reason').val();

        $.ajax(
            {
                url: "./includes/insertLeaveRequest.inc.php",
                method: "POST",
                data: {
                    "leave-type": $('#leave_options').val(),
                    "start-request": $('#start_request').val(),
                    "end-request": $('#end_request').val(),
                    "reason": $('#reason').val()
                },
                success: function(data){
                    console.log(data);
                }
            }
        );
    }

    leaveValidation()
    {
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

        if(countValue == 4){
            leaveActions.insertLeaveRequest();
        }else {
            $('.alert').css('top','0');
            $('.alert').html('Please fill up all fields');
            $('.alert').attr('class','alert alert-warning');

            setTimeout(leaveActions.alertTimeOut,3000);
        }
    }

    alertTimeOut()
    {
        $('.alert').css('top','-100%');
    }
}
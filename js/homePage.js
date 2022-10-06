$(document).ready(function(){
    $('#data-table').DataTable();

    $('.action').each(function(index,element){
        $(this).on('click', function(){
            let actionValue = $(this).html();
            actionValue += " successful!";
            $('.alert-primary').text(actionValue);
            $('.alert-primary').css('top',0);
            $('.alert-primary').html();
            setTimeout(fadeAlertOut,3000);
            timekeepingAction($(this).html());
        });
    })
});


function fadeAlertOut()
{
    $('.alert-primary').css('top','-15%');
}

function timekeepingAction(action)
{
    $.ajax(
        {
            type: "POST",
            url: "./includes/timekeepingAction.inc.php",
            data: {"action": action},
            success: function(data)
            {
                // window.location.href = "./includes/timekeepingAction.inc.php"
                console.log(data);
            }
        }
    );
}

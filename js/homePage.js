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
                let dataCallback = data.replaceAll(`_`,`-`);
                let replaceQuote = dataCallback.replaceAll(`"`,"");
                compareValue(replaceQuote,'false');
                checkLastTimekeepingAction();
                console.log(data)
            }
        }
    );
}

checkLastTimekeepingAction();

function checkLastTimekeepingAction()
{
    $.ajax(
        {
            type: "POST",
            url: "./includes/dynamicCheck.inc.php",
            data: {'request-value': true},
            success: function(data){
                if(!data || data == 'false'){
                    $('.time-in').attr('disabled',false);
                } else {
                    let selector = data.replaceAll(`_`,"-");
                    let selector2 = selector.replaceAll(`"`,"");
                    compareValue(selector2,'true');
                }
            },
            error: function(request){
                console.log(request.responseText);
            }
        }
        );
}

function compareValue(selector,bool)
{
    $('.action').each(function(index,element){
        let thisClass = $(this).attr('class').split(" ");                    
        if(selector == thisClass[0]){
            $(this).attr('disabled',bool);
            return;
        }
    });
}
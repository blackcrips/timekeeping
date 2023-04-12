$(document).ready(function(){
    let tkeep_action = $('.tkeep_action');

    tkeep_action.each(function(index,element) {
       $(this).on('click',function(){
        let buttonAction = $(this).attr('class').split(' ');
            let static_tkeep = new TKeep_actions();
            static_tkeep.timekeepingAction(buttonAction[0]);
       }) 
    })
})
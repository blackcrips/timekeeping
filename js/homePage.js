$(document).ready(function(){
    let static_tkeep = new TKeep_actions();
    let tkeep_action = $('.tkeep_action');

    static_tkeep.getLastAction();
    
    tkeep_action.each(function(index,element) {
       $(this).on('click',function(){
        let buttonAction = $(this).attr('class').split(' ');
            static_tkeep.timekeepingAction(buttonAction[0]);
       }) 
    })
})
class TKeep_actions {
    documentLoading()
    {
        const loadingOverlay = document.createElement('div')
        loadingOverlay.setAttribute('class','upload_overlay');

        const overlayGif = document.createElement('img');
        overlayGif.setAttribute('src','./images/loading.gif');

        const inputHidden = document.createElement('button');
        inputHidden.id = 'input-message';
        inputHidden.innerHTML = 'Please wait.';

        return new Promise(resolve => {
            $('body').append(loadingOverlay);
            $('body').css('overflow','hidden');
            loadingOverlay.append(overlayGif);
            loadingOverlay.append(inputHidden);
            inputHidden.focus()
            resolve(
                'document loading'
            );
        });
    }

    getLastAction()
    {
        $.ajax(
            {
                url: "./includes/getLastAction.inc.php",
                success: function(data){
                    let selfCall = new TKeep_actions();
                    const btn_tKeepActions = $('.tkeep_action');
                    const filterData = data.replace(/"/g,""); 

                    if(filterData == 'No data'){
                        selfCall.setActiveButtonActions(3,btn_tKeepActions);
                    } else {
                        btn_tKeepActions.each(function(index,element){
                            let buttonClassName = $(this).attr('class').split(" ");
                            
                            if(buttonClassName[0] == filterData){
                                selfCall.setActiveButtonActions(index,btn_tKeepActions);
                            }
                        });
                    }
                }
            }
        )
    }

    setActiveButtonActions(index,buttons)
    {
        buttons.each(function(index2,element){
            if(index == 0){
                if(index == index2){
                    $(this).prop('disabled',false);
                }
            } else if(index == 1){
                if(index2 == 1 || index2 == 3){
                    $(this).prop('disabled',false);
                }
            } else if(index == 2){
                if(index2 == 2 || index2 == 3){
                    $(this).prop('disabled',false);
                }
            } else{
                if(index2 == 3){
                    $(this).prop('disabled',false);
                }
            }
        });
    }

    timekeepingAction(btn_action)
    {
        $.ajax(
            {
                url: "./includes/timekeepingAction.inc.php",
                method: "POST",
                data: {
                    'button-action': btn_action
                },
                success: function(data){
                    const filterData = data.replace(/"/g,""); 
                    
                    // if(filterData == "No data"){
                        console.log(data);
                    //     alert("Error processing your request please try again later");
                    //     location.href = "";
                    // } else {
                    //     const message1 = filterData + " processed time " + new Date().toLocaleDateString() + " " + new Date().toLocaleTimeString();
                    //     alert(message1);
                    //     location.href = "";
                    // }
                }
            }
        );
    }
}
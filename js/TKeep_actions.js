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
                    const filterData = data.replace(/"/g,""); 
                        console.log(filterData); // For checking of last action delete after solving the logic
                    const tkeep_actions = $('.tkeep_action');

                    tkeep_actions.each(function(index,element){
                        let buttonClassName = $(this).attr('class').split(" ");

                        if(buttonClassName[0] == filterData){
                            let selfCall = new TKeep_actions();
                            selfCall.setActiveButtonActions(index,tkeep_actions);
                        }
                    });


                }
            }
        )
    }

    setActiveButtonActions(index,buttons)
    {
        buttons.each(function(index2,element){
            if(index == 0) {
                if(index < index2){
                    $(this).prop('disabled',false);
                    $('.break_in').prop('disabled',true);
                }
            }else if(index == 1){
                if(index == index2){
                    $('.break_in').prop('disabled',false);
                    $('.time_out').prop('disabled',false);
                }
            }else if (index == 2){
                if(index == index2){
                    $('.time_out').prop('disabled',false);
                }
            } else {
                $(this).prop('disabled',false);
            }
        })
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
                    
                    if(filterData == "No data"){
                        alert("Error processing your request please try again later");
                        location.href = "";
                    } else {
                        const message1 = filterData + " processed time " + new Date().toLocaleDateString() + " " + new Date().toLocaleTimeString();
                        alert(message1);
                        location.href = "";
                    }
                }
            }
        );
    }
}
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
                    console.log(data);
                }
            }
        );
    }
}
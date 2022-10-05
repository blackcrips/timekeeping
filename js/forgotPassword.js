let validationMessage = $('#validation-message');


$('#submit').click(function(e)
{
    if($('#valid-email').val() == ''){
        e.preventDefault();
        validationMessage.html('Please enter a valid email');
    } else if(!validateEmail($('#valid-email').val())) {
        e.preventDefault();
        validationMessage.html('Please enter a valid email');
    } else {
        $('#form-login').submit();
    }
});

$('#return').click(function(e){
    e.preventDefault();
    window.location.href = './';
});

emptyValidationMessage();

function validateEmail($email)
{
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( $email );
}

function emptyValidationMessage()
{
    $('.elemInput').keydown(function(){
        validationMessage.html('');
    });
}
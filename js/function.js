
//alert('ok');

$('#sendReview').click(function(){
    console.log('function connected...');
    $('#quote_error_msg1').html('');
    $('#quote_error_msg1').hide();  
    $('.sent-message').hide();  

    $name = $('#name').val();
    $email = $('#email').val();
    $message = $('#message').val();
    
    if($name == ''){
        $('#name').focus();
        $msg = 'Please enter your name';
        $('#quote_error_msg1').html($msg);
        $('#quote_error_msg1').show();
    }else if($email == ''){
        $('#email').focus();
        $msg = 'Please enter email id';
        $('#quote_error_msg1').html($msg);
        $('#quote_error_msg1').show();
    }else if($message == ''){
        $('#message').focus();
        $msg = 'Please write message';
        $('#quote_error_msg1').html($msg);
        $('#quote_error_msg1').show();
    }else{
        $('.loading').show();
        console.log('call ajax function');
        $review_details = {
            name: $name,
            email: $email,
            message: $message
        }
        console.log($review_details)
        console.log(JSON.stringify($review_details))

        $.ajax({
            method: "POST",
            url: "studio/assets/php/function.php",
            data: { fn: "saveReview", review_details: $review_details }
        })
        .done(function( res ) {
            console.log(res);
            $res1 = JSON.parse(res);

            if($res1.status == true){
                $('.loading').hide();
                console.log('after save do Success steps');
                $('#name').val('');
                $('#email').val('');
                $('#message').val('');
                $('.sent-message').show();
            }else{
                console.log('after save do Failed steps');
            }
        });//end ajax

    }
});
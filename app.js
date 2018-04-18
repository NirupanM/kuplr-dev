

$(document).ready( function() {



$("#prospects_form").submit(function(e) {
    e.preventDefault();
    console.log("form");
});

    $("#emailsub").on("click", function() {

c_email = $('#emailsignup').val();
console.log("btn");


// c_phone = $('#phone_input').val();
// c_address = $('#address_input').val();

//items_cart = JSON.stringify(window.sessionStorage["items_cart"]);


/*$('#mail-message').val(('#mail-message').val()+productString);
*/ 


      $.ajax({
    url: "phpmailer-cs.php",
    type: "POST",
    data: {'email':c_email},
    success: function(data){
        console.log(data);

        //$("#email_confirmation_message").html(data);


    }
   });

    });


// c_name = $('#name_input').val();

//func close
//});

});
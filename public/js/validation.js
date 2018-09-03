$(document).ready(function () {


    /** validation for user sign up form**/
    $("#product_entry").validate({
        rules: {
            product_title: {
                required: true,
                minlength: 4
            }


        },
        messages: {
            product_title: {
                required: "Please enter name",
                minlength: "Full name should be min 4 chars"
            }
        }
    });
 





});

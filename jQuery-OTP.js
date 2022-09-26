$('document').ready(function() {
    var email_state = false;
    var login_state = false;

    $('#email').on('blur', function() {
        var email = $('#email').val();
        if (email == ''){
            email_state = false;
            return;
        }
        $.ajax({
            url: 'login1.php',
            type: 'post',
            data: {
                'email_check': 1,
                'email': email
            },
            success: function(response){
                if (response == 'taken') {
                    email_state = false;
                    $('#email').parent().removeClass();
                    $('#email').parent().addClass('form_error');
                    $('#email').siblings("span").text("Sorry... Email already taken");
                }else if (response == "not_taken") {
                    email_state = true;
                    $('#email').parent().removeClass();
                    $('#email').parent().addClass('form_error');
                    $('#email').siblings("span").text("Email available");
                }
            }
        })
    })

    $('#Login').on('blur', function() {
        var login = $('#Login').val();
        if (login == ''){
            login_state = false;
            return;
        }
        $.ajax({
            url: 'login1.php',
            type: 'post',
            data: {
                'login_check': 1,
                'login': login
            },
            success: function(response){
                if (response == 'taken') {
                    login_state = false;
                    $('#login').parent().removeClass();
                    $('#login').parent().addClass('form_error');
                    $('#login').siblings("span").text("Login available");
                }else if (response == "not_taken") {
                    login_state = true;
                    $('#login').parent().removeClass();
                    $('#login').parent().addClass('form_error');
                    $('#login').siblings("span").text("Login available");
                }
            }
        })
    })

    $('#reg_btn').on("click", function() {
        var email = $("#email").val();
        var login = $("#Login").val();
        if (email_state == false || login_state == false) {
            $("#error_msg").text("Fix the errors in the form first");
        } else {
            $.ajax({
                url: 'login1.php',
                type: post,
                data: {
                    'save': 1,
                    'email': email,
                    'login': login
                },
                success: function(response) {
                    alert('Ok Done !');
                    $('#email').val('');
                    $('#login').val('');
                }
            })
        }
    })


})
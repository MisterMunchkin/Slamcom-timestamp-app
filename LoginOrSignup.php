<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>


    <!-- Bootstrap Core CSS -->
    <link href="HomePageBootStrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="HomePageBootStrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="HomePageBootStrap/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="HomePageBootStrap/css/creative.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="HomePageBootStrap/css/manipulate.css" rel="stylesheet">


</head>

<body id="page-top">



    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Welcome to Slamcom!</h1>
                <hr>

                <div class="form-div">
                    <div class="signIn-div" id="DivLogin">
                        <h2 class="section-heading">Login</h2>
                        <hr class="light">
                        <form action="LoginBackground.php" method="post" id="login_Form">
                            <div class="form-group">
                                <input class="form-control" id="LoginEmail" placeholder="email address" name="txt_loginEmail" type="email" autofocus required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="LoginPassword" placeholder="password" name="txt_loginPassword" type="password" required>

                            </div>
                            <div class="form-group">
                                <input id="btnLogin" type="submit" class="btn btn-primary btn-xl page-scroll" value="Login">
                                <!--<button id="btnLogout" class="btn btn-primary btn-cl page-scroll hide">
                                    Log out
                                </button>-->
                            </div>
                        </form>
                        <div class="form-group" id="divLoginError" style="display: none;">
                            <p id="LoginErrorAlert" aria-atomic="true" role="alert">
                                The email or password you entered does not belong to an account
                                please check your input.
                            </p>
                        </div>
                        <div class="form-group" id="divFillFields" style="display: none;">
                            <p id="FillFields" aria-atomic="true" role="alert">
                                Please fill out required fields.
                            </p>
                        </div>
                        <div class="form-group">
                            <a  id="LoginNoAccount" href="#" >Don't have an account? </a>
                            <a href="#">||</a>
                            <a id="forgotPassword" href="forgotpassword.html"> Forgot?</a>
                        </div>
                    </div>
                </div>

                <div class="signIn-div" id="DivSignUp" style="display:none;">
                    <h2 class="section-heading">Don't have an account? Sign up</h2>
                    <hr class="light">
                    <div class="form-div">
                        <div class="signUp-div">
                            <form action="signUpBackground.php" method="post" id="signUp_Form">
                                <div class="form-group">
                                    <input class="form-control" id="signUpFirstName" placeholder="first name" name="txt_firstname" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="signUpLastName" placeholder="last name" name="txt_lastname" type="text" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="signUpEmail" placeholder="email address" name="txt_signUpEmail" type="email" required>
                                </div>
                                <div class="form-group" id="signUpPasswordPadding">

                                    <input class="form-control" id="signUpPassword" placeholder="password" name="txt_signUpPassword" type="password" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="signUpConfPassword" placeholder="confirm password" name="txt_userconfpassword" type="password" required>
                                </div>
                                <div class="form-group">
                                    <!--<a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Sign Up!</a>
                                    <button id="btnSignup" class="btn btn-primary btn-xl page-scroll">
                                        Sign Up!
                                    </button>
                                    -->
                                    <input id="btnSignup" type="submit" class="btn btn-primary btn-xl page-scroll" value="Sign Up">
                                </div>
                            </form>
                            <div class="divErrorSignUp" id="divFillFieldsSignUp" style="display: none;">
                                <p id="FillFieldsSignUp" aria-atomic="true" role="alert">
                                    Please fill out required fields.
                                </p>
                            </div>
                            <div class="divErrorSignUp" id="divErrorConfPassword" style="display:none;">
                                <p id="PasswordConfErrorSignUp" aria-atomic="true" role="alert">
                                    Please make sure password confirmation is true.
                                </p>
                            </div>
                            <div class="divErrorSignUp" id="divPasswordLength" style="display:none;">
                                <p id="PasswordLength" aria-atomic="true" role="alert">

                                    Please make sure password is inbetween 6-20 characters with atleast 1 number.

                                </p>
                            </div>
                            <div class="form-group">
                                <a id="signUpHasAcc" href="#">Already have an account?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <script src="HomePageBootStrap/vendor/jquery/jquery.min.js"></script>
    <!-- FIRE BASE -->



    <script src="HomePageBootStrap/js/app.js"></script>

    <script>
        $(document).ready(function(){



            var txtLoginEmail = $('#LoginEmail');
            var txtLoginPassword = $('#LoginPassword');
            var btnLogin = $('#btnLogin');
            var btnLogout = $('#btnLogout');
            var btnLoginNoAccount = $('#LoginNoAccount');

            //toggle between login and signup
            $("#LoginNoAccount").click(function(){
                $("div#DivLogin").toggle("fast",function(){
                        $("div#DivSignUp").toggle("fast");
                });
                $("#MainHeaderLogin").fadeOut("fast",function(){
                    $('#LoginEmail').val("");
                    $('#LoginPassword').val("");
                    $("#MainHeaderSignUp").fadeIn("fast");
                });
            });
            $("#signUpHasAcc").click(function(){
                $("div#DivLogin").toggle("fast",function(){
                    $("div#DivSignUp").toggle("fast");
                });
                $("#MainHeaderSignUp").fadeOut("fast",function(){
                    $("#signUpEmail").val("");
                    $("#signUpPassword").val("");
                    $("#signUpConfPassword").val("");
                    $("#MainHeaderLogin").fadeIn("fast");
                });
            });

            //validate email
            function validateEmail($email){
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,6})?$/;

                return ($email.length > 0 && emailReg.test($email));
            }
            $("#signUpEmail").keyup(function(){
                if(!validateEmail($("#signUpEmail").val())){
                    $("#signUpEmail").css('border-color', 'red');
                    $("#signUpEmail").css('border-width', '2px');
                }else{
                    $("#signUpEmail").css('border-color', 'green');
                }
            });

            //validate length of password

            function validatePassword($password){
                var passwordReg = /^(?=.*\d)(?=.*[a-zA-Z]).{6,20}$/;

                return ($password.length > 0 && passwordReg.test($password));
            }
            $("#signUpPassword").keyup(function(){
                if(!validatePassword($("#signUpPassword").val())){

                    $("#signUpPassword").css('border-color', 'red');
                    $("#signUpPassword").css('border-width', '2px');
                }else{
                    $("#signUpPassword").css('border-color', 'green');
                }
            });

            //password confirmation
            $("#signUpConfPassword").keyup(function(){
                if($("#signUpConfPassword").val() == $("#signUpPassword").val()){
                    $("#signUpConfPassword").css('border-color','green');
                    $("#signUpConfPassword").css('border-width', '2px');
                }else{
                    $("#signUpConfPassword").css('border-color','red');
                    $("#signUpConfPassword").css('border-width', '2px');
                }
            });

            //click event for sign up



            $('#login_Form').submit(function(){

                if(txtLoginEmail.val() && txtLoginPassword.val()){
                    $.ajax(
                        $(this).attr('action'),
                        {
                            data: $(this).serialize(),
                            method: $(this).attr('method'),
                            success: function(){
                                console.log("user logged in");
                            },
                            error: function(){
                                alert("something went wrong");
                            }
                        }
                    );
                }else{
                    $("div#divLoginError").fadeOut("fast",function(){
                        $("div#divFillFields").fadeIn("fast");
                    });
                    if(txtLoginEmail.val() == ''){
                        $("#LoginEmail").css('border-color','red');
                    }
                    if(txtLoginPassword.val() == ''){
                        $("#LoginPassword").css('border-color','red');
                    }
                }
            });

            $("#signUp_Formp").submit(function(){
                var self = this;

                var txtSignUpEmail = $("#signUpEmail").val();
                var txtSignUpPassword = $("#signUpPassword").val();
                var txtSignUpConfPassword = $("#signUpConfPassword").val();

                var txtSignUpFirstName = $("#signUpFirstName").val();
                var txtSignUpLastName = $("#signUpLastName").val();

                if(txtSignUpEmail.val() && txtSignUpPassword.val() && txtSignUpConfPassword.val()){
                    if(txtSignUpPassword.val().length < 6){
                        $("div#divPasswordLength").fadeIn("fast",function(){
                            $("div#divFillFieldsSignUp").fadeOut("fast");
                            $("div#divErrorConfPassword").fadeOut("fast");
                        });
                    }else{
                        if(txtSignUpPassword.val() != txtSignUpConfPassword.val()){
                            $("div#divErrorConfPassword").fadeIn("fast",function(){
                                $("div#divFillFieldsSignUp").fadeOut("fast");
                                $("div#divPasswordLength").fadeOut("fast");
                            });
                        }else{
                            //create new user
                            var dataString = 'txt_firstname=' + txtSignUpFirstName
                                                +'&txt_lastname=' + txtSignUpLastName
                                                +'&txt_signUpEmail=' + txtSignUpEmail
                                                +'&txt_signUpPassword=' + txtSignUpPassword;

                            $.ajax(
                                $(this).attr('action'),
                                {
                                    data: $(self).serialize(),
                                    method: $(self).attr('method'),
                                    success: function(){
                                        console.log("user logged in");
                                    },
                                    error: function(){
                                        alert("something went wrong");
                                    }
                                }
                            );
                        }
                    }
                }else{
                    $("div#divFillFieldsSignUp").fadeIn("fast",function(){
                        $("div#divErrorConfPassword").fadeOut("fast");
                        $("div#divPasswordLength").fadeOut("fast");
                    });
                }
            });


        });
    </script>


    <!-- jQuery -->


    <!-- Bootstrap Core JavaScript -->
    <script src="HomePageBootStrap/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="HomePageBootStrap/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="HomePageBootStrap/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="HomePageBootStrap/js/creative.min.js"></script>

</body>

</html>

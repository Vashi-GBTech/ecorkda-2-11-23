<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@700&family=Figtree:wght@700&display=swap"
        rel="stylesheet">
</head>


<style>
    .login-body {
        display: flex;
        /* width: 100vw; */
        height: 100vh;
        background-color: black;
    }

    .login-container {
        width: 50%;
        height: 100%;
        background-color: #24242c;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 15px;
    }

    .pic {
        width: 50%;
        height: 100%;
        overflow: hidden;
        background-image: url("assets/ecovis-images/login.jpg");
        background-size: cover;
        background-position: center;
    }

    .inp {
        width: 350px;
        height: 50px;
        max-height: 50px;
        min-height: 50px;
        display: flex;
        align-items: center;
        position: relative;
    }

    /* .inp label {
        position: absolute;
        left: 20px;
        color: #777780;
        height: 20px;
        transform: translateY(2.5px);
        padding-left: 5px;
        cursor: text;
        padding-right: 5px;
        transition: .2s;
        font-family: Arial, Helvetica, sans-serif;
    } */

    .inp .inputs {
        width: 100%;
        height: 100%;
        background-color: transparent;
        border: 2px solid #494954;
        border-radius: 10px;
        outline: none;
        transition: .4s;
        color: #fff;
        padding-left: 20px;
        padding-right: 20px;
        font-size: 15px;
    }

    .login-body .inputs:focus {
        border: 2px solid #1f1fff;
        box-shadow: #6767ff 0px 1px 1px, #6767ff 0px 0px 0px 1px;
    }

    .login-body .inputs:focus+label {
        left: 20px;
        transform: translateY(-22px);
        font-size: 12px;
        background-color: #24242c;
    }

    .up {
        left: 20px;
        transform: translateY(-22px);
        font-size: 12px;
        background-color: #24242c;
    }

    .login-body button {
        width: 350px;
        height: 50px;
        min-height: 50px;
        max-height: 50px;
        background-color: #2020db;
        border: 2px solid #1f1fff;
        border-radius: 50px;
        outline: none;
        transition: .4s;
        color: #fff;
        padding-left: 20px;
        padding-right: 20px;
        font-size: 15px;
        cursor: pointer;
        font-family: 'Figtree', sans-serif;
    }

    .login-body button:hover {
        background-color: #1717c2;
        border: 2px solid #1717c2;
    }

    .login-body h3 {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-family: 'Figtree', sans-serif;
        color: #fff;
        margin-bottom: 20px;
    }

    .login-body a {
        color: white !important;
        text-decoration: none;
        font-size: 12px;
        font-family: 'Figtree', sans-serif;
    }

    .login-body a:hover {
        text-decoration: underline;
    }

    .login-body img {
        width: 70px;
        border-radius: 10px;
        border: 1px solid #494954;
    }

    @media only screen and (max-width: 750px) {
        .pic {
            display: none;
        }

        .login-container {
            width: 100%;
        }
    }

    @media only screen and (max-height: 450px) {
        .pic {
            display: none;
        }

        .login-container {
            width: 100%;
        }

        .login-body {
            padding-bottom: 10px;
            overflow: scroll;
            height: 100%;
        }



    }

    .login-img {
        padding: 10px 5px;

    }
</style>

<body>
    <?php include_once "header.php" ?>
    <div class='login-body' id='login'>
        <div class="login-container col-md-6">

            <img class='login-img' src="<?= base_url() ?>assets/ecovis-images/rkda-logo.png" alt="">
            <h3 class='mt-0'>Log in To Continue</h3>
            <div class="inp">
                <input type="text" id="username" class="inputs" placeholder='E-mail / Mobile'>
                <!-- <label onclick="focusinp('usr')" for="Username">E-mail / Mobile</label> -->
            </div>
            <div class="inp">
                <input type="password" id="password" class="inputs" placeholder="Password">
                <!-- <label onclick="focusinp('pass')" for="Password">Password</label> -->
            </div>
            <div style="display: flex;"><a href="">Forgot Password? - Support</a></div>
            <button type="submit">Login</button>
            <div onclick="myFunction('reg')"> <a href="#">Dont have a account? Sign up</a></div>
        </div>
        <div class="pic col-md-6">
        </div>
    </div>
    <form id="register-form">
        <div class='login-body' id='register' style='display:none'>

            <div class="login-container col-md-6">
                <img class='login-img' src="<?= base_url() ?>assets/ecovis-images/rkda-logo.png" alt="">
                <h3 class='mt-0'>SignUp in To Continue</h3>
                <div class="inp">
                    <input type="text" id="email" class="inputs" placeholder="E-mail" onclick="focusinp('usr')">
                </div>
                <div class="inp">
                    <input type="text" id="mob_num" class="inputs" placeholder="Mobile Number"
                        onclick="focusinp('mob_num')">
                </div>
                <div class="inp password-div"  style="display:none">
                    <input type="password" id="reg-password" class="inputs" placeholder="One Time Password">
                </div>
                <div class='container' style='width: 75%;color: white;font-size: 10px;'>
                    <div class=" d-flex align-items-baseline">

                        <input type="checkbox" value="" id="exampleCheckbox" required>
                        <label class="px-1" for="exampleCheckbox">
                            T & C
                        </label>

                    </div>
                </div>
                 
                <button type="submit" class="sent-otp-btn">Sent Otp</button>
                <button type="button" style="display:none" class="reg-btn" >Sign Up</button>
                <div onclick="myFunction('login')"><a href="#">Already have a account? Sign In</a></div>

            </div>


            <div class="pic col-md-6">
            </div>
        </div>
    </form>



    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const inputs = document.querySelectorAll(".inp input");

            inputs.forEach(input => {
                input.addEventListener("input", function () {
                    const label = this.nextElementSibling;
                    // label.classList.toggle("up", this.value.trim() !== "");
                });
            });
        });

        function focusinp(inp) {
            if (inp == 'usr') {
                document.getElementById("username").focus();
            } else if (inp == 'pass') {
                document.getElementById("password").focus();
            } else {
                document.getElementById("mob_num").focus();
            }
        }


        function myFunction(type) {
            console.log('sdbhksvb', type);
            if (type == 'reg') {
                $('#register').show();
                $('#login').hide();
            } else {
                $('#register').hide();
                $('#login').show();
            }
        }

        $('#register-form').submit(function (event) {
            event.preventDefault();
            console.log('clicked on submit');
            var email = $('#email').val();
            var mobile = $('#mob_num').val();
            var password = $('#reg-password').val();
            var checkbox = $('#exampleCheckbox');

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var mobileRegex = /^\d{10}$/;

            if (!emailRegex.test(email) || !mobileRegex.test(mobile) || password.trim() === '' || !checkbox.is(':checked')) {
                console.log('inside if');
                $('#email').toggleClass('is-invalid', !emailRegex.test(email));
                $('#mobile').toggleClass('is-invalid', !mobileRegex.test(mobile));
                return false;
            } else {
               let formdatas={email, mobile,password,T_C:checkbox[0].checked}
               let formdata = new FormData();
                    formdata.set('email', email);
                    formdata.set('phone_number', mobile);
                    formdata.set('T_C', checkbox[0].checked);
                    // formdata.set('password', password);
                    $.ajax({
                        url     : baseUrl+"Welcome/getOtp",
                        method  : "POST",
                        data    : formdata,
                        dataType: 'json',
                        cache   : false,
                        contentType: false,
                        processData: false,
                        success: function (success) {
                            if (success.status === 200) {
                               console.log(" success ", success);
                               $('.password-div').show();
                               $('.reg-btn').show();
                               $('.sent-otp-btn').hide();
                               localStorage.setItem('otp',success.otp);
                            } else {
                                $('.password-div').hide();
                                $('.reg-btn').hide();
                               $('.sent-otp-btn').show();
                                console.log(" failed ", success);
                            }
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });

                console.log('all set',formdatas,);
               
            }
        })


        $('.reg-btn').click(function () {
            var password = $('#reg-password').val();
            // console.log(fdata);
          const otp=  localStorage.getItem('otp');
            if (otp == password) {
                // alert("sign up successfully...!");
                $('#email, #mobile').removeClass('is-invalid');
                window.location.href = '<?= base_url() ?>';
                localStorage.setItem('isLoggedIn', 'true');
            }
            
        })
    </script>
</body>

</html>
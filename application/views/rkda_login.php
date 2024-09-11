<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
</head>
<style>
    .wrapper {  
  /* margin-top: 80px; */
  margin-bottom: 45px;
 
}
body{
    /* overflow-y:hidden; */
}

.form-signin {
    /* width: 56%;
    max-width: 600px; */

  /* margin: 0 auto; */
  /* background-color: #fff; */
  /* border-top: 1px solid rgba(0,0,0,0.08);
  border-right: 1px solid rgba(0,0,0,0.1);
  border-bottom: 1px solid rgba(0,0,0,0.12);
  border-left: 1px solid rgba(0,0,0,0.08);
  box-shadow: 0 3rem 5rem -2rem rgba(0, 0, 0, 0.2); */
}

.form-control {
  font-size: 16px;
  padding: 10px;
  box-sizing: border-box;
  height: auto;
  border-radius: 1px;
}
/* enable absolute positioning */
.inner-addon { 
    position: relative; 
}

/* style icon */
.inner-addon .glyphicon {
  position: absolute;
  top: 25px;
  padding: 5px 18px 8px 20px;
  background-color: rgb(0 0 0 / 13%);
  pointer-events: none;
  border-right: 1px solid rgba(0,0,0,0.1);

}

/* align icon */
.left-addon .glyphicon  { left:  0px;}

/* add padding  */
.left-addon input  { padding-left:  65px; }

.form-signin input['text'],.form-signin input['password']{
  margin-bottom:15px;
  height:44px;
}

.form-signin .forgot-password {
  display: block;
  padding-top:2px;
  padding-bottom:2px;
  margin-top:-8px;
  margin-bottom:30px;
  font-size:12px;
}

.account-signup {
  /* max-width: 380px;
  padding: 15px 35px;
  margin: 0 auto;
  background-color: rgba(0,0,0,0.1); */
  text-align:center;
  color:black !important;
}
.account-signup a{
    color:#c61431 !important;
    font-weight:bold;
}
.login-btn:hover{
    background: white !important;
    color: #c61431 !important;
    border: none !important;
}
.login-btn{
    color: white !important;
    background: #c61431 !important;
    border: none !important;
}
#signin h2{
   font-family: monospace;
   /* font-size:90px !important; */
   font-weight: 500 !important;
    /* line-height: 90px !important; */
}
.form-control {
    /* border-radius: 20px !important; */
}
.form-control, .input-group-text {
    border-color:crimson !important;
}
.form-control:focus{

    box-shadow: 0 0 0 0.20rem rgb(213 49 64 / 34%) !important;
}
.password-wrapper {
    position: relative;
}
.password-wrapper .toggle-password {
    position: absolute;
    right: 10px;
    top: 69%;
    transform: translateY(-50%);
    cursor: pointer;
}
.toggle-password svg {
    display: none;
}
.toggle-password svg.active {
    display: block;
}

#signin .left {
    background:#b6b8bb;
    height: 90vh;
    display: flex; 
    flex-direction: column;
    justify-content: center;
    border-radius: 0px 175px 0px 0px;
    flex: 1;
    min-width: 350px;
    padding: 2rem;
    box-sizing: border-box;
    padding: 2rem clamp(2rem, 10vw, 14rem);
}
.right {
    display: flex;
    justify-content: center;
    align-items: center;
    flex: 2;
    min-width: 350px;
    padding: 2rem;
}
.right img {
    width: clamp(35vw, 400px, 100%);
}
</style>
<?php include_once "navbar.php" ?>
<body>
<section id='signin'  style="margin-top: 8.5rem;">
    <div style='display: flex; flex-direction: row-reverse; flex-wrap: wrap; gap: 1rem' >
        
        <div class="right">
            <img src="<?= base_url() ?>assets/rkda/about-rkda.png" alt="signin">
        </div>

            <div class="left">
                <div class="top">
                    <h4 class=' text-dark '>Welcome Back, </h4>
                    <h6 class='  text-dark'>Connect & Expand Your Practice Worldwide.</h6>
                </div>

                <form class="form-signin">
                    <div class=" my-3">
                        <label class="control-label">Email</label>
                        
                            <input type="text" class="form-control" name="site" placeholder="yourdomain.com" required="" autofocus=""/>
                        </div>
                        <div class="form-group password-wrapper">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                            <span class="toggle-password">
                                <i class="fa fa-eye"></i>
                            </span>
                        </div>
                        <div class="options d-flex justify-content-between ">
                        <div >
                            <input type="checkbox">  <label class=""> Remember me</label>
                        </div> 
                        <a href="#" class="text-dark">Forgot Password?</a>
                    </div>
    
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-sm w-50 mt-3 py-2 login-btn" type="submit">LOGIN</button>
                    </div> 
                    <p class="account-signup mt-2">Don't have an account? <a href="<?= base_url() ?>signUp">Sign up</a>
                </form>
                <!-- <div class='d-flex justify-content-center'>
                    <div class='col-md-7'>
                        <h4 class=' text-dark '>Welcome Back, </h4>
                        <h6 class='  text-dark'>Connect & Expand Your Practice Worldwide.</h6>

                    </div>
               
                </div> -->
                
                <!-- <h2>SIGN IN</h2> -->
      
                <!-- <div class="wrapper d-flex justify-content-center">
                    <form class="form-signin">
                        

                        <div class=" my-3">
                        <label class="control-label">Email</label>
                        
                            <input type="text" class="form-control" name="site" placeholder="yourdomain.com" required="" autofocus=""/>
                        </div>
                        <div class="form-group password-wrapper">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                            <span class="toggle-password">
                                <i class="fa fa-eye"></i>
                            </span>
                        </div>
                        <div class="options d-flex justify-content-between ">
                    <div >
                    <input type="checkbox">  <label class=""> Remember me</label>
                    </div> 
                        <a href="#" class="text-dark">Forgot Password?</a>
                        </div>
    
                    <div class="d-flex justify-content-center">
                    <button class="btn btn-sm w-50 mt-3 py-2 login-btn" type="submit">LOGIN</button>
                    </div> 
                    <p class="account-signup mt-2">Don't have an account? <a href="<?= base_url() ?>signUp">Sign up</a>
                    </form>
                
                </div> -->
            </div>
        <!-- <div class="col-md-7 d-flex justify-content-center">
            <div class="col-md-7 d-flex justify-content-center align-items-center">
                <img src="<?= base_url() ?>assets/rkda/about-rkda.png" alt="signin" style='width: 90%; '>
             
            </div>
        </div> -->
    </div>

    
    <?php include_once "new_footer.php" ?>
    
</section>



    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script> -->

  <script>
    $(document).ready(function() {
            $(".toggle-password").click(function() {
                let input = $("#password");
                let icon = $(this).find("i");
                if (input.attr("type") === "password") {
                    input.attr("type", "text");
                    icon.removeClass("fa-eye").addClass("fa-eye-slash");
                } else {
                    input.attr("type", "password");
                    icon.removeClass("fa-eye-slash").addClass("fa-eye");
                }
            });
        });
  </script>
  
</body>

</html>
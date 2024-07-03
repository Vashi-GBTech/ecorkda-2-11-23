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
    overflow-y:hidden;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
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
  color:white !important;
}
.account-signup a{
    color:#c61431 !important;
}
.login-btn{
    background: white !important;
    color: #c61431 !important;
    border: none !important;
}
.login-btn:hover{
    color: white !important;
    background: #c61431 !important;
}
#signin h2{
   font-family: monospace;
   /* font-size:90px !important; */
   font-weight: 500 !important;
    /* line-height: 90px !important; */
}
</style>
<?php include_once "navbar.php" ?>
<body>
<section id='signin'>
    <div class='d-flex' >
        <div class="col-md-4" style='    background:#b6b8bb;' >
            <div class="col-md-12 pt-5 ">
                <div class='d-flex justify-content-center'  >
                <div class='col-md-7'>
                <h4 class=' text-white '>Are you a professional?</h4>
                <h6 class='  text-white'>Join us to expand your practice worldwide</h6>

                </div>
               
                </div>
                
                <!-- <h2>SIGN IN</h2> -->
      
                <div class="wrapper">
                <form class="form-signin">
                    <h2 class="form-signin-heading text-center text-white">SIGN IN</h2>

                    <div class="inner-addon left-addon">
                    <label class="control-label"></label>
                        <i class="glyphicon"><i class="fas fa-user text-white"></i></i>
                        <input type="text" class="form-control" name="site" placeholder="yourdomain.com" required="" autofocus=""/>
                    </div>
                    <div class="inner-addon left-addon">
                    <label class="control-label"></label>
                        <i class="glyphicon "><i class="fas fa-lock text-light"></i></i>
                        <input type="password" class="form-control" name="password" placeholder="*******" required="" autofocus=""/>
                    </div>
                    <div class="options d-flex justify-content-between mt-2">
                  <div >
                   <input type="checkbox">  <label class="text-white"> Remember me</label>
                  </div> 
                    <a href="#" class="text-white">Forgot Password?</a>
                    </div>
 
                    <button class="btn btn-lg w-100 mt-3 login-btn" type="submit">LOGIN</button>
                </form>
                <p class="account-signup">Don't have an account? <a href="#">Sign up here</a>
                </div>
            </div>
        </div>
        <div class="col-md-8 d-flex justify-content-center">
            <div class="col-md-7 d-flex justify-content-center align-items-baseline">
                <img src="<?= base_url() ?>assets/rkda/signin1.jpg" alt="signin" style='width: 90%; '>
            </div>
        </div>
    </div>
</section>

    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
</body>
</html>
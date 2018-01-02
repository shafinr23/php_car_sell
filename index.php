<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="login.php" method="POST">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control"  name="Uname" placeholder="username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="pass"  placeholder="pass" required="" />
              </div>
              <div>

              <div>
                 <input type="submit" class="btn btn-default submit" value="Log in" >
                 <fb:login-button 
                    scope="public_profile,email"
                    onlogin="checkLoginState();">
                  </fb:login-button>
              </div>
                
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="reg.php" method="POST" enctype="multipart/form-data" >
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" name="UName" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" name="UMail" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="pass" placeholder="Password" required="" />
              </div>
              <div>
                <input type="file" class="form-control" name="file" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" name="submit" class="btn btn-default">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>
                  <fb:login-button 
                    scope="public_profile,email"
                    onlogin="checkLoginState();">
                  </fb:login-button>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
<!-- <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div> -->


<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1522915417820038',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.11'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });



function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
</script>
  </body>
</html>

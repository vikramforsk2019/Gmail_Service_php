<?php require_once('settings.php');
?>
<?php include 'con.php';?>
<?php
  session_start();

if (isset($_SESSION['room']))
 {
        /// your code here
header("Location:profile.php");

exit();
    }
else

{
?>
<!DOCTYPE html>
<html>
<head>

  <title>rooms Login & Register Forms</title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Flat Login & Register Forms" />
    <script type="application/x-javascript"> 
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
    function hideURLbar(){ window.scrollTo(0,1); } 
    </script>

  <link rel="stylesheet" href="login2/css/style.css" type="text/css" media="all" />
 <link rel="shortcut icon" type="image/x-icon"  href="admin/img/house.png">
  <link rel="stylesheet" type="text/css" href="vendor/rahul.css">
    
    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">

     <script>
       function f1() {
  var letters = /^[A-Za-z]+$/;
    var digits = /^[0-9]+$/;
  if(document.form1.fname.value.match(letters))
  {
        if(document.form1.lname.value.match(letters))
       {
                var x = document.forms['form1']['email'].value;
              var atpos = x.indexOf('@');
              var dotpos = x.lastIndexOf('.');
              if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
                 {
                      alert("Not a valid e-mail address");
                      return false;
                  }
               else{
           var contact_len = document.form1.phone.value.length;
           if(document.form1.phone.value.match(digits) && contact_len == 10)
           {
               return true;
           }
            else{
                      alert("contact number is not valid");
                      return false;
                }
                   }
       }
       else
       {
           alert("Last name must have alphabets only"); 
           return false;
       }
  }
  else
  {
  alert("First name must have alphabets only"); 
  return false;
  }
}
        
    </script>
  
</head>

<body>

  <h1>Rooms LOGIN & REGISTER FORMS</h1>

  <div class="container w3layouts agileits">

    <div class="login w3layouts">
      <form action="logincheck.php" method="post">
        <label>Email</label>
        <input type="email" class="user" name="email" placeholder="Email" required="">
        <label>Password</label>
        <input type="password" class="pass" name="password" placeholder="Password" required="">
      <ul>
        <li>
          <input type="checkbox" id="brand1" value="">
          <label for="brand1"><span></span>Remember me</label>
        </li>
      </ul>
      <input type="submit" value="LOGIN"></form>
      <div class="clear"></div>
    </div>

    <div class="social agileits">
      <h5>Or Login with</h5>
      <ul class="social-icons">
        <li><a  id="login-button" href="<?= 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>"    class="googleplus"     class="googleplus"></a></li>
        <li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
        <li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
        
      </ul>
      <div class="clear"></div>
    </div>

    <div class="reg w3l aits">

     
    <a href="recover.php"><h3>Forgot Password</h3></a>
      <a class="popup-with-zoom-anim hvr-underline-from-left" href="#small-dialog">Register Here</a>
      <div class="clear"></div>

      
      <div id="popup w3l">
        <div id="small-dialog" class="mfp-hide aits">
          <div class="pop_up agileits">
            <div class="register w3layouts">
              <form action="mailing.php" method="post" name="form1" onsubmit="return f1();">
                <label>First Name</label>
                <input type="text" name="fname" placeholder="First Name" required="">
                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Last Name" required="">
                <label>Email</label>
                <input type="text" name="email" placeholder="Email" required="">
                <label>Password</label>
                <input type="password" name="pass" placeholder="Password" required="">
                 <div class="send-button">
                  <input type="submit" value="REGISTER">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <button title="Close (Esc)" type="button" class="mfp-close w3layouts"> X </button>
      

    </div>

  </div>

  <div class="footer">
    <p> &copy; Rooms Flat Login & Register Forms</p>
  </div>

    <script src="login2/js/jquery-2.1.4.min.js"></script>
      <script src="login2/js/jquery.magnific-popup.js" type="text/javascript"></script>
 <script>
				$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});
				});
			</script>
    <div id="loader-wrapper">
        <div id="preloader_1">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
              </div>
      </div>
   <script type="text/javascript" src="vendor/theme.js"></script>
  
</body>
</html>
<? }?>


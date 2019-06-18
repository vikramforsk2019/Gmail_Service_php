<?
$n=4; 
function getName($n) { 
    $characters = '123456789ABCDEFGHIJKLMNOPQURSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
  
 
$p=getName($n);


    $p1=$_POST['fname'];
    $p2=$_POST['lname'];
    $mailto = $_POST['email'];
    $p3=$_POST['pass'];
   
$mailSub="please verify your account";
$mailMsg=$p;
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "roomseeker98@gmail.com";
   $mail ->Password = "lifechanger";
   $mail ->SetFrom("roomseeker98@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
     header("Location:login.php");
   }
   else
   {
       echo "Mail Sent successfully";
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Processing Running Please Wait...</title>
	<meta charset="UTF-8">
	   <meta name="keywords" content="Find Your Ideal Rooms,Hostels and Flats In kota">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="detail/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="detail/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="detail/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="detail/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="detail/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="detail/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="detail/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="detail/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="detail/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="detail/css/util.css">
	<link rel="stylesheet" type="text/css" href="detail/css/main.css">
<link rel="shortcut icon" type="image/x-icon"  href="admin/img/house.png">
 
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action="register.php" method="post" name="form1">
					<span class="login100-form-title p-b-33">
						Please Enter Otp
					</span>
            <input type="hidden" name="otp" value="<?= $p ?>" />
            <input type="hidden" name="fname" value="<?= $p1 ?>" />
            <input type="hidden" name="lname" value="<?= $p2 ?>" />
            <input type="hidden" name="email" value="<?= $mailto  ?>" />
            <input type="hidden" name="pass" value="<?= $p3 ?>" />
                     <? echo "Time left"?>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="time">
						
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="verify" placeholder="Enter Otp here...">
						
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" value="submit">
							Submit Otp
						</button>
					</div>

					<br><br>

					<div class="text-center">
						<span class="txt1">
						Please Don't Refresh Pgae..
						</span>

					</div>
				</form>
			</div>
		</div>
	</div>
	

	
    <script type="text/javascript">
        var a = 120;
        var t;
        function f1()
        {
            document.form1.time.value=a;
            if(a==0)
            {
                window.location.href='login.php';
            }
            a=a-1;

            t = setTimeout("f1()",1000)
        }
        f1();
    </script>

</body>
</html>

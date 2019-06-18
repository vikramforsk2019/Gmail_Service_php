<?php include 'con.php';?>
<?php
require_once('settings.php');
require_once('google-login-api.php');

// Google passes a parameter 'code' in the Redirect Url
session_start();
if(isset($_GET['code'])) {
	try {
		$gapi = new GoogleLoginApi();
		
		// Get the access token 
		$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
		
		// Get user information
		$user_info = $gapi->GetUserProfileInfo($data['access_token']);
////////////////////////
		session_start();
$m1=$user_info['name'];
$email=$user_info['email'];
$pass=$user_info['id'];
//$pic=$user_info['picture'];
$pic="user-thumb.jpg";
if($email!=null&&$pass!=null)
{

//Execute the query

mysqli_query($conn,"INSERT INTO profile(name,email,password,pic)
				VALUES('$m1','$email','$pass','$pic')");
$_SESSION['room'] = $email;
echo "insert data successfully";
header("Location:profile.php");

}
else
{
header("Location:login.php");

//echo "wrong send in login page using location";
}

	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}
?>

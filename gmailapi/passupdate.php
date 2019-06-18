<?php include 'con.php';?>
<? 

$p1=$_POST['verify1'];
$email=$_POST['email'];
$p2=$_POST['verify'];

if($p1==$p2)
{
$sql = "SELECT name,lname,pic FROM profile where email='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
 // output data of each row
    while($row = $result->fetch_assoc())
    {   
        $k1=$row["name"];
        $k2=$row["lname"];
         $p5=$row["pic"];
       }
}
else
{
header("Location:login.php");
echo "database empty";

}
}


else
{
header("Location:login.php");
echo "wrong otp empty";
}
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="vf" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<style type="text/css">
		.round
		{
			height: 90px !important;
			width: 90px !important;
			border-radius: 50px !important;
		}
		
	</style>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="detail/css1/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="detail/css1/font-awesome.min.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body >
	<div class="main-bg">
		<!-- title -->
		<h1>Welcome mr.<?= $k1." ".$k2?></h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">
					<img src="profilepic/<?=$p5?>" alt="" class="round" />
				</div>
				<form action="passworddatabase.php" method="post">
					<p class="legend">Please Enter New Password..<span class="fa fa-hand-o-down"></span></p>
					
					<div class="input">
						<input type="hidden" placeholder="New password.." name="email" value="<?=$email?>" required />
						
						<input type="text" placeholder="New password.." name="n1" required />
						<span class="fa fa-lock"></span>
					</div>
					<div class="input">
						<input type="password" placeholder="Confirm Password.." name="n2" required />
						<span class="fa fa-lock"></span>
					</div>
					<button type="submit" class="btn submit">
						<span class="fa fa-sign-in"></span>
					</button>
				</form>
				</div>
		</div>
		<!-- //content -->
		<!-- copyright -->
		<div class="copyright">
			<h2>&copy; 2019  All rights reserved | www.Roomseeker.in
				</h2>
		</div>
		<!-- //copyright -->
	</div>
</body>
</html>






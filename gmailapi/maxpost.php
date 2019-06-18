   <?php include 'con.php';?>
<? 
  session_start();
$user_check=$_SESSION['room']; 
if (!isset($_SESSION['room'])) {
        /// your code here
header("Location:index.php");
    }

$sql = "SELECT name,lname,pic FROM profile where email='$user_check'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc())
    {  
        $p1=$row["name"];
        $p2=$row["lname"];
        $p3=$row["pic"];
        
    }

} 
else 
{
    echo "0 results";
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title> Max post </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="find room in kota and anywhere in you want" />
    <script>
         addEventListener("load", function() {
             setTimeout(hideURLbar, 0);
         }, false);

         function hideURLbar() {
             window.scrollTo(0, 1);
         }
    </script>
    <style type="text/css">
      .round
      {
        border-radius: 50%;
      }
      img
      {

        height: 150px !important;
        width: 150px !important;
      }
    </style>
     <link rel="shortcut icon" type="image/x-icon"  href="admin/img/house.png">
     <link rel="stylesheet" href="maxpost/css/bootstrap.css">
     <link rel="stylesheet" href="maxpost/css/style.css" type="text/css" media="all" />
      <link href="maxpost/css/font-awesome.css" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
  
</head>

<body style="background-color: rgb(56,141,191);">
  <div class="main-banner" id="home">
   <div class="banner-info">
            <div class="w3pvt-logo text-center">
                <h3> <a href="index.php">roomseeker.in</a></h3>
            </div>
            <div class="middile-inner-con">
                <div class="tab-main mx-auto">

                    <input id="tab1" type="radio" name="tabs" class="w3layouts-sm" checked>
                    <label for="tab1"><span class="fa fa-home" aria-hidden="true"></span><a href="index.php">Home</a> </label>

                      <label for="tab1"><span class="fa fa-users" aria-hidden="true"></span><a href="profile.php">Profile</a></label>

                        <label for="tab1"><span class="fa fa-envelope" aria-hidden="true"></span> <a href="contact.php">Contact</a></label>
                    <section id="content1" class="inner-w3layouts-wrap">
                   
 <img src="profilepic/<?=$p3?>" class="admin img-fluid round" alt="mobile-image">
                       
                  
                        <h4>Hello mr-<?=$p1." ".$p2?></h4>
                        <h3>Sorry You can post Max 3 free Post ads only Thank"s</h3>
                       
                    </section>
                   

                </div>
        </div>
        <div class="copy-w3layouts-right text-center pb-3">
            <p>© 2019 All rights reserved | Design by Rahul sharma,vikarm Gurjar and Ankit Yadav
            </p>

        </div>
    </div>
  
</body>

</html>


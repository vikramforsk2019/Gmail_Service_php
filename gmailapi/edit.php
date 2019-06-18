   <?php include 'con.php';?>
<? 
  session_start();
$user_check=$_SESSION['room']; 
if (!isset($_SESSION['room'])) {
        /// your code here
header("Location:index.php");
    }

$sql = "SELECT * FROM profile where email='$user_check'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc())
    {   $pp1=$row['pid'];
        $p1=$row["name"];
        $p2=$row["lname"];
        $p3=$row["email"];
        $p4=$row["password"];
        $p5=$row["pic"];
        $p6=$row["status"];
    }

} 
else 
{
    echo "0 results";
}
?>

   <!DOCTYPE html>
<html lang="en">
<head>


  <style type="text/css">
.profile-thumb img
    {
      width: 180px !important;
      height: 180px !important;
    }
 
  </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>edit your profile</title>
  <link href="profile/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
 <link rel="shortcut icon" type="image/x-icon"  href="admin/img/house.png">
  <link href="profile/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="profile/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  
  <link href="profile/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="profile/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <link href="profile/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="profile/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="profile/plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
  <link href="profile/css/style.css" rel="stylesheet">


  <link href="profile/img/favicon.png" rel="shortcut icon">



</head>

<body class="body-wrapper">


<section>
  <div class="container">
    <div class="row">
     
      <div class="col-sm-12 bgm"><a class="add-button" href="index.php"><i class="fa fa-home"></i> Home</a>
        <a class="add-button" href="post.php"><i class="fa fa-th-list"></i> Post Ads</a></div>
  </div>
    </div>
  </div>
</section>

<section class="user-profile section">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
        <div class="sidebar">
        
          <div class="widget user-dashboard-profile">
       
            <div class="profile-thumb">
            
              <img src="profilepic/<?=$p5?>" alt="" class="rounded-circle">
            
                         </div>
            <h5 class="text-center"><?=$p1." ".$p2 ?></h5>
         
          
             <p> <?=$p3 ?></p>
          </div>
         
          <div class="widget user-dashboard-menu">
            <ul>
              <li>
                <a href="profile.php"><i class="fa fa-comment-o"></i>Messages <span>0</span></a>
              </li>
              <li>
<? 
$sql = "SELECT count(postid) as total from post where email='$user_check'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
 {
        $count1=$row["total"];

 }
}
?>
                <a href="#"><i class="fa fa-bookmark-o"></i> Posted Ads <span><?=$count1?></span></a>
              </li>
              <li>
                <a href="logout.php"><i class="fa fa-cog"></i> Logout</a>
              </li>
              <li>
                <a href="index.php"><i class="fa fa-power-off"></i>Delete Account</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
 
        <div class="widget personal-info">
          <h3 class="widget-header user">Edit Personal Information</h3>
          <form action="updateprofile.php" method="post">
         
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" class="form-control" id="first-name" name="fname" value="<?=$p1?>">
            </div>
          
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" class="form-control" id="last-name" name="lname" value="<?=$p2?>">
            </div>
         
            <div class="form-group">
                <label for="current-password">Current Password</label>
                <input type="password" class="form-control" id="current-password" name="password" value="<?=$p4?>">
            </div>
       
            <div class="form-group">
                <label for="new-password">New Password</label>
                <input type="password" class="form-control" id="new-password" name="password" value="<?=$p4?>">
            </div>
         
            
           
            <button class="btn btn-transparent">Save My Changes</button>
          </form>
          <form enctype="multipart/form-data" action="profilepicUpload.php" method="post">
          
            <div class="form-group choose-file">
              <i class="fa fa-user text-center"></i>
                <input type="file" class="form-control-file d-inline" id="input-file" name="fileToUpload">
             </div>
           
            
            <div class="form-check">
              <label class="form-check-label" for="hide-profile">
                <input class="form-check-input" type="checkbox" value="" id="hide-profile">
                Hide Profile from Public/Comunity
              </label>
            </div>
       
            
            
           
            <button class="btn btn-transparent" >Save My Changes</button>
          </form>
 
        </div>
      
        
      </div>
    </div>
  </div>
</section>


<footer class="footer-bottom">
  
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
        
          <div class="copyright">
            <p>Copyright © 2019. All Rights Reserved roomseeker.in</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
       
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
  
 
</footer>


  <script src="profile/plugins/jquery/jquery.min.js"></script>
  <script src="profile/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="profile/plugins/tether/js/tether.min.js"></script>
  <script src="profile/plugins/raty/jquery.raty-fa.js"></script>
  <script src="profile/plugins/bootstrap/dist/js/popper.min.js"></script>
  <script src="profile/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="profile/plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
  <script src="profile/plugins/slick-carousel/slick/slick.min.js"></script>
  <script src="profile/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
  <script src="profile/plugins/fancybox/jquery.fancybox.pack.js"></script>
  <script src="profile/plugins/smoothscroll/SmoothScroll.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="profile/js/scripts.js"></script>

</body>

</html>                 
             

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
$k1="dpgakf9wm24imt1udiyr/1.jpg";
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
    header("Location:index.php");
}
?>

     <!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> My Profile</title>
  
  <!-- PLUGINS CSS STYLE -->
  <style type="text/css">
    .round,.pm1
{
border-radius: 50% !important;
}

.profile-thumb img
  	{
  		width: 180px !important;
			height: 180px !important;
  	}
  </style>
  <link href="profile/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="profile/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="vendor/rahul.css">
     <link rel="shortcut icon" type="image/x-icon"  href="admin/img/house.png">
  <link href="profile/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="profile/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="profile/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="profile/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="profile/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="profile/plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="profile/css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="profile/img/favicon.png" rel="shortcut icon">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type = "text/javascript">
         <!--
            function getConfirmation() {
               var retVal = confirm("Do you want to delete ?");
               if( retVal == true ) {
                  
                  return true;
               } else {
                  
                  return false;
               }
            }
         //-->
      </script> 

</head>

<body class="body-wrapper">

<section>
  <div class="container ">
    <div class="row pm1">
      <div class="col-sm-12 bgm"><a class="add-button" href="index.php"><i class="fa fa-home"></i> Home</a>
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
        <a class="add-button" href="post.php"><i class="fa fa-th-list"></i> Post Ads</a></div>
      </div>
    </div>
  </div>
</section>

<section class="dashboard section">
  <!-- Container Start -->
  <div class="container">
    <!-- Row Start -->
    <div class="row">
      <div class="col-md-4 offset-md-1 col-lg-4 offset-lg-0">
        <div class="sidebar">
          <!-- User Widget -->
          <div class="widget user-dashboard-profile">
            <!-- User Image -->
            <div class="profile-thumb">
           
              <img src="profilepic/<?=$p5?>" alt="" class="rounded-circle">
             </div>
           
           
            <h5 class="text-center"><?=$p1." ".$p2 ?></h5>
         
            
         
            <p> <?=$p3 ?></p>
            <a href="edit.php" class="btn btn-main-sm"> Edit Profile</a>
          </div>
          <!-- Dashboard Links -->
          <div class="widget user-dashboard-menu">
            <ul>
              
              <li>
                <a href="profile.php"><i class="fa fa-comment-o"></i> Messages <span> 0</span></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-bookmark-o"></i>  Posted Ads <span><?=$count1?></span></a>
              </li>
              <li>
                <a href="logout.php"><i class="fa fa-cog"></i>  Logout</a>
              </li>
              <li>
                <a href="index.php"><i class="fa fa-power-off"></i> Delete Account</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-8 offset-md-1 col-lg-8 offset-lg-0">
        <!-- Recently Favorited -->
        <div class="widget dashboard-container my-adslist">
          <h3 class="widget-header"> My Ads</h3>
          <table class="table table-responsive product-dashboard-table">
            <thead>
              <tr>
                <th>Image</th>
                <th>Product Title</th>
                <th class="text-center">Category</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
                 
                <?

$sql = "SELECT pid from profile where email='$user_check'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
 {
        $pid=$row["pid"];

 }
}

$sql = "select postid from post where pid='$pid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
 {
        $postid=$row["postid"];


$sql1 = "select post.pathh,post.postid,post.title,post.catagary,post.img1,post.date,near.nearname from post  inner join near on near.nearid= post.nearid and postid='$postid'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) 
{
    while($row = $result1->fetch_assoc())
 { 
        $pathh=$row["pathh"];
$postid=$row["postid"];
$title=$row["title"];
$catagary=$row["catagary"];
$img=$row["img1"];
$date=$row["date"];
$nearname=$row["nearname"];
?>

       
            <body>
            <tr>
            

                <td class="product-thumb">
                  <img width="80px" height="80px" src="postpic/<?=$pathh?><?=$img?>" alt="image description"></td>
                   <td class="product-details">
                  <h3 class="title"><?=$title?></h3>
                  <span class="add-id"><strong>Ad ID:</strong><?=$postid?></span>
                  <span><strong>Posted on: </strong><time>20/2/2019</time> </span>
                  <span class="status active"><strong>Status</strong> Active</span>
                  <span class="location"><strong>Location</strong><?=$nearname?></span>
                </td>
                <td class="product-category"><span class="categories"><?=$catagary?></span></td>
                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="view" href="">
                          <i class="fa fa-eye"></i>
                        </a>   
                      </li>
                      <li class="list-inline-item">
                        <a class="edit" href="editpost.php?kddsfwefwcwefvwvefwe=<?=$postid?>">
                          <i class="fa fa-pencil" ></i>
                        </a>   
                      </li>
                      <li class="list-inline-item">
                        <a class="delete" href="deletepost.php?kddsfwefwcwefvwvefwe=<?=$postid?>" 
                          onclick = "return getConfirmation('are you sure for delete');">
                           <i class="fa fa-trash"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
</tbody>

<?
 }
}

 }
}
?>  

      </table>
          
        </div>
      </div>
    </div>
    <!-- Row End -->
  </div>
  <!-- Container End -->
</section>
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © 2019. All Rights Reserved roomseeker.in</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    
</footer>

  <!-- JAVASCRIPTS -->
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
<div id="loader-wrapper">
        <div id="preloader_1">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
              </div>
      </div>
  <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
  <script type="text/javascript" src="vendor/theme.js"></script>
  
</body>

</html>
                    
        

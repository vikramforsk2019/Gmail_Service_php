   <?php include 'con.php';?>
<? 
  session_start();
$user_check=$_SESSION['room']; 
if (!isset($_SESSION['room'])) {
        /// your code here
header("Location:index.php");
    }
$key=$_GET['kddsfwefwcwefvwvefwe'];

$sql = "SELECT * from post where postid='$key'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
 {
        $email1=$row["email"];
        $nid=$row['nearid'];
        $c1=$row['catagary'];
        $c2=$row['ptype'];
        $c3=$row['gender'];
        $c4=$row['properties'];
        $c5=$row['bedrooms'];
        $c6=$row['furnish'];
        $c7=$row['title'];
        $c8=$row['address'];
        $c10=$row['price'];
    

 }

} 
if($user_check!=$email1)
{
header("Location:index.php");
}

$sql = "SELECT nearname from near where nearid='$nid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
 {
        $c9=$row["nearname"];
       
 }

} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Update posts</title>
<link rel="stylesheet" type="text/css" href="vendor/rahul.css">
    
<link rel="stylesheet" href="post/css/bootstrap.min.css"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="post/css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="post/css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
<link rel="stylesheet" href="post/css/font-awesome.min.css" /><!-- fontawesome-CSS -->
<link rel="stylesheet" href="post/css/menu_sideslide.css" type="text/css" media="all"><!-- Navigation-CSS -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="room for rent,post your add here,update your add here" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
<!--//fonts--> 
<!-- js -->
     <link rel="shortcut icon" type="image/x-icon"  href="admin/img/house.png">
<script type="text/javascript" src="post/js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap"s JavaScript plugins) -->
<script src="post/js/bootstrap.js"></script>
<script src="post/js/bootstrap-select.js"></script>

<!-- language-select -->
<script type="text/javascript" src="post/js/jquery.leanModal.min.js"></script>
<link href="post/css/jquery.uls.css" rel="stylesheet"/>
<link href="post/css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="post/css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script type="text/javascript">
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById("z1");
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
function preview_image1(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById("z2");
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
function preview_image2(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById("z3");
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
function preview_image3(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById("z4");
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
<style type="text/css">
#wrapper
{
 text-align:center;
 margin:0 auto;
 display: inline-block;
 width:140px; 
}
#wrapper1
{
 text-align:center;
 margin:0 auto;
 padding-left: 0px;
 display: inline-block;
 width:140px; 
}
#wrapper2
{
 text-align:center;
 margin:0 auto;
  display: inline-block;
 width:140px;
}
#wrapper3
{
 text-align:center;
 margin:0 auto;
 padding-bottom: : 20px;
 display: inline-block;
 width:140px;
 
}


</style>

<!-- //language-select -->
</head>
<body>
  
    

  <!-- //header -->
  <!-- breadcrumbs -->
  <div class="w3layouts-breadcrumbs text-center">
    <div class="container">
      <span class="agile-breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <span>Update posts</span></span>
    </div>
  </div>
  <!-- //breadcrumbs -->
  <!-- Submit Ad -->
  <div class="submit-ad main-grid-border">
    <div class="container">
      <h2 class="w3-head">Update your posts</h2>
      <div class="post-ad-form">
        <form method="post" action="updatepost.php">
           <label>Category <span>*</span></label>
              
          <input type="hidden" class="phone" name="kddsfwefwcwefvwvefwe" value="<?=$key?>">
         
          <input type="text" class="phone" name="sm1" value="<?=$c1?>">
         
          <div class="clearfix"></div>
           <label>Prefered Types <span>*</span></label>
          <input type="text" class="phone" name="sm2" value="<?=$c2?>">
          <div class="clearfix"></div>
         
          <label>Prefered Gender <span>*</span></label>
          <input type="text" class="phone" name="sm3" value="<?=$c3?>">
          <div class="clearfix"></div>
         
          <label>Properties <span>*</span></label>
          <input type="text" class="phone" name="sm4" value="<?=$c4?>">
         
          <label>Bedrooms <span>*</span></label>
          <input type="text" class="phone"  name="sm5" value="<?=$c5?>">
          <div class="clearfix"></div>
         <label>Furnishing <span>*</span></label>
          <input type="text" class="phone" name="sm6" value="<?=$c6?>">
          <div class="clearfix"></div>
         
          <label>hostel-Names/title <span>*</span></label>
          <input type="text" class="phone" name="sm7" value="<?=$c7?>">
          <div class="clearfix"></div>
          <label>Address <span>*</span></label>
          <textarea class="mess"  name="sm8" ><?=$c8?></textarea>
          <div class="clearfix"></div>
               
          
             <label>Locality<span>*</span></label>
            <input type="text" class="name"  name="sm9" value="<?=$c9?>">
          
            <div class="clearfix"></div>
            <label>Price<span>*</span></label>
            <input type="text" class="name"  name="sm10" value="<?=$c10?>">
            <div class="clearfix"></div>
           
          
          <div class="clearfix"></div>
          <p class="post-terms">By clicking <strong>Submit</strong>  button you accept our <a href="#" >Terms of Use </a> and <a href="#" >Privacy Policy</a></p>
          <input type="submit" value="Submit">         
        <div class="clearfix"></div>

          </form>
      </div>
    </div> 
  </div>
   
    <footer>
      
      <div class="agileits-footer-bottom text-center">
      <div class="container">
        
        
        <div class="copyrights">
          <p> 2019 All Rights Reserved Design by RoomSeeker.in</p>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    </footer>
        <!--footer section end-->
</body>
    <!-- Navigation-JavaScript -->
      <script src="post/js/classie.js"></script>
      <script src="post/js/main.js"></script>
    <!-- //Navigation-JavaScript -->
    <!-- here stars scrolling icon -->
      
      <!-- start-smoth-scrolling -->
      <script type="text/javascript" src="post/js/move-top.js"></script>
      <script type="text/javascript" src="post/js/easing.js"></script>
      <script type="text/javascript">
        jQuery(document).ready(function($) {
          $(".scroll").click(function(event){   
            event.preventDefault();
            $("html,body").animate({scrollTop:$(this.hash).offset().top},1000);
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
  <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
  <script type="text/javascript" src="vendor/theme.js"></script>
  
</html>

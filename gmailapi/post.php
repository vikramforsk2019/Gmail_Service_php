   <?php include 'con.php';?>
<? 
  session_start();
$user_check=$_SESSION['room']; 
if (!isset($_SESSION['room']))
 {
        /// your code here
header("Location:index.php");
    }

$sql = "SELECT count(postid) as total from post where email='$user_check'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
 {
        $count=$row["total"];

 }

} 
else 
{
    header("Location:profile.php");
}
if($count>2)
{
 header("Location:maxpost.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>post free add</title>
<link rel="stylesheet" type="text/css" href="vendor/rahul.css">
     <link rel="shortcut icon" type="image/x-icon"  href="admin/img/house.png">
<link rel="stylesheet" href="post/css/bootstrap.min.css"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="post/css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="post/css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
<link rel="stylesheet" href="post/css/font-awesome.min.css" /><!-- fontawesome-CSS -->
<link rel="stylesheet" href="post/css/menu_sideslide.css" type="text/css" media="all"><!-- Navigation-CSS -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="room for rent,post your add here" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
<!--//fonts--> 
<!-- js -->
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
      <span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Post your Ad For Rent</span></span>
    </div>
  </div>
  <!-- //breadcrumbs -->
  <!-- Submit Ad -->
  <div class="submit-ad main-grid-border">
    <div class="container">
      <h2 class="w3-head">Post your Ads here</h2>
      <div class="post-ad-form">
        <form method="post" action="postdata.php" enctype = "multipart/form-data">
          
          <label>Select Category <span>*</span></label>
          <select class="" name="sm1" required="">
            <option>Select</option>
            <option value="rooms">Rooms</option>
            <option value="hostel">Hostel</option>
            <option value="flat">Flats</option>
            <option value="shop">Shop</option>
            
          </select>
          <div class="clearfix"></div>
          <label>Prefered types <span>*</span></label>
          <select class="" name="sm2" required="">
            <option>Select</option>
            <option value="family">Family</option>
            <option value="Student">Student</option>
            <option value="Professional">Professional</option>
            
          </select>
          <div class="clearfix"></div>
          <label>Prefered Gender <span>*</span></label>
          <select class="" name="sm3" required="">
            <option>Select</option>
            <option value="Male">Male </option>
            <option value="Female">Female</option>
            
          </select>
          <div class="clearfix"></div>
          <label>Properties  <span>*</span></label>
          <select class="" name="sm4" required="">
            <option>Select Category</option>
            <option value="rent">For Rent</option>
            <option value="sale">For Sale</option>
            
          </select>

          <div class="clearfix"></div>
          <div class="clearfix"></div>
          <label>Bedrooms <span>*</span></label>
          <select class="" name="sm5" required="">
            <option>Select</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            
          </select>
          
          <div class="clearfix"></div>
         
          <label>Furnishing <span>*</span></label>
          <select class="" name="sm7" required="">
            <option>Select Category</option>
            <option value="Furnished">Furnished</option>
            <option value="Nonfurnished">nonFurnished</option>
            
            
          </select>
          
          <div class="clearfix"></div>
          <label>hostel-Names/title <span>*</span></label>
          <input type="text" class="phone" placeholder="your property name ,house no." name="title" required="">
          <div class="clearfix"></div>
          <label>Address <span>*</span></label>
          <textarea class="mess" placeholder="please fill your full address" name="des" required=""></textarea>
          <div class="clearfix"></div>
               <label>Enter city <span>*</span></label>
          <select class="" name="sm8">
            <option>Select City</option>
            <option value="kota">kota</option>
            <option value="jaipur">jaipur</option>
            <option value="Alear">Alwar</option>
            <option value="Jodhpur">Jodhpur</option>
            
            
          </select>
          
          <div class="clearfix"></div>

          <label>Select Locality <span>*</span></label>
          <select class="" name="sm9">
            <option>nearby..</option>
            <optgroup label="kota">
     <option value="Anantpura kota">Anantpura kota</option>
    <option value="Bajrang Nagar kota">Bajrang Nagar kota</option>
    <option value="Bargaon kota">Bargaon kota</option>
    <option value="Bhimganj Mandi kota">Bhimganj Mandi kota</option>
    <option value="Borkhera kota">Borkhera kota </option>
    <option value="Bundi Road kota">Bundi Road kota</option>
    <option value="Chawani kota">Chawani kota</option>
    <option value="Civil Lines kota">Civil Lines kota</option>
    <option value="Dadabari kota">Dadabari kota</option>
    <option value="Dadwara kota">Dadwara kota</option>
    <option value="Dhanmandi kota">Dhanmandi kota</option>
    <option value="Electricity Board Area kota">Electricity Board Area kota</option>
      <option value="Engineering college Kota">Engineering college Kota</option>
    <option value="Ganesh Nagar kota">Ganesh Nagar kota</option>
    <option value="Gaytri Vihar kota">Gaytri Vihar kota</option>
    <option value="Girdharpura kota">Girdharpura kota</option>
    <option value="Gudla kota">Gudla kota</option>
    <option value="Gumanpura kota">Gumanpura kota</option>
    <option value="Indraprastha Industrial Area kota">Indraprastha Industrial Area kota</option>
     <option value="Keshavpura kota">Keshavpura kota</option>
    <option value="Kishorepura kota">Kishorepura kota</option>
   <option value="Kota Industrial Area kota"> Kota Industrial Area kota</option>
   <option value="Kunhari kota"> Kunhari kota</option>
   <option value="Ladpura kota"> Ladpura kota</option>
   <option value="Laxmi Pura kota"> Laxmi Pura kota</option>
   <option value="Mahaveer Colony kota"> Mahaveer Colony kota</option>
    <option value="Mahaveer Nagar kota">Mahaveer Nagar kota</option>
    <option value="Mandana kota">Mandana kota</option>
    <option value="Nanta kota">Nanta kota</option>
    <option value="Naya Gaon kota">Naya Gaon kota</option>
    <option value="Nayapura kota">Nayapura kota</option>
    <option value="New Railway Colony kota">New Railway Colony kota</option>
    <option value="Police Line kota">Police Line kota</option>
    <option value="Railway Station Area kota">Railway Station Area kota</option>
    <option value="Raipura kota">Raipura kota</option>
    <option value="Rama Krishna Puram kota">Rama Krishna Puram kota</option>
    <option value="Ramganj Mandi kota">Ramganj Mandi kota</option>
    <option value="Rampura kota">Rampura kota</option>
    <option value="Rangbari kota">Rangbari kota</option>
    <option value="Ranpur kota">Ranpur kota</option>
    <option value="Rawatbhata Road kota">Rawatbhata Road kota</option>
    <option value="Sakat Pura kota">Sakat Pura kota</option>
    <option value="Sawaimadhopur Road kota">Sawaimadhopur Road kota</option>
    <option value="Shashtri Nagar kota">Shashtri Nagar kota</option>
    <option value="shivpura kota">shivpura kota</option>
    <option value="Shrinath Puram kota">Shrinath Puram kota</option>
    <option value="Shripura kota">Shripura kota</option>
    <option value="Shubhash Nagar kota">Shubhash Nagar kota</option>
    <option value="Shyam Nagar Kota">Shyam Nagar Kota</option>
    <option value="Sultanpur kota">Sultanpur kota</option>
    <option value="Swami Vivekananda Nagar kota">Swami Vivekananda Nagar kota</option>
    <option value="Talwandi kota">Talwandi kota</option>
    <option value="Transport Nagar kota">Transport Nagar kota</option>
    <option value="Vigyan Nagar kota">Vigyan Nagar kota</option>
  


             </optgroup>
            
          </select>
          
          <div class="clearfix"></div>
          
            
            <div class="clearfix"></div>
            <label>Enter Demand Price<span>*</span></label>
            <input type="text" class="name" placeholder="Price.." required="" name="price">
            <div class="clearfix"></div>
            <div class="clearfix"></div><label>Upload your four PIC
            
              <span>*</span></label>

<div id="wrapper">
  <img id="z1"/ width="50" height="50">
 <input type="file" class="i1" id="a1" name="files[]" multiple  onchange="preview_image(event)" required="">
<label for="a1">+</label>
</div>
<div id="wrapper1">
  <img id="z2"/ width="50" height="50">
 <input type="file" class="i1" id="a2"  onchange="preview_image1(event)" name="files[]" multiple  required="">
 <label for="a2">+</label>
</div>
<div id="wrapper2">
  <img id="z3"/ width="50" height="50">
 <input type="file" class="i1" id="a3" onchange="preview_image2(event)" name="files[]" multiple  required="">
 <label for="a3">+</label>
</div>
<div id="wrapper3">
  <img id="z4"/ width="50" height="50">
 <input type="file" class="i1" id="a4" onchange="preview_image3(event)" name="files[]" multiple  required="">
 <label for="a4">+</label>
</div>
            <div class="clearfix"></div>
          <div class="clearfix"></div>
          <p class="post-terms">By clicking <strong>POST</strong>  button you accept our <a href="#" >Terms of Use </a> and <a href="#" >Privacy Policy</a></p>
          <input type="submit" value="post"  name="submit">         
        <div class="clearfix"></div>

          </form>
      </div>
    </div> 
  </div>
   
    <footer>
      
      <div class="agileits-footer-bottom text-center">
      <div class="container">
        
        
        <div class="copyrights">
          <p> 2019 All Rights Reserved roomseeker.in</p>
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


  <?php include 'con.php';?>
<?
$key=$_GET['kddsfwefwcwefvwvefwe'];
if($key=='null')
{
header("Location:search.php");
}

$sql = "select post.pathh,post.img1,post.img2,post.img3,post.img4,post.price,post.catagary,post.properties,post.bedrooms,near.nearname,
post.title,post.address,post.furnish,post.ptype,post.gender,near.location from post inner join near on near.nearid=post.nearid and postid='$key'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
 {
       $pathh=$row['pathh'];
       $img1=$row['img1'];
 $img2=$row['img2'];
 $img3=$row['img3'];
 $img4=$row['img4'];
 $price=$row['price'];
 $catagary=$row['catagary'];
 $properties=$row['properties'];
 $bedrooms=$row['bedrooms'];
 $nearname=$row['nearname'];
 $title=$row['title'];
 $address=$row['address'];
$furnish=$row['furnish'];
$gender=$row['gender'];
$location=$row['location'];
$ptype=$row['ptype'];

 }
}


?>
<!DOCTYPE html>
<html>
<head>
<title>find your idel room for Rent</title>
<script src="js/jquery.min.js"></script>
<script src="js/scripts.js"></script>
<link href="css/styles.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />  
 <link rel="shortcut icon" type="image/x-icon"  href="admin/img/house.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="room search,room description,RoomSeeker,find room on rent" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" type="text/css" href="vendor/rahul.css">
    
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link rel="stylesheet" type="text/css" media="all" href="css2/style2.css">
  <script type="text/javascript" src="js2/jquery-1.9.1.min2.js"></script>
  <script type="text/javascript" src="js2/jquery.autocomplete.min2.js"></script>
  <script type="text/javascript" src="js2/currency-autocomplete2.js"></script>

  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic" rel="stylesheet" type="text/css">
  <link href="//fonts.googleapis.com/css?family=Wallpoet" rel="stylesheet" type="text/css">
  <link href="//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300" rel="stylesheet" type="text/css">
<!--//web-fonts-->
</head>

<body style="background-color: white;">
<!--/banner-section-->
    <div id="demo-1" class="banner-inner">
   <div class="banner-inner-dott">
       <div class="header-top">
        <!-- /header-left -->
                  <div class="header-left">
          <!-- /sidebar -->
                <div id="sidebar"> 
               <h4 class="menu">menu</h4>
               
                      <ul>
                       
                         <li><a href="index.php"> Home</a></li>
                         <li><a href="login.php">Register</a></li>
                          <li><a href="login.php">My account</a></li>
                            <li><a href="login.php">Post Add</a></li>
                 <li><a href="team.php">Team</a></li>
                 <li><a href="contact.php">Contact-Us</a></li>
              
               </ul>
                <div id="sidebar-btn">
                 <div>
                 <span></span>
                 <span></span>
                 <span></span>
              </div>
             
               </div>
             </div>

               <script>
                  var sidebarbtn = document.getElementById("sidebar-btn");
                  var sidebar = document.getElementById("sidebar");
                   sidebarbtn.addEventListener("click", function () {
                  if(sidebar.classList.contains("visible")){
                    sidebar.classList.remove("visible"); 
                   }else {
                    sidebar.className = "visible";
                  }
                  });
                </script>
              <!-- //sidebar -->
           
           
          </div><br>
          <!-- //header-left -->
           
            
          </div>
          <div class="clearfix"></div>

      <div class="banner-info">
        <h2> <a href="index.php"> <span class="logo-sub">To-Let for students  </span>  </a> </h2>
      <div id="w">
   
        
      <div id="searchfield">
        <form action="searchroom.php" method="post">
          <input type="text" name="kddsfwefwcwefvwvefwep" class="biginput" id="autocomplete" placeholder="search for location">
          
          <select id="country" onchange="change_country(this.value)" name="kddsfwefwcwefvwvefweq" class="biginput">
            <option value="empty"><img src="images/rupee.png" alt=" " class="img-responsive" />select room type</option>
          <option value="rooms">ROOMS</option>
           <option value="hostel">HOSTELS</option>
            <option value="flat">FLATS</option>
            <option value="house">HOUSES</option>
            <option value="shop">SHOPS</option>

          </select>
        
          <input type="submit" class="biginputbtn" value="submit" name="">
        </form>
      </div>
    
   
  </div>

        </div>
    </div>
    

      </div>
    <!--//banner-info--> 
    </div>
   </div>
<!-- discounts-->
    
      <!-- //discounts-->
        <!-- //sign-up-->
        <div class="modal ab fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog sign" role="document">
          <div class="modal-content about">
            <div class="modal-header one">
              <button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
                <div class="discount one">
                  <h3>Sign Up</h3>
                  
                </div>             
            </div>
             <div class="modal-body about">
                <div class="login-top sign-top one">
               <form action="#" method="post">
                  <input type="text" name="name" class="name active" placeholder="Your Name" required="">
                  <input type="text" name="email" class="email" placeholder="Email" required="">
                  <input type="password" name="password" class="password" placeholder="Password" required="">    
                  <input type="checkbox" id="brand1" value="">
                  <label for="brand1"><span></span> Remember me</label>
                  <div class="login-bottom one">
                  <ul>
                    <li>
                      <a href="#">Forgot password?</a>
                    </li>
                    <li>
                    
                      <input type="submit" value="SIGN UP">
                    
                    </li>
                  <div class="clearfix"></div>
                </ul>
                </div> 
                </form>
              </div>
              
              
             </div>
             <div class="social-icons">
                  <ul> 
                    <li><a href="#"><span class="icons"></span><span class="text">Facebook</span></a></li>
                    <li class="twt"><a href="#"><span class="icons"></span><span class="text">Twitter</span></a></li>
                    <li class="ggp"><a href="#"><span class="icons"></span><span class="text">Google+</span></a></li>
                  </ul> 
                  </div>
                
          </div>
        </div>
      </div>
      <!-- //sign-up-->
        <!-- /location-->
        <div class="modal ab fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog sign" role="document">
          <div class="modal-content about">
            <div class="modal-header one">
              <button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
                <div class="discount one">
                  <h3>Please Tell Us Your City</h3>
                  
                </div>             
            </div>
             <div class="modal-body about">
                <div class="login-top sign-top location">
                 <form action="#" method="post">
                              <select id="country12" onchange="change_country(this.value)" class="frm-field required">
                            <option value="null"> Select City</option>
                            <option value="city">Amsterdam</option>
                          
                    </select>
                </form>
                   </div>
              
              
             </div>

                
          </div>
        </div>
      </div>
      <!-- //location-->
      <!-- /get-->
        <div class="modal ab fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog sign" role="document">
          <div class="modal-content about">
            <div class="modal-header one">
              <button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
                <div class="discount one">
                  <h3>Make car insurance buying easier</h3>
                  
                </div>             
            </div>
             <div class="modal-body about">
                <div class="login-top sign-top get">
                  <ul class="car-insurance">
                       <li><i class="fa fa-signal" aria-hidden="true"></i><h6> Zero <br> Depreciation</h6></li>
                     <li><i class="fa fa-truck" aria-hidden="true"></i><h6> Road-side <br> assistance</h6></li>
                     <li><i class="fa fa-gavel" aria-hidden="true"></i><h6> Hydro-static <br> cover-lock</h6></li>
                     </ul>
                   <form action="#" method="post">
                   
                  <input type="text" name="email" class="email" placeholder="Email" required="">
                  <input type="password" name="password" class="password" placeholder="Password" required="">    
                  <input type="submit" value="Submit">
                </div> 
                </form>
                
              </div>
            
              
             </div>
                
          </div>
        </div>
      </div>
      <!-- //get-->
    <!--//banner-section-->
    <!--/breadcrumb-->
        <div class="service-breadcrumb w3-agile">
        <div class="container">
          <div class="wthree_service_breadcrumb_left">
            <ul>
              <li><a href="index.php">Home</a> <i>|</i></li>
              <li>Room Description</li>
            </ul>
          </div>
          
          <div class="clearfix"> </div>
        </div>
      </div>
    <!--//breadcrumb-->
<div class="container">
  
  <div class="buy-single-single">
  
      <div class="col-md-9 single-box">
        
       <div class=" buying-top"> 
      <div class="flexslider">
  <ul class="slides slides1">
  
    <li data-thumb="postpic/<?=$pathh?><?=$img1?>">
      <img src="postpic/<?=$pathh?><?=$img1?>" />
    </li>
    <li data-thumb="postpic/<?=$pathh?><?=$img2?>">
      <img src="postpic/<?=$pathh?><?=$img2?>" />
    </li>
    <li data-thumb="postpic/<?=$pathh?><?=$img3?>">
      <img src="postpic/<?=$pathh?><?=$img3?>" />
    </li>
    <li data-thumb="postpic/<?=$pathh?><?=$img4?>">
      <img src="postpic/<?=$pathh?><?=$img4?>" />
    </li>
  </ul>
</div>
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
$(window).load(function() {
  $(".flexslider").flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
</div>
<div class="buy-sin-single">
      <div class="col-sm-5 middle-side immediate">

               <h4>Possession: Immediate</h4>
               <p><span class="bath1">title </span>: <span class="two"><?=$title?></span></p>
               <p><span class="bath2">Properties</span>:<span class="two"><?=$properties?></span></p>
             <p><span class="bath2">Catagery</span> : <span class="two"><?=$catagary?></span></p>
            
               <p><span class="bath2">BedRooms </span>: <span class="two"><?=$bedrooms?></span></p>
               <p><span class="bath2">Furnishing</span>: <span class="two"><?=$furnish?></span></p>
<? if($ptype=='family')

         {?>
                <p><span class="bath2">Preferred Types</span>:<span class="two"><?=$ptype?></span></p>
            <?}  else { ?>

              <p><span class="bath2">Preferred Types</span>:<span class="two"><?=$ptype?></span></p>
              <p><span class="bath2">Preferred Gender</span>:<span class="two"> <?=$gender?></span></p>


<? } ?>

              <p><span class="bath2">Monthly Rent </span>:<span class="two"> <?=$price?></span></p>         
             <p><span class="bath2">Locality </span>:<span class="two"><?=$nearname?></span></p>         
          </div>
           <div class="col-sm-7 buy-sin">
            <h4>Address And Description</h4>
<pre><?=$address?></pre>
           </div>
           <div class="clearfix"> </div>
          </div>
           <div class="map-buy-single">
            <h4>Neighborhood Info</h4>
              <div class="map-buy-single1">
                <iframe src="<?=$location?>"></iframe>
              
            </div>
          </div>
          
    </div>
  

      
    
    <div class="clearfix"> </div>
    </div>
  </div>

<!---->


        
        
        
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  
</div>
  <div class="footer">
    <div class="container">
      <div class="footer-grids">
        <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
          <h3>About Us</h3>
          <p>We"re RoomSeeker, the RoomSeeker site you can trust. Finding the right people to live with can feel like an impossible task - we"re here to make it simpler, quicker and safer to help you find the perfect room,flats,hostels and Houses on Rent.</span></p>
        </div>
        <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
          <h3>Find us on</h3>
          <ul>
            <li><i class="fa fa-facebook" aria-hidden="true"></i>
             </i>facebook</li>
            <li><i class="fa fa-instagram" aria-hidden="true"></i><a href="mailto:info@example.com">instragram</a></li>
            <li><i class="fa fa-twitter" aria-hidden="true"></i></i>twitter</li>
          </ul>
        </div>
        <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
          <h3>Flickr View</h3>
          <div class="footer-grid-left">
            <a href="single.php"><img src="images/13.jpeg" alt=" " class="img-responsive" /></a>
          </div>
          <div class="footer-grid-left">
            <a href="single.php"><img src="images/14.jpeg" alt=" " class="img-responsive" /></a>
          </div>
          <div class="footer-grid-left">
            <a href="single.php"><img src="images/15.jpeg" alt=" " class="img-responsive" /></a>
          </div>
          <div class="footer-grid-left">
            <a href="single.php"><img src="images/16.jpeg" alt=" " class="img-responsive" /></a>
          </div>
          <div class="footer-grid-left">
            <a href="single.php"><img src="images/17.jpeg" alt=" " class="img-responsive" /></a>
          </div>
          <div class="footer-grid-left">
            <a href="single.php"><img src="images/18.jpeg" alt=" " class="img-responsive" /></a>
          </div>
          <div class="footer-grid-left">
            <a href="single.php"><img src="images/19.jpeg" alt=" " class="img-responsive" /></a>
          </div>
          <div class="footer-grid-left">
            <a href="single.php"><img src="images/20.jpeg" alt=" " class="img-responsive" /></a>
          </div>
          <div class="footer-grid-left">
            <a href="single.php"><img src="images/21.jpeg" alt=" " class="img-responsive" /></a>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
          <h3>Blog Posts</h3>
          <div class="footer-grid-sub-grids">
            <div class="footer-grid-sub-grid-left">
              <a href="single.php"><img src="images/22.jpeg" alt=" " class="img-responsive" /></a>
            </div>
            <div class="footer-grid-sub-grid-right">
              <h4><a href="single.php">best site for Rooms </a></h4>
              <p>Posted On 25/3/2016</p>
            </div>
            <div class="clearfix"> </div>
          </div>
          <div class="footer-grid-sub-grids">
            <div class="footer-grid-sub-grid-left">
              <a href="single.php"><img src="images/23.jpeg" alt=" " class="img-responsive" /></a>
            </div>
            <div class="footer-grid-sub-grid-right">
              <h4><a href="single.php">Best rental platform</a></h4>
              <p>Posted On 25/4/2016</p>
            </div>
            <div class="clearfix"> </div>
          </div>
          <div class="footer-grid-sub-grids">
            <div class="footer-grid-sub-grid-left">
              <a href="single.php"><img src="images/24.jpeg" alt=" " class="img-responsive" /></a>
            </div>
            <div class="footer-grid-sub-grid-right">
              <h4><a href="single.php">easy to find </a></h4>
              <p>Posted On 25/5/2016</p>
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    
      <div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
        <p>&copy roomseeker.in</p>
      </div>
    </div>
  </div>


        <script src="js/jquery.light-carousel.js"></script> 
        <script>
          $(".sample1").lightCarousel();
        </script> 
        <link href="css/light-carousel.css" rel="stylesheet" type="text/css">

<script src="js/bootstrap.js"></script>
 
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
                    
 

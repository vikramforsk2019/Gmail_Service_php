<?php include 'con1.php';?>    
<?php include 'con.php';?>      
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
    .thumbnail1 a img{
       width: 380px !important;
       height: 270px !important;
     }
     #MyForm{
  display: none;
}
#Mybtn
{
  
  background-color: rgb(047BD5);
  width: 100%;

}
  </style>
<title>Search room</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="search room ,Tolet for student,room for rent" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<!--for filter -->



<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="vendor/rahul.css">

<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link rel="stylesheet" type="text/css" media="all" href="css2/style2.css">
  <script type="text/javascript" src="js2/jquery-1.9.1.min2.js"></script>
  <script type="text/javascript" src="js2/jquery.autocomplete.min2.js"></script>
  <script type="text/javascript" src="js2/currency-autocomplete2.js"></script>
 <link rel="shortcut icon" type="image/x-icon"  href="admin/img/house.png">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Wallpoet" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300" rel="stylesheet" type="text/css">
<!--//web-fonts-->

              <script type="text/javascript">
        $(".product-list").click(function() {
            $(this).siblings("input:checkbox").prop("checked", false);
        });
      </script>
  
<script type="text/javascript">
$(document).ready(function(){
  $("#Mybtn").click(function(){
      $("#MyForm").toggle(1000);
  });

    
});
</script>
<script type="text/javascript">
        $(".product-list1").click(function() {
            $(this).siblings("input:checkbox").prop("checked", false);
        });
      </script>
<script type="text/javascript">
        $(".product-list2").click(function() {
            $(this).siblings("input:checkbox").prop("checked", false);
        });
      </script>
<script type="text/javascript">
        $(".product-list3").click(function() {
            $(this).siblings("input:checkbox").prop("checked", false);
        });
      </script>
<script type="text/javascript">
        $(".product-list4").click(function() {
            $(this).siblings("input:checkbox").prop("checked", false);
        });
      </script>
<script type="text/javascript">
        $(".product-list5").click(function() {
            $(this).siblings("input:checkbox").prop("checked", false);
        });
      </script>


</head>
<body>
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
                          <li><a href="profile.php">My account</a></li>
                            <li><a href="profile.php">Post Add</a></li>
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
        
           
           
          </div><br>
      
          <div class="clearfix"></div>
     
  
    <div class="banner-info">
      <h2> <a href="index.php"> <span class="logo-sub">To-Let for students  </span>  </a> </h2>
      <div id="w">
   
        
      <div id="searchfield">
        <form action="searchroom.php" method="post">
          <input type="text" name="kddsfwefwcwefvwvefwep" class="biginput" id="autocomplete"  placeholder="Enter location" required="">
          
          <select id="country" onchange="change_country(this.value)" name="kddsfwefwcwefvwvefweq"  class="biginput" required="">
            <option value="empty"><img src="images/rupee.png" alt=" " class="img-responsive" />select Property type</option>
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
<!-- discounts-->
         <div class="modal ab fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog sign" role="document">
          <div class="modal-content about">
            <div class="modal-header one">
           
             
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
      
        
       
              </div>
            
              
             </div>
                
          </div>
        </div>
      </div>
  
        <div class="service-breadcrumb">
        <div class="container">
          <div class="wthree_service_breadcrumb_left">
            <ul>
              <li><a href="index.php">Home</a> <i>|</i></li>
              <li>Search Room</li>
            </ul>
          </div>
          <div class="wthree_service_breadcrumb_right">
           
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
  

  <!--///////////////////////filter use /////////-->
<div class="search-car w3l">
      <div class="container">
      
          <div class="search-car-inner w3l">
    
            <div class="col-md-3">
            <button class="btn btn-primary fill1" id="Mybtn"> Filter</button>
              
               <form id="MyForm">
             <section class="sky-form">
             <h4>Select price</h4>
               <div class="form-inner">
               <label class="checkbox"><input type="checkbox" name="price" class="common_selector price1" value="2000"><i></i>rs.1500-2000</label>
               <label class="checkbox"><input type="checkbox" name="price" class="common_selector price1" value="4000"><i></i>rs.2000-4000</label>
               <label class="checkbox"><input type="checkbox" name="price" class="common_selector price1" value="6000"><i></i>rs.4000-6000</label>
                     <label class="checkbox"><input type="checkbox" name="price" class="common_selector price1" value="10000"><i></i>rs.6000-10,000</label>           
                            </div>
                  </section>
                
                  <section class="sky-form">
                    <h4>Search Rent for</h4>
                     <div class="form-inner">
                              <label class="checkbox">
                    <input type="checkbox" name="rent" value="student" class="common_selector ptype">
                                <i></i>Students</label>
                              <label class="checkbox">
                   <input type="checkbox" name="rent" value="family" class="common_selector ptype">
                   <i></i>family</label>
                                <label class="checkbox">
                   <input type="checkbox" name="rent" value="Professional" class="common_selector ptype">
                   <i></i>Professional</label>
                            </div>
                  </section>
                    


                  
<div class="list-group">
              <section class="sky-form">
                        <h4>Select category</h4>
                         
                              <div class="form-inner">
                              
                              <label class="checkbox">

            <input type="checkbox" name="category" class="common_selector catagary" value="rooms">
                                <i></i>Rooms</label>
                              <label class="checkbox">
           <input type="checkbox" name="category" class="common_selector catagary" value="hostel">
                                <i></i>Hostels</label>
                             <label class="checkbox">
          <input type="checkbox" name="category" class="common_selector catagary" value="flat">
                           <i></i>Flats</label>
                             <label class="checkbox">
       <input type="checkbox" name="category" class="common_selector catagary" value="shop">
                              <i></i>Shops</label>
                              
                           
                            </div>
               
                </section>

                 <section class="sky-form">
                        <h4>Preferred Gender</h4>
                          
                         
                                <div class="form-inner">
                              <label class="checkbox"><input type="checkbox" name="Gender" class="common_selector gender" value="male"><i></i>Male</label>
                              <label class="checkbox"><input type="checkbox" name="Gender" class="common_selector gender" value="female"><i></i>Female</label>
                  
                            </div>
                          
                    
                          
                  </section>
                    <section class="sky-form" >
                        <h4>Furnicher</h4>
                          
                         
                            
                                <div class="form-inner">
                              <label class="checkbox"><input type="checkbox" name="Furnicher" class="common_selector fur" value="Furnished"><i></i>Furnished</label>
                              <label class="checkbox"><input type="checkbox" name="Furnicher" class="common_selector fur" value="Nonfurnished"><i></i>Nonfurnished</label>
                              
                  
  
                          </div>
                    
                          
                  </section>
                   <section class="sky-form">
                    <h4>properties</h4>
                     <div class="form-inner">
                              <label class="checkbox"><input type="checkbox" name="properties" class="common_selector per" value="rent"><i></i>Rent</label>
                              <label class="checkbox"><input type="checkbox" name="properties" class="common_selector per" value="sale"><i></i>Sale</label>
                                
                            </div>
                  </section>
                </div>
              </form>
            </div>
         

              </div>

              
                 <div class="col-md-9">
              <br/>
                <div class="row filter_data">

                </div>
            </div>
             </div>
        </div>
    
<!-- Page Content -->
     <script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data2';
        var catagary = get_filter('catagary');
         var ptype = get_filter('ptype');
        var properties = get_filter('properties');
       var gender=get_filter('gender');
          var price = get_filter('price1');
        var per = get_filter('per');
       var fur=get_filter('fur');
        $.ajax({
            url:"fetch_data2.php",
            method:"POST",
            data:{action:action, price:price,per:per,fur:fur,catagary:catagary,ptype:ptype,properties:properties,gender:gender},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });
  $('#price_range').slider({
        range:true,
        min:1000,
        max:65000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui)
        {
         $('#price_show').html( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});

</script>

 <script type="text/javascript" src="js6/jquery-ui.js"></script>
              <script type='text/javascript'>//<![CDATA[ 
              $(window).load(function(){
               $( "#slider-range" ).slider({
                    range: true,
                    min: 0,
                    max: 200000,
                    values: [ 0, 100000 ],
  slide: function( event, ui ) 
  {  
  //show at starting value
       $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

              });//]]>  

              </script>





                  







                    
          <script type="text/javascript">
        $(".product-list").on("change", function() {
            $(".product-list").not(this).prop("checked", false);  
        });
      </script>
       <script type="text/javascript">
        $(".product-list1").on("change", function() {
            $(".product-list1").not(this).prop("checked", false);  
        });
      </script>
       <script type="text/javascript">
        $(".product-list2").on("change", function() {
            $(".product-list2").not(this).prop("checked", false);  
        });
      </script>
       <script type="text/javascript">
        $(".product-list3").on("change", function() {
            $(".product-list3").not(this).prop("checked", false);  
        });
      </script>
       <script type="text/javascript">
        $(".product-list4").on("change", function() {
            $(".product-list4").not(this).prop("checked", false);  
        });
      </script>
       <script type="text/javascript">
        $(".product-list5").on("change", function() {
            $(".product-list5").not(this).prop("checked", false);  
        });
      </script>
          </form>
         
            
                    
        
            <div class="clearfix"></div>
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
        
        </div>
        <div class="clearfix"> </div>
      </div>
    
      <div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
        <p>&copy roomseeker.in</p>
      </div>
    </div>
  </div>

<script>
  $(document).ready(function() {
    $("#list").click(function(event){event.preventDefault();$("#products .item").addClass("list-group-item");});
    $("#grid").click(function(event){event.preventDefault();$("#products .item").removeClass("list-group-item");$("#products .item").addClass("grid-group-item");});
});
</script>


</body>
</html>

              
   

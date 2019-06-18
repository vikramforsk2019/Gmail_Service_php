<?php 

//index.php

include('con.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product filter in php</title>

    <script src="js3/jquery-1.10.2.min.js"></script>
    <script src="js3/jquery-ui.js"></script>
    <script src="js3/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css3/bootstrap.min.css">
    <link href = "css3/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css3/style.css" rel="stylesheet">
</head>

<body>
    <!-- Page Content -->
     <div class="container">
        <div class="row">
            <br />
            <h2 align="center">Advance Ajax Product Filters in PHP</h2>
            <br />
            <div class="col-md-3">                              
               <div class="list-group">
					<h3>Price</h3>
					<input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="65000" />
                    <p id="price_show">1000 - 65000</p>
                    <div id="price_range"></div>
                </div>

                <div class="list-group">
                    <h3>Catagery</h3>
					<?php

                    $query = "SELECT DISTINCT(catagary) FROM post WHERE cityid=1 ORDER BY postid DESC";
                    $statement = $conn->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                  <div class="list-group-item checkbox">   
            <label>
                <input type="checkbox" class="common_selector catagary" value="<?php echo $row['catagary']; ?>"  > <?php echo $row['catagary']; ?>
            </label>
                   </div> 
                    <?php
                    }

                    ?>
                    </div>

                <div class="list-group">
                    <h3>Ptype</h3>
                    <?php

                    $query = "
                    SELECT DISTINCT(ptype) FROM post WHERE cityid =1 ORDER BY postid DESC
                    ";
                    $statement = $conn->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ptype" value="<?php echo $row['ptype']; ?>" > <?php echo $row['ptype']; ?> </label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
            
          

                 <div class="list-group">
                    <h3>Properties</h3>
                    <?php

                    $query = "
                    SELECT DISTINCT(properties) FROM post WHERE cityid =1 ORDER BY postid DESC
                    ";
                    $statement = $conn->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector properties" value="<?php echo $row['properties']; ?>" > <?php echo $row['properties']; ?> </label>
                    </div>
                
                    <?php    
                    }

                    ?>
                </div>
            
          
             
                 <div class="list-group">
                    <h3>Furnicher</h3>
                    <?php

                    $query = "
                    SELECT DISTINCT(furnish) FROM post WHERE cityid =1 ORDER BY postid DESC
                    ";
                    $statement = $conn->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector furnish" value="<?php echo $row['furnish']; ?>" > <?php echo $row['furnish']; ?> </label>
                    </div>
                
                    <?php    
                    }

                    ?>
                </div>

                 <div class="list-group">
                    <h3>Gender</h3>
                    <?php

                    $query = "SELECT DISTINCT(gender) FROM post WHERE cityid=1 ORDER BY postid DESC";
                    $statement = $conn->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                  <div class="list-group-item checkbox">   
            <label>
                <input type="checkbox" class="common_selector gender" value="<?php echo $row['gender']; ?>"  > <?php echo $row['gender']; ?>
            </label>
                   </div> 
                    <?php
                    }

                    ?>
                    </div>

  
            
             </div>
                 
   
				

            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
              
<style>
#loading
{
    text-align:center; 
    background: url('loader.gif') no-repeat center; 
    height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data2';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var catagary = get_filter('catagary');
         var ptype = get_filter('ptype');
        var properties = get_filter('properties');
       var gender=get_filter('gender');
        $.ajax({
            url:"fetch_data3.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, catagary:catagary,ptype:ptype,properties:properties,gender:gender},
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
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});

</script>

</body>

</html>

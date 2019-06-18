
<?php include 'con.php';?>
<?php
include('con1.php');

if(isset($_POST["action"]))
{
	$nearname1=$_POST['k1'];
	$type1=$_POST['k2'];
	//echo $type1;
	
$query = "SELECT * from near inner join post on post.nearid=near.nearid and  nearname='$nearname1'
";
   if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["catagary"]))
	{
		$brand_filter = implode("','", $_POST["catagary"]);
		$query .= "
		 AND catagary IN('".$brand_filter."')
		";
	}
	if(isset($_POST["ptype"]))
	{
		$ram_filter = implode("','", $_POST["ptype"]);
		$query .= "
		 AND ptype IN('".$ram_filter."')
		";
	}
	if(isset($_POST["properties"]))
	{
		$storage_filter = implode("','", $_POST["properties"]);
		$query .= "
		 AND properties IN('".$storage_filter."')
		";
	}

   if(isset($_POST["gender"]))
	{
		$storage_filter = implode("','", $_POST["gender"]);
		$query .= "
		 AND gender IN('".$storage_filter."')
		";
	}
$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			
 $output .= '
			<div>
			<p>
			<div class="item  col-xs-6 col-lg-8">
                  <div class="thumbnail thumbnail1">
                     <a href="des.php?kddsfwefwcwefvwvefwe='. $row['postid'].'" data-toggle="modal" ><img class="group list-group-image" src="postpic/'. $row['pathh'].'/'. $row['img1'].'" alt="no image found" width="150px" height="150px"></a>
                                           <div class="table-text">
                                                                <h4 ><a href="des.php?kddsfwefwcwefvwvefwe='. $row['postid'].'" title="Maruti Suzuki 800 AC" class="click-search"><span class="spancarname">'. $row['title'].'</span></a></h4>
                                                                <p class="gridViewPrice hide">
                                                                    <a href="des.php?kddsfwefwcwefvwvefwe='. $row['postid'].'">
                                                                        <span class="rupee-lac"><i class="fa fa-search"></i>₹7,000</span> 
                                                                    </a>
                                                                </p>
                                                                <div class="other-details">
                                                                
                                                                    <a href="des.php?kddsfwefwcwefvwvefwe='. $row['postid'].'">
                                                                      <span class="rupee-lac slprice"><?echo "price."?>'. $row['price'].'₹</span> 
                                                                    </a>  
                                <div class="clearfix"></div>                                  
                                                                    <a href="des.php?kddsfwefwcwefvwvefwe='. $row['postid'].'">
                                                                        <p class="listing-item-kms"><span class="slkms">'. $row['catagary'].'&nbsp;</span><span class="margin-left5 margin-right5">|</span><span class="fuel">'. $row['properties'].'</span><span class="margin-left5 margin-right5">|</span><span>'. $row['ptype'].'</span></p>
                                                                        <p class="listing-item-area"><span class="cityname"><i class="fa fa-map-marker"></i>&nbsp'. $row['nearname'].'
                                                                     </span></p>
                                                                        <p class="text-light-grey deliverytext"></p>
                                                                    </a>
                                                                </div>
         
                                                              <div class="clearfix"></div>
                                                                <div class="list-form">
                                                                    <div class="phone-info">
                                     <form action="des.php?kddsfwefwcwefvwvefwe="'. $row['postid'].'"method="post">
                                       <input type="text" class="phone" placeholder="send message.." required="">
                                     </form>
                                  </div>
                                  <div class="get-one"><a href="des.php?kddsfwefwcwefvwvefwe='. $row['postid'].'">send message<a></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                               
                                                            </div>
                    
                                                   </div>
                                        </div>
           
			';
	
	
 }
 }
else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>

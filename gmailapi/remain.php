   <div class="col-md-9 search-car-right-text w3">
              <div class="well well-sm">
                <strong>Display</strong>
                <div class="btn-group">
                  <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                  </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm two"><span
                   class="glyphicon glyphicon-th"></span>Grid</a>
                </div>
              </div>
                        <div id="products" class="row list-group">
   
            <?
            $x=0;
$sql = "SELECT postid  from post";
      $statement = $conn->prepare($sql);
  $statement->execute();
  $result = $statement->fetchAll();
  $total_row = $statement->rowCount();
  $output = '';
 foreach($result as $row)
    {


       $x++;
      echo $x;
 
}

for($i=$x;$i>$x-6;$i --)
{
  echo $i;
$sql1 = "select post.postid,post.pathh,post.img1,post.price,post.catagary,post.properties,post.ptype,near.nearname,post.title from post inner join near on near.nearid=post.nearid and postid='$i'";
$statement = $conn->prepare($sql1);
  $statement->execute();
  $result = $statement->fetchAll();
  $total_row = $statement->rowCount();
  $output = '';
  if($total_row > 0)
  {
    foreach($result as $row)
    {
$postid=$row['postid'];
 $pathh=$row["pathh"];
$price=$row["price"];
$title=$row["title"];
$catagary=$row["catagary"];
$img=$row["img1"];
$properties=$row["properties"];
$ptype=$row["ptype"];
$nearname=$row["nearname"];
?>
           <div class="item  col-xs-4 col-lg-4">
                  <div class="thumbnail thumbnail1">
                     <a href="des.php?kddsfwefwcwefvwvefwe=<?=$postid?>" data-toggle="modal" ><img class="group list-group-image" src="postpic/<?=$pathh?><?=$img?>" alt="no image found" width="150px" height="150px"></a>
                                           <div class="table-text">
                                                                <h4 ><a href="des.php?kddsfwefwcwefvwvefwe=<?=$postid?>" title="Maruti Suzuki 800 AC" class="click-search"><span class="spancarname"><?=$title?></span></a></h4>
                                                                <p class="gridViewPrice hide">
                                                                    <a href="des.php?kddsfwefwcwefvwvefwe=<?=$postid?>">
                                                                        <span class="rupee-lac"><i class="fa fa-search"></i>₹7,000</span> 
                                                                    </a>
                                                                </p>
                                                                <div class="other-details">
                                                                
                                                                    <a href="des.php?kddsfwefwcwefvwvefwe=<?=$postid?>">
                                                                      <span class="rupee-lac slprice"><?echo "price."?><?=$price?></span> 
                                                                    </a>  
                                <div class="clearfix"></div>                                  
                                                                    <a href="des.php?kddsfwefwcwefvwvefwe=<?=$postid?>">
                                                                        <p class="listing-item-kms"><span class="slkms"><?=$catagary?>&nbsp;</span><span class="margin-left5 margin-right5">|</span><span class="fuel"><?=$properties?></span><span class="margin-left5 margin-right5">|</span><span><?=$ptype?></span></p>
                                                                        <p class="listing-item-area"><span class="cityname"><i class="fa fa-map-marker"></i>&nbsp
                                                                     <?=$nearname?></span></p>
                                                                        <p class="text-light-grey deliverytext"></p>
                                                                    </a>
                                                                </div>
         
                                                              <div class="clearfix"></div>
                                                                <div class="list-form">
                                                                    <div class="phone-info">
                                     <form action="des.php?kddsfwefwcwefvwvefwe=<?=$postid?>" method="post">
                                       <input type="text" class="phone" placeholder="send message.." required="">
                                     </form>
                                  </div>
                                  <div class="get-one"><a href="des.php?kddsfwefwcwefvwvefwe=<?=$postid?>">send message<a></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                               
                                                            </div>
                    
                                                   </div>
                                        </div>
                                <?
 }
}

}

?>

                </div>
              </div>
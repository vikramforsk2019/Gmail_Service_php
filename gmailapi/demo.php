<?php include 'con.php';?>

<?
$sql = "select post.pathh,post.img1,post.img2,post.img3,post.img4,post.price,post.catagary,post.properties,post.bedrooms,near.nearname,
post.title,post.address,post.furnish,post.ptype,post.gender,near.location from post inner join near on near.nearid=post.nearid and postid='1'";
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
 }
}

?>





   <?php include 'con.php';?>
<? 
  session_start();
$user_check=$_SESSION['room']; 

if (!isset($_SESSION['room']))
 {
        /// your code here
header("Location:index.php");
    }

?>
<?php

if(isset($_POST['submit']))
{
$k1=$_POST['sm1'];
$k2=$_POST['sm2'];
$k3=$_POST['sm3'];
$k4=$_POST['sm4'];
$k5=$_POST['sm5'];
$k6=$_POST['sm7'];
$k7=$_POST['sm8'];
$k8=$_POST['sm9'];
$price=$_POST['price'];
$title=$_POST['title'];
$des=$_POST['des'];

if($k8=='nearby..')
{
header("Location:profile.php");
}


$sql = "SELECT nearid,cityid from near where nearname='$k8'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
 {
        $id1=$row["nearid"];
        $id2=$row["cityid"];
echo $id1."<br>";
echo $id2."<br>";
 }

} 
else 
{
    header("Location:profile.php");
}


$sql = "SELECT pid from profile where email='$user_check'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
 {
        $pid=$row["pid"];
      

 }

} 


$sql = "SELECT CURRENT_DATE() as date ";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
 {
        $date=$row["date"];
       echo $date;

 }

} 

$a = array();   
$n=20;
$x1=0;
$x2=0; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
  
 
$p=getName($n);
mkdir("/opt/lampp/htdocs/gmailapi/postpic/".$p."/", 0777) ;
    $targetDir = "/opt/lampp/htdocs/gmailapi/postpic/".$p."/";
    $allowTypes = array('jpg','png','jpeg','gif');
    $p2=$p."/";
echo "path   ".$p2."<br>";
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['files']['name'])))
{
        foreach($_FILES['files']['name'] as $key=>$val)
{
            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
          
                 $a[$x1] =$fileName;
                  echo $a[$x1]."<br>";
                  $x1++;
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes))
{
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath))
{
                    // Image db insert sql
                    $insertValuesSQL .= "('".$fileName."', NOW()),";
                }
else
{
                    $errorUpload .= $_FILES['files']['name'][$key].', ';
                }

            }
else
{
                $errorUploadType .= $_FILES['files']['name'][$key].', ';
            }
        }
        

    }else{
        $statusMsg = 'Please select a file to upload.';
    }
    
    // Display status message
    echo $statusMsg;
}
mysqli_query($conn,"insert into post(cityid,nearid,pid,catagary,ptype,gender,properties,bedrooms,furnish,title,email,price,img1,img2,img3,img4,date,address,pathh) values('$id2','$id1','$pid','$k1','$k2','$k3','$k4','$k5','$k6','$title','$user_check','$price','$a[0]','$a[1]','$a[2]','$a[3]','$date','$des','$p2')");
header("Location:profile.php");


?>













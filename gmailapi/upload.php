<?php
if(isset($_POST['submit']))
{
$p1=$_POST['data'];
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
mkdir("/opt/lampp/htdocs/room1/postpic/".$p."/", 0770) ;
    $targetDir = "/opt/lampp/htdocs/room1/postpic/".$p."/";
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
?>

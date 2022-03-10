<?php 
require 'conn/dbconnect.php';

session_start();
if(empty($_SESSION['un']))
{
	header("location:index.php?msg=logn first");
}

$v_id=$_REQUEST['v_id'];

//$catnm=$_POST["cat_nm"];
$pronm=$_POST["txt_pro_nm"];
$himg=$_POST['himg'];

$target_dir = "video/";

if(empty($_FILES["pro_image"]["name"]))
{	
	echo "ok";
}


$target_file = $target_dir . basename($_FILES["pro_image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
echo $imageFileType;
echo "<br>";

    		if (file_exists($target_file)) {
    			
    			echo "<br>Sorry, file already exists.";
 	   			$uploadOk = 0;
				
			}else{


			if ($uploadOk == 0) {
   				 echo "<br>Sorry, your file was not uploaded.";
			
			} else {
    			
    			if (move_uploaded_file($_FILES["pro_image"]["tmp_name"], $target_file)) {
		
					echo "<br>File Successfully Uploaded";
        			
					header("location:viewvideo.php?msg=Sorry, there was an error uploading your file");
        			
					unlink($himg);
        			
        			//echo "The file ". basename( $_FILES["pro_image" ]["name"]). " has been uploaded.";
        
    			} else {
					
					header("location:viewvideo.php?msg=Sorry, there was an error uploading your file");
        			echo "<br>Sorry, there was an error uploading your file.";
    			}
			}

			if($uploadOk != 0){
				
				$qry = "UPDATE video SET  v_nm = '".$pronm."', v_video = '".$target_file."' WHERE v_id ='".$v_id."'";
				
				$rs = mysqli_query($conn,$qry);
				if($rs)
				{
					echo "<br>video Update Successfully";
    				header("location:viewvideo.php?msg=video Sucessfully Added");
					
				}
				else{

					echo "<br>video not added";
    				header("location:viewvideo.php?msg=video Sucessfully Not Added");
				}
			}
			else
			{
				echo "<br>video not add";
			}

		}




?>
<?php 
require 'conn/dbconnect.php';
session_start();
if(empty($_SESSION['un']))
{
	header("location:index.php?msg=logn first");
}

$pronm=$_POST["txt_pro_nm"];
$prodec=$_POST["txt_pro_dec"];
//$propri=$_POST["txt_pro_price"];


$qry1="SELECT * FROM `product` WHERE p_name=$pronm";

$rs1=mysqli_query($conn,$qry1);

//$row11=mysqli_fetch_array($rs1);

if($rs1)
{
    header("location:addproduct.php?msg=Product Already Exits");
}
else
{

$target_dir = "images/";

				//img/abc.jpg
$target_file = $target_dir . basename($_FILES["pro_image"]["name"]);
$uploadOk = 1;

//echo $target_file;
//echo "<br>";
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
echo $imageFileType;
echo "<br>";
			/*if(isset($_POST["submit"])) 
			{
				$check = getimagesize($_FILES["pro_image"]["tmp_name"]);
    			
				echo ($check !== false);

    			if($check !== false) {
        			
        			echo "<br>File is an image - ".$check["mime"] . ".";
        			$uploadOk = 1;

    			} else {
        			echo "<br>File is not an image.";
        			$uploadOk = 0;
    			}
    		}*/

    		if (file_exists($target_file)) {
    			
    			echo "<br>Sorry, file already exists.";
 	   			$uploadOk = 0;
				
			}else{


			if ($uploadOk == 0) {
   				 echo "<br>Sorry, your file was not uploaded.";
			
			} else {
    			
    			if (move_uploaded_file($_FILES["pro_image"]["tmp_name"], $target_file)) {
        			
					        			echo "<br>File Successfully Uploaded";
        			
        			//echo "The file ". basename( $_FILES["pro_image" ]["name"]). " has been uploaded.";
        
    			} else {
        			echo "<br>Sorry, there was an error uploading your file.";
    			}
			}

			if($uploadOk != 0){
				
				$qry = "INSERT INTO `product` (`p_id`, `p_name`, `p_decs`,p_img) VALUES (NULL,'".$pronm."','".$prodec."','".$target_file."')";
				
				$rs = mysqli_query($conn,$qry);
				if($rs)
				{
					echo "<br>Product Add Successfully";
    				header("location:addproduct.php?msg=Product Sucessfully Added");
				}
				else{

					echo "<br>product not added";
    				header("location:addproduct.php?msg=Product Sucessfully Not Added");
				}
			}
			else
			{
				echo "<br>product not add";
			}

		}

}


?>
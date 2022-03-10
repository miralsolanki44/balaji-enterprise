

<?php

require 'conn/dbconnect.php';

$fn=$_POST["txt_fn"];
$ln=$_POST["txt_ln"];
$gen=$_POST["gender"];
$em=$_POST["txt_email"];
$mno=$_POST["txt_mnum"];
$pass=$_POST["txt_pass"];

$date=date("Y-m-d H:i:s");



$qry4="SELECT u_email from user_table WHERE u_email='".$em."'";

$rs12=mysqli_query($conn,$qry4);
$row=mysqli_fetch_row($rs12);
echo $row['u_email'];

if($row>0)
{
    header("location:sign up.php?msg=Email Is Already exits");
    
    echo "alredy Exits";

}
else
{
	$qrya = "INSERT INTO user_table (u_fname,u_lname,u_gen,u_email,u_mno,u_pass,u_date) VALUES('".$fn."','".$ln."','".$gen."','".$em."','".$mno."','".$pass."','".$date."')";

	$rsw = mysqli_query($conn,$qrya);
	if($rsw)
	{
	
		header("location:login.php?msg=your account has been registrator");
		//echo "User create Successfully";

	}
	else{

   	header("location:sign up.php?msg=Not Register");;

	}
}

?>
<?php 
	
include "deshboard.php";
	
require 'conn/dbconnect.php';

if(empty($_SESSION['un']))
{
	header("location:login.php?msg=first Login");
}
else
{
		$sql1="SELECT * FROM feedback";
		$rs1=mysqli_query($conn,$sql1);
	
}
?>
<center>view user
<table border="1">
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>contact</th>
<th>message</th>
<th>date</th>
<th>delete</th>
</tr>



<?php 
	while($row=mysqli_fetch_assoc($rs1))
	{
?>
<tr>
	<td><?php echo $row['f_id']?></td>
	<td><?php echo $row['f_nm']?></td>
	<td><?php echo $row['f_email']?></td>
	<td><?php echo $row['f_contact']?></td>
	<td><?php echo $row['f_message']?></td>
	<td><?php echo $row['f_date']?></td>
	<td><a href="delfeed.php?f_id=<?php echo $row['f_id'];?>">Delete</a></td>
</tr>

<?php }?>
</table>

<?php 
                    if(isset($_REQUEST['msg']))
                    {
                        echo $_REQUEST['msg'];
                    }
                    ?>

</center>

<?php 
	include "last.php";
?>

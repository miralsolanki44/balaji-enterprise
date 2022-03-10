<?php 
	
include "deshboard.php";
	
require 'conn/dbconnect.php';

if(empty($_SESSION['un']))
{
	header("location:login.php?msg=first Login");
}
else
{
		$sql1="SELECT * FROM user_table";
		$rs1=mysqli_query($conn,$sql1);
	
}
?>
<center>view user
<table border="1">
<tr>
<th> id</th>
<th> f name</th>
<th> l name</th>
<th> gen</th>
<th> email</th>
<th> mo no</th>
<th> pass</th>
<th> date</th>
<th> delete</th>
</tr>



<?php 
	while($row=mysqli_fetch_assoc($rs1))
	{
?>
<tr>
	<td><?php echo $row['u_id']?></td>
	<td><?php echo $row['u_fname']?></td>
	<td><?php echo $row['u_lname']?></td>
	<td><?php echo $row['u_gen']?></td>
	<td><?php echo $row['u_email']?></td>
	
	<td><?php echo $row['u_mno']?></td>
	<td><?php echo $row['u_pass']?></td>
	<td><?php echo $row['u_date']?></td>
	<td><a href="deluser.php?u_id=<?php echo $row['u_id'];?>">Delete</a></td>
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

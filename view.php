<?php
require "config.php";
$qur = "SELECT * FROM `stud1`";
$res = mysqli_query($con,$qur);
?>

<html>
<center>
<body>
	<table border="1px">
	<tr>
		<th> Select </th>
		<th> ID </th>
		<th> Name </th>
		<th> Email</th>
		<th> Birth Day</th>
		<th> Gender</th>
		<th> City</th>
		<th> Update</th>
		<th> Delete </th>
	</tr>
	<?php
	while ($row = mysqli_fetch_assoc($res))
	{
	?>
	<?php $id= $row['id'];?>
	<tr> 
	<td> <input type="checkbox" name="checkbox" id="chechbox"></td>
	<td><?php echo $id; ?>
	<td><?php echo  ['name']?>
	<td><?php  echo $row['email']?>
	<td><?php echo $row['dob']?>
	<td><?php  echo $row['gender']?>
	<td><?php echo $row['city']?>
	<td> <a href="update.php"<?php echo $id;?>>Update</td>
	<td> <a href="delete.php"<?php echo $id;?>>Delete</td>
	
	</tr>
	<?php }
	?>
	
	</table>

</body>

</center>
</html>

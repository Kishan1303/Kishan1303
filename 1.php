<!DOCTYPE html>
<html>
<head>

	
</head>
<body>
		<h2  align="center"> REGISTRATION FORM </h2>

<form action="insert.php" method="post" align="center">
<table>
	<tr>
		<td>Name : 
		<td><input type="text" name="name" id="name" value="" required>
	</tr>
	
	<tr>
		<td>E-mail :
		<td><input type="email" name="email" id="email" value="">
	</tr>

	<tr>
		<td>Birth Date :
		<td><input  type="date" name="dob" id="dob" value="" required>
	<tr>
		<td>Gender : 
		<td><input type="radio" name="gender" id="gender" value="male" required> Male
			<input type="radio" name="gender" id="gender" value="female" required> Female
	</tr>
		
	<tr>
		<td>City : 
		<td><input type="text" name="city" id="city" value="" required>
	</tr>
	
	<tr>
		<td><input type="submit" name="send" id="send" value="Send">
		<td><input type="reset" name="clear" id="clear" value="Clear">
	</tr>
</table>
</div>
</form>
</body>
</html>

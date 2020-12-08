<html>
<head>
	<title>Index Page</title>
	<?php require_once 'controller.php'; ?>
	<script src="validate_registration.js"> </script>
</head>
<body>
	 <form action="" onsubmit="return validate()" method="post">
	 	 <p id="test"> </p>
	 	 <table>
	 	 	<tr>
	 	 		<td>
	 	 			Name:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" id="name" name="name">
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td>
	 	 			Username:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" id="uname" name="uname">
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td>
	 	 			Password:
	 	 		</td>
	 	 		<td>
	 	 			<input type="Password" id="pass" name="pass">
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td>
	 	 			Email:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" id="mail" name="mail">
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td>
	 	 			Phone:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" id="phone" name="phone">
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td colspan="2" align="center">
	 	 			<input type="submit" name="register" value="register">
	 	 		</td>
	 	 	</tr>
	 	 </table>
	 </form>
</body>
</html>
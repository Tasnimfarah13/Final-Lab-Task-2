<html>
<head>
	<title>Index Page</title>
	<?php require_once 'controller.php'; ?>
	<script src = "validate_index.js"></script>
</head>
<body>
	 <form action="" onsubmit="return validate()" method="post">
	 	 <p id="test"> </p>
	 	 <table>
	 	 	<tr>
	 	 		<td>
	 	 			Username:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" name="username">
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td>
	 	 			Password:
	 	 		</td>
	 	 		<td>
	 	 			<input type="Password" name="pass">
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td colspan="2" align="center">
	 	 			<input type="submit" name="login" value="login">
	 	 		</td>
	 	 </table>
	 	 <a href="registration.php"> Need an account? Signup </a>
	 </form>
</body>
</html>
<html>
<head>
	<title>Dashboard</title>
	<?php require_once 'db.php'; ?>
</head>
<body>
	<fieldset>
    <table>
    	<tr>
    		<td align="center">
    			<b>Name</b>
    		</td>
    		<td align="center">
    			<b>Username</b>
    		</td>
    		<td align="center">
    			<b>Email</b>
    		</td>
    		<td align="center">
    			<b>Phone</b>
    		</td>
    	</tr>
        <?php 
            $q = "select * from users";
            $data = getResult($q);
            foreach ($data as $i) {
            	echo '<tr> <td> '.$i["name"].' </td> <td>'.$i["username"].' </td> <td>'.$i["email"].'</td> <td>'.$i["phone"].'</td> </tr>';
            }
        ?>
    </table>
    </fieldset>
</body>
</html>
<?php 
require_once('../db/db_Connect.php');
//require_once('../php/session.php');

$content=searchMod("");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../js/customerSearchFood.js"></script>
</head>
<body>
	<form action="../php/deleteMod.php" method="post">
	<font size="5px">
	<br>
	<a href="../views/Admin_ModeratorVerify.php" >Add Moderator</a>
	<br>
	<br>
	Search Moderators <input type="text" name="foodtype" id="foodtype">  <input type="button" value="Search" name="" onclick="load()"><br>
	<table>
	<tr>
		<td>
			<div id='show'>
			<?php
				echo "<table border=1>
					<tr>
						<td>username</td>
						<td>fullname</td>
						<td>email</td>
						<td>phone</td>
						<td>gender</td>
						<td>city</td>
						<td>Delete</td>
					</tr>";
					$n=0;
					while(count($content)>$n)
					{
						echo "<tr>
								<td>".$content[$n]['username']."</td>
								<td>".$content[$n]['fullname']."</td>
								<td>".$content[$n]['email']."</td>
								<td>".$content[$n]['phone']."</td>
								<td>".$content[$n]['gender']."</td>
								<td>".$content[$n]['city']."</td>
								<td>".'<input type="submit" name=username value='.$content[$n]['username'].' id="'.$content[$n]['username'].'">'."</td>
							</tr>";
						$n=$n+1;
					}

				echo "</table>";
			?>
			</div>
		</td>
		<td>
			<h3 id=insert>
		</td>
	</tr>
	</table>
	</font>
</form>
</body>
</html>
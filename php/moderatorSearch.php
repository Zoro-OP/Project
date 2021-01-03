<?php 
require_once('../db/db_Connect.php');



if(isset($_POST['foodtype']))
{

	//$content=searchFood($_POST['foodtype'],$_POST['area']);
	$content=searchMod($_POST['foodtype']);
}
else
{
	$content=searchMod('');
}
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
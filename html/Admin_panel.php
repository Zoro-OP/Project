<?php include "../php/admin_registration.php" ;?>


<?php
if(isset($_POST["modaretor"]))
	{
		header("Location: ../html/Admin_ModeratorVerify.php");
	}
	if(isset($_POST["Users"]))
	{
		header("Location: ../html/user.php");
	}
	
	?>

<html>
	<head>
		<title>Admin Panel</title>
  <link rel="stylesheet" href="../css/registration.css"></head>
	<body>

		<fieldset id="register_form" align= "center">
      <h1>Admin Panel</h1>

			<form action="" method="post"  >
				<table>
          <tr>


        </tr>

          <tr>
        <td></td><td></td>    <td colspan="10" align="right">

          <input type="submit" name="modaretor" value="Admin_ModeratorVerify">
          </td>


		   <td></td><td></td>    <td colspan="10" align="right">

          <input type="submit" name="user" value="User">
          </td>
		    <td></td><td></td>  
          </tr>
			</table>
			</form>
		</fieldset>
	</body>
</html>
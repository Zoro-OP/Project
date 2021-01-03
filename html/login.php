<?php include "../php/admin_index.php" ;

?>
<script src="js/login.js"></script>
<html>
	<head>
		<title>Admin Login</title>
		<link rel="stylesheet" href="../css/registration.css">
		
</head>
	<body>
			<?php include "navbar.php" ;?>

		<fieldset id="register_form" align= "center">
      <h1>Login</h1>

			<form name="myForm" action="" onsubmit="return validateForm()"  method="post" class="form-horizontal form-material">
				<table>

          <tr>
          <td style="text-align: center;"> Username:</td>
          <td style="text-align: center;"><input type="text" name="username"> </td><span><p id="username_error"></p></span>
          </tr>
          <tr>
          <td style="text-align: center;"> Password:</td>
          <td style="text-align: center;"><input type="password" name="password"> </td><span><p id="password_error"></p></span>
          </tr>

          <td colspan="2" align="right">
          <input type="submit" class="btn btn-outline-success" name="register" value="Login">
          </td>
          </tr>


					<tr>
						<td  align="left"> Not registered ? </td>
						<td><a href="user_registration.php" >Sign Up!</a></td>
					</tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>
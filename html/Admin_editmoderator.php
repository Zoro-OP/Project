<?php require_once "../php/admin_registration.php" ;
    
      $c= getUser($_GET["username"]);
	  
	 
	  

?>
<html>
	<head>
		<title>Moderator Verify</title>

	<body>
		<fieldset id="register_form" align= "center">
      <h1>Edit Moderator Info</h1>
	  
	    <link rel="stylesheet" href="../css/registration.css"></head>
	  
			<form action="" method="post"  >
				<table>
       
			<tr>
          <td style="text-align: left;"> User Name: </td>
          <td style="text-align: left;"><input type="text" name="username"></td>
          </tr>
          <tr>
		   <td style="text-align: left;"> Full Name: </td>
          <td style="text-align: left;"><input type="text" name="fullname"></td>
          </tr>
          <tr>
         
     
         
          <tr>
          <td  style="text-align: left;" >Gender:</td>
          <td><input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="Female">Female
          <span></span>
          </td>
          </tr>
          <tr>
          <td style="text-align: left;">Email:</td>
          <td style="text-align: left;"><input type="text" name="email" ></td>
          </tr>
		  <tr>
          <td style="text-align: left;">Date of Birth:</td>
          <td style="text-align: left;"><input type="text" name="email" ></td>
          </tr>
          <tr>
          <td style="text-align: left;">Contact No:</td>
          <td style="text-align: left;">
          <input type="text" name="phone_no"   >
          </td>
          </tr>
          <tr>
          <td style="text-align: left; ">
              <select name="city"  >
              <option disabled selected> Select City</option>

              <?php
               $city = array(
                                "Dhaka",
                                "Chittagong",
                                "Khulna",
                               
                            );
                            for ($m = 0;$m < 3;$m++)
                            {
                                echo "<option>  $city[$m] </option>";
                            }
                            ?>
         
		  </tr>
		  <tr>
          <td  align="center">
          <input type="submit" name="register" value="Verify">
          </td> 
		
		  <td colspan="2" align="center">
          <input type="submit" name="editmoderator" value="Update">
          </td>
		  
		  
          </tr>
				 </table>
			</form>
		</fieldset>
	</body>
</html>
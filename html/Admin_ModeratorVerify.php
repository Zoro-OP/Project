<?php
 
  $fullname = "";
  $err_fullname = "";
  $username = "";
  $err_user_name = "";
  $gender ="";
  $err_gender ="";
  $email = "";
  $err_email = "";
  $phone_no = "";
  $err_phone_no = "";
  $err_city  = "";
 
  if(isset($_POST["register"]))
  {
    if(empty($_POST["fullname"]))
    {
      $err_fullname = "*Required Fullname";
    }
    else{ $fullname = htmlspecialchars($_POST["fullname"]);}
    
    if(empty($_POST["username"]))
    {
      $err_user_name = "*Required Username";
    }
    else if(strlen($_POST["username"]) < 6)
    {
      $err_user_name = "*Atleast 6 char required";
    }
    else if(strpos($_POST["username"]," "))
    {
      $err_user_name = "*No space is allowed";
    }
    else{ $user_name = htmlspecialchars($_POST["username"]);}
    
    if(isset($_POST["gender"]))
    {
      $gender = $_POST["gender"];
    }
    else{$err_gender = "*Gender required";}
   
    if(empty($_POST["Email"]))
    {
      $err_email = "*Required Email";
    }
    else if(strpos($_POST["email"],"@"))
    {
      $flag = false;
      $pos = strpos($_POST["email"],"@");
      $str = $_POST["email"];
      for($i = $pos; $i < strlen($str); $i++)
      {
        if($str[$i] == "."){$flag = true;break;}
      }
      
      if($flag == true){$email = htmlspecialchars($_POST["email"]);}
     
      else{$err_email = "*Invalid email pattern";}
    }
    
    
    if(empty($_POST["phone_no"]))
    {
      $err_phone_no = "*Required contact number";
    }
    
    else if(!is_numeric($_POST["phone_no"]))
    {
      $err_phone_no = "*Required numeric charecter";
    }
   
    else
    {
       $phone_no = htmlspecialchars($_POST["number"]);
    }
  
    
    if(empty($_POST["city"]))
    {
      $err_address = "*Required city";
    }
    else{ $address_city = htmlspecialchars($_POST["city"]);}
    
  }
?>  

<html>
	<head>
		<title>Moderator Verify</title>
  <link rel="stylesheet" href="../css/registration.css"></head>
	<body>

		<fieldset id="register_form" align= "center">
      <h1>Moderator Verification</h1>
			<form action="" method="post"  >
				<table>
          <tr>
		      <tr>
					<td><h1><p align="right"><b>Details of Moderator Applicants: </b></p></h1></td>
					<td>
					<textarea ></textarea>
					</td>
				  </tr>
				  <tr></tr>
	        <tr>
					<td><h2><p align="left"><b>Verify/Add/Delete/Update : </b></p></h2></td>
					<td>
						
					</td>
				  </tr>
          <td style="text-align: left;"> FullName: </td>
          <td style="text-align: left;"><input type="text" name="fullname" value=<?php echo $fullname; ?>>
          <span><?php echo $err_fullname; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: left;"> Username:</td>
          <td style="text-align: left;"><input type="text" name="username" value=<?php echo $username; ?>><span><?php echo $err_user_name; ?></span></td>
          </tr>
     
         
          <tr>
          <td  style="text-align: left;" >Gender:</td>
          <td><input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="Female">Female
          <span><?php echo $err_gender; ?></span>
          </td>
          </tr>

          <tr>
          <td style="text-align: left;"> Email:</td>
          <td style="text-align: left;"><input type="text" name="email" value=<?php echo $email; ?>><span><?php echo $err_email; ?></span></td>
          </tr>

          <tr>
          <td style="text-align: left;">Contact No:</td>
          <td style="text-align: left;">
          <input type="text" name="phone_no" value=<?php echo $phone_no; ?>> <span><?php echo $err_phone_no; ?></span>

          </td>
          </tr>

          <tr>
          <td style="text-align: left;">City: </td>
          <td style="text-align: left; ">
          <select name="city"  >
          <option disabled selected> Select City</option>
          </select> <span><?php echo $err_city; ?></span>
          </td>
          </tr>
      
          <tr>
		      </tr>
		      <tr>
          <td  align="center">
          <input type="submit" name="register" value="Verify">
          </td> 
          <td  align="right">
          <input type="submit" name="register" value="Add">
          </td>
          <td  align="center">
          <input type="submit" name="register" value="Delete">
          </td>
          <td  align="left">
          <input type="submit" name="register" value="Update">
          </td>
    
          </tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>

<?php
 
  $fullname = "";
  $err_fullname = "";
  $username = "";
  $err_user_name = "";
  $password = "";
  $err_password = "";
  $confirmpassword  = "";
  $err_confirm_password = "";
  $email = "";
  $err_email = "";
  $phone_no = "";
  $err_phone_no = "";
  $err_city  = "";
  $gender ="";
  $err_gender ="";

  
  if(isset($_POST["register"]))
  {
    if(empty($_POST["fullname"]))
    {
      $err_fullname = "*Required fullname";
    }
    else{ $fullname = htmlspecialchars($_POST["fullname"]);}
    
    if(empty($_POST["username"]))
    {
      $err_user_name = "*Required username";
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
    
    if(!empty($_POST["password"]))
    {
      if(strlen($_POST["password"]) >= 8)
      {
        if(!(strtolower($_POST["password"]) == $_POST["password"]) && (!(strtoupper($_POST["password"]) == $_POST["password"])))
        {
          $hasNumber = false;
          $num_arr = array("0","1","2","3","4","5","6","7","8","9");
          $pass =htmlspecialchars($_POST["password"]);
          for($i = 0; $i < strlen($pass); $i++)
          {
            for($j = 0; $j <10; $j++)
            {
              if($pass[$i]== $num_arr[$j])
              {
                $hasNumber = true;
                break;
              }
            }
          }
          if($hasNumber == true)
          {
            if(strpos($_POST["password"], "#") || strpos($_POST["password"], "?"))
            {
              $password = htmlspecialchars($_POST["password"]);
            }
            else{$err_password = "*Atleast one special character # or ? is required";}
          }
          else{$err_password = "*Atleast one digit is required";}
        }
        else{$err_password = "*Upper and lower case character required";}
      }
      else{$err_password = "*Minimum password length is 8";}
    }
    else{$err_password = "*Password required";}

    if($_POST["password"] != htmlspecialchars($_POST["ConfirmPassword"]))
    {
      $err_confirm_password = "*Password not matched";
    }
    
    if(empty($_POST["Email"]))
    {
      $err_email = "*Required email";
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
    
  
    
    if(isset($_POST["gender"]))
    {
      $gender = $_POST["gender"];
    }
    else{$err_gender = "*Gender required";}
  }
    
?>  


<html>
  <head>
    <title>Admin Registration</title>
  <link rel="stylesheet" href="../css/registration.css"></head>
  <body>

    <fieldset id="register_form" align= "center">
      <h1>Admin Registration</h1>

      <form action="" method="post"  >
        <table>
          <tr>
          <td style="text-align: left;"> Full Name: </td>
          <td style="text-align: left;"><input type="text" name="fullname" value=<?php echo $fullname; ?>>
          <span><?php echo $err_fullname; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: left;"> Username:</td>
          <td style="text-align: left;"><input type="text" name="username" value=<?php echo $username; ?>><span><?php echo $err_user_name; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: left;"> Password:</td>
          <td style="text-align: left;"><input type="password" name="password" value=<?php echo $password; ?>><span><?php echo $err_password; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: left;"> Confirm Password:</td>
          <td style="text-align: left;"><input type="password" name="ConfirmPassword" value=<?php echo $confirmpassword; ?>><span><?php echo $err_confirm_password; ?></span></td>
          </tr>
          <tr>

          <td  style="text-align: left;" >Gender:</td>

          <td><input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="Female">Female
          <span><?php echo $err_gender; ?></span>
          </td>
          </tr>

          <tr>
          <td style="text-align: left;">Email:</td>
          <td style="text-align: left;"><input type="text" name="email" value=<?php echo $email; ?>><span><?php echo $err_email; ?></span></td>
          </tr>

          <tr>
          <td style="text-align: left;">Contact No:</td>
          <td style="text-align: left;">
          <input type="text" name="phone_no"   value=<?php echo $phone_no; ?>> <span><?php echo $err_phone_no; ?></span>

          </td>
          </tr>

          <tr>
          <td style="text-align: left;">City: </td>
          <td style="text-align: left; ">
              <select name="city"  >
              <option disabled selected> Select City</option>

              <?php //include_once "../php_files/city.php" ;?>
            </select> <span><?php echo $err_city; ?></span>
          </td>
          </tr>
          <tr>
          <td colspan="2" align="center">
          <input type="submit" name="register" value="Register">
          </td>
          </tr>
        </table>
      </form>
    </fieldset>
  </body>
</html>

<?php include_once "../php/admin_registration.php" ;?>
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
          <td style="text-align: left;"><input type="text" name="fullname" value=<?php echo $fullname; ?>><span><?php echo $error_fullname; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: left;"> Username:</td>
          <td style="text-align: left;"><input type="text" name="username" value=<?php echo $username; ?>><span><?php echo $error_username; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: left;"> Password:</td>
          <td style="text-align: left;"><input type="password" name="password" value=<?php echo $password; ?>><span><?php echo $error_password; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: left;"> Confirm Password:</td>
          <td style="text-align: left;"><input type="password" name="password_repeated" value=""><span><?php echo $error_confirm_password; ?></span></td>
          </tr>
          <tr>

          <td  style="text-align: left;" >Gender:</td>

          <td><input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="Female">Female
          <span><?php echo $error_gender; ?></span>
          </td>
          </tr>

          <tr>
          <td style="text-align: left;">Email:</td>
          <td style="text-align: left;"><input type="text" name="email" value=<?php echo $email; ?> ><span><?php echo $error_email; ?></span></td>
          </tr>

          <tr>
          <td style="text-align: left;">Contact No:</td>
          <td style="text-align: left;">
          <input type="text" name="phone"   value=<?php echo $phone; ?>> <span><?php echo $error_phone_no; ?></span>

          </td>
          </tr>

          <tr>
          <td style="text-align: left;">City: </td>
          <td style="text-align: left; ">
              <select name="city"  >
              <option disabled selected> Select City</option>

              <?php
               $city = array(
                                "Dhaka",
                                "Chittagong",
                                "Khulna",
                                "Rajshahi",
                                "Barisal",
                                "Sylhet",
                                "Mymensingh",
                                "Rangpur",
                               
                            );
                            for ($m = 0;$m < 8;$m++)
                            {
                                echo "<option>  $city[$m] </option>";
                            }
                            ?>
            </select> <span><?php echo $error_city; ?></span>
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

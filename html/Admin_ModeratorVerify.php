<?php include "../php/Admin_registration.php" ;?>
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
          <td><h3><p align="right"><b>Details of Moderator Applicants: </b></p></h3></td>
          <td>
            <textarea ></textarea>
          </td>
        </tr>
        <tr></tr>
          <tr>
          <td>
            
          </td>
        </tr>
          <td style="text-align: left;"> Full Name: </td>
          <td style="text-align: left;"><input type="text" name="fullname"></td>
          </tr>
          <tr>
          <td style="text-align: left;"> Username:</td>
          <td style="text-align: left;"><input type="text" name="username" ></td>
          </tr>
     
         
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
          <td style="text-align: left;">Contact No:</td>
          <td style="text-align: left;">
          <input type="text" name="phone_no"   >

          </td>
          </tr>

          <tr>
          <td style="text-align: left;">City: </td>
          <td style="text-align: left; ">
              <select name="city"  >
              <option disabled selected> Select City</option>

           
            </select> <span></span>
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
          <input type="submit" name="register" value="Update">
          </td>
      <td colspan="2" align="left">
          <input type="submit" name="register" value="Delete">
          </td>
       </tr>
        </table>
      </form>
    </fieldset>
  </body>
</html>

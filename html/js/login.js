function validateForm() {
 var name=document.myForm.username.value;
  var password =document.myForm.password.value;
 var haserror = 0;
  if (name == "") {
 
     document.getElementById("username_error").innerHTML="Username can't be blank";
     haserror = 1;
 
  }
    if (password == "") {
 
     document.getElementById("password_error").innerHTML="Password can't be blank";
     haserror = 1;
 
  }
   if (haserror==1){
    return false;
  }

  return true;
}

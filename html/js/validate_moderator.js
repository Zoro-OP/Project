function checkUser(username){

  var xhr =new XMLHttpRequest();

  debugger;
  xhr.onreadystatechange=function(){
    if(this.readyState == 4 && this.status == 200)
    {
      document.getElementById("username_error").innerHTML=this.responseText;
          document.getElementById("username_error").style["color"] = "red";
    }
  };
  xhr.open("GET","../html/checkUsername.php?u="+username.value,true);
  xhr.send();
}


function validateform(){
var name=document.registerform.fullname.value;
var username=document.registerform.username.value;
var password = document.registerform.password.value;
var password_repeated = document.registerform.password_repeated.value;
var gender = document.registerform.gender.value;
var phone =document.registerform.phone_no.value;
var email = document.registerform.email.value;
var address = document.registerform.address.value;
var city = document.registerform.city.value;
var state = document.registerform.state.value;
var haserror = true ;

console.log("hello");

debugger;

if (address==null || address==""){

    document.getElementById("address_error").innerHTML="Address can't be blank";
    document.getElementById("address_label").focus();
    document.getElementById("address_error").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("address_error").innerHTML="";
}
if (city==null || city=="Select City"){

    document.getElementById("city_error").innerHTML="City can't be blank";
    document.getElementById("city").focus();
     document.getElementById("city_error").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("city_error").innerHTML="";
}
if (state==null || state=="Select State"){

    document.getElementById("state_error").innerHTML="State can't be blank";
    document.getElementById("state").focus();
     document.getElementById("state_error").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("state_error").innerHTML="";
}


if (phone==null || phone==""){

    document.getElementById("phone_error").innerHTML="Phone can't be blank";
    document.getElementById("phone_no").focus();
     document.getElementById("phone_error").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("phone_error").innerHTML="";
}

if (gender==null || gender==""){

    document.getElementById("gender_error").innerHTML="Gender can't be blank";
    document.getElementById("gender").focus();
     document.getElementById("gender_error").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("gender_error").innerHTML="";
}

if (email==null || email==""){

    document.getElementById("email_error").innerHTML="Email can't be blank";
    document.getElementById("email").focus();
     document.getElementById("email_error").style["color"] = "red";
  haserror = false;
}
else {
  document.getElementById("email_error").innerHTML="";
}


if (password==null || password==""){

    document.getElementById("password_error").innerHTML="Password can't be blank";
    document.getElementById("password").focus();
     document.getElementById("password_error").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("password_error").innerHTML="";
}

debugger;

if (password_repeated==null || password_repeated==""){

    document.getElementById("password_mismatch_error").innerHTML="Retype your password";
    document.getElementById("password_repeated").focus();
     document.getElementById("password_mismatch_error").style["color"] = "red";

  haserror = false;

}
if (password.valueOf() != password_repeated.valueOf()){
  document.getElementById("password_mismatch_error").innerHTML="Passwords do not match.";
  document.getElementById("password_repeated").focus();
   document.getElementById("password_mismatch_error").style["color"] = "red";
}
else {
  document.getElementById("password_mismatch_error").innerHTML="";
}



if (name==null || name==""){

    document.getElementById("name_error").innerHTML="Name can't be blank";
    document.getElementById("fullname").focus();
     document.getElementById("name_error").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("name_error").innerHTML="";
}


if (username==null || username==""){

    document.getElementById("username_error").innerHTML="Username can't be blank";
    document.getElementById("fullname").focus();
     document.getElementById("username_error").style["color"] = "red";

  haserror = false;

}
else {
  document.getElementById("username_error").innerHTML="";
}


console.log(haserror);


return haserror;


}

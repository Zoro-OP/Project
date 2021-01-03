
function cities(){
  		var xhttp = new XMLHttpRequest();

      	xhttp.onreadystatechange=function(){
          if(this.readyState == 4 && this.status == 200 ){
				document.getElementById("city").innerHTML = this.responseText;
			}
    }
    xhttp.open("GET","../php/city.php");
    xhttp.send();

}
function cities2(){
  		var xhttp = new XMLHttpRequest();

      	xhttp.onreadystatechange=function(){
          if(this.readyState == 4 && this.status == 200 ){
				document.getElementById("city2").innerHTML = this.responseText;
			}
    }
    xhttp.open("GET","../php/city.php");
    xhttp.send();

}

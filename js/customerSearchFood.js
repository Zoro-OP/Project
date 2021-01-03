function load()
{
	var foodtype = document.getElementById('foodtype').value;
	var xhttp = new XMLHttpRequest();
	//xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.open('POST', '../php/moderatorSearch.php', true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.send('foodtype='+foodtype);
	xhttp.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			if(this.responseText != "")
			{
				document.getElementById('show').innerHTML = this.responseText;
				//alert(this.responseText);
			}
			else
			{
				document.getElementById('show').innerHTML = "";
			}
			
		}	
	}
	document.getElementById('show').innerHTML = "";		
}

function deleteMod(String) 
{
	//alert("item "+itemid);
	//alert("restaurant "+resid);
	
	document.getElementById('insert').innerHTML = String+"BOD";

	/*var xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../php/deleteMod.php', true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.send('username='+username);
	xhttp.onreadystatechange = function ()
	{
	if(this.readyState == 4 && this.status == 200)
	{
		if(this.responseText != "")
		{
			document.getElementById('insert').innerHTML = this.responseText;
			//alert(this.responseText);
		}
		else
		{
			document.getElementById('insert').innerHTML = "";
		}
		
	}	
	}
	
	else
	{
		document.getElementById('insert').innerHTML = "Quantity cannot be empty";
	}*/
}
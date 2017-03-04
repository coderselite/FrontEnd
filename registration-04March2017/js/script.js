function checkForm()
{
//fetching values from all input fields and storing them in variables
    var firstName = document.getElementById("firstName1").value;
    var lastName = document.getElementById("lastName1").value;
    var email = document.getElementById("email1").value;
    var mobile = document.getElementById("mobile1").value; 
    var address = document.getElementById("address1").value;
    var userPassword = document.getElementById("userPassword1").value;
	
//Check input Fields Should not be blanks.
    if (firstName == '' || lastName == '' || email == '' || mobile == '' || address == '' || userPassword == ''  ) 
    {
        alert("Fill All Fields");
    }

    else
    {
	
	//Notifying error fields
    var firstName1 = document.getElementById("firstName");
    var lastName1 = document.getElementById("lastName");
    var email1 = document.getElementById("email");
    var mobile1 = document.getElementById("mobile"); 
    var address1 = document.getElementById("address");
    var userPassword1 = document.getElementById("userPassword");
	
	//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
        if (firstName1.innerHTML == 'Must be 3+ letters' || lastName1.innerHTML == 'Must be 3+ letters' || email1.innerHTML == 'Invalid email' || mobile1.innerHTML == 'Must be 10 letters'  address1.innerHTML == 'Password too short' || userPassword1.innerHTML == 'Password too short') 
        {
            alert("Fill Valid Information");
        }
        else 
        {
		//Submit Form When All values are valid.
            document.getElementById("register-form").submit();
        }
    }
}

//AJAX Code to check  input field values when onblur event triggerd.
function validate(field, query)
{
	var xmlhttp;
	
if (window.XMLHttpRequest)
  {// for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }	
  
    xmlhttp.onreadystatechange = function()
    {
        if (xmlhttp.readyState != 4 && xmlhttp.status == 200)
        {
            document.getElementById(field).innerHTML = "Validating..";
        }
        else if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById(field).innerHTML = xmlhttp.responseText;
        }
        else
        {
            document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
        }
    }
    xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
    xmlhttp.send();
}
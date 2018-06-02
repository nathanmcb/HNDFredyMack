//code for js form input testing


function validate()
{
	var result = validateFirstname() + validateLastname() + validateAddressTF() + validateTownTF() + validateCountyTF() + validatePostcodeTF() + validateAddressDT() + validateTownDT() + validateCountyDT() + validatePostcodeDT() + validateDeliveryDate();
	
	if (result == "")
	{
		return true;
	}
	else
	{
		alert(result);
		return false;
	}
}

//Function to check for blank field in firstname 
function validateFirstname()
{
	var firstName = document.getElementById('FirstName').value;
	if (firstName.length == 0)
	{
		return "Enter your firstname\n";
	}
		else 
	{
		return "";
	}
}

//Function to check for blank field in lastname 
function validateLastname()
{
	var lastName = document.getElementById('LastName').value;
	if (lastName.length == 0)
	{
		return "Enter your lastname\n";
	}
		else 
	{
		return "";
	}
}

//Function to check for correct email
function validateEmail(Email) {
    var lastName = document.getElementById('Email').value;
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validate() {
  $("#result").text("");
  var email = $("Email").val();
  if (validateEmail(email)) {
    return "";
  } else {
    $("#result").text("This is not a valid email.");
  }
  return false;
}


//Taking From~~~~~~~





//Function to check for blank field in address 
function validateAddressTF()
{
	var Address = document.getElementById('AddressTF').value;
	if (Address.length == 0)
	{
		return "Enter your address\n";
	}
		else 
	{
		return "";
	}
}

//Function to check for blank field in address 
function validateTownTF()
{
	var Address = document.getElementById('TownTF').value;
	if (Address.length == 0)
	{
		return "Enter the town in Taking From\n";
	}
		else 
	{
		return "";
	}
}

//Function to check for blank field in address 
function validateCountyTF()
{
	var Address = document.getElementById('CountyTF').value;
	if (Address.length == 0)
	{
		return "Enter the county in Taking From\n";
	}
		else 
	{
		return "";
	}
}


//Function to check for blank field in postcode 
function validatePostcodeTF()
{
	var Postcode = document.getElementById('PostCodeTF').value;
	if (Postcode.length == 0)
	{
		return "Enter your postcode in Taking From\n";
	}
		else 
	{
		return "";
	}
}



//Delivering To~~~~~



//Function to check for blank field in address 
function validateAddressDT()
{
	var Address = document.getElementById('AddressDT').value;
	if (Address.length == 0)
	{
		return "Enter your address\n";
	}
		else 
	{
		return "";
	}
}

//Function to check for blank field in address 
function validateTownDT()
{
	var Address = document.getElementById('TownDT').value;
	if (Address.length == 0)
	{
		return "Enter the town in Taking From\n";
	}
		else 
	{
		return "";
	}
}

//Function to check for blank field in address 
function validateCountyDT()
{
	var Address = document.getElementById('CountyDT').value;
	if (Address.length == 0)
	{
		return "Enter the county in Taking From\n";
	}
		else 
	{
		return "";
	}
}


//Function to check for blank field in postcode 
function validatePostcodeDT()
{
	var Postcode = document.getElementById('PostCodeDT').value;
	if (Postcode.length == 0)
	{
		return "Enter your postcode in Taking From\n";
	}
		else 
	{
		return "";
	}
}



//Function to check for blank field in delivery date 
function validateDeliveryDate()
{
	var deliveryDate = document.getElementById('DeliveryDate').value;
	if (deliveryDate.length == 0)
	{
		return "Enter your delivery date\n";
	}
		else 
	{
		return "";
	}
}









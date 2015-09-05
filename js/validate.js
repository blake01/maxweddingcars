function validate(form) {
	fail  = validateName(form.name.value)
	fail += validateEmail(form.email.value)
	fail += validateTele(form.telephone.value)
	fail += validateCars(form["car[]"][0],form["car[]"][1],form["car[]"][2])
	fail += validateDate(form.date1.value,form.date2.value,form.date3.value)
	fail += validateAddress(form.addressLine1.value)
	fail += validatePostcode(form.postcode.value)
	fail += validateVenue(form.destination1.value)
	if (fail == "") return true
	else { alert(fail); return false }
}

function validateName(field) {
	if (field == "") return "No Name was entered.\n"
	return ""
}

function validateTele(field) {
	if (!checkUKTelephone (field)) {
     return telNumberErrors[telNumberErrorNo]+'\n'
  }
  return "";
  }
 
 
function validateCars(car1,car2,car3) {
	if (!car1.checked && !car2.checked && !car3.checked) return "Please Select at least One Car.\n"
	return ""
}


function validateEmail(field) {
	if (field == "") return "No Email Address was entered.\n"
		else if (!((field.indexOf(".") > 0) &&
			       (field.indexOf("@") > 0)) ||
			       /[^a-zA-Z0-9.@_-]/.test(field))
		return "The Email Address is Invalid.\n"
	return ""
}

function validateDate(day,month,year) {
	var d = new Date();
	var this_day = d.getDate();
	var this_month = d.getMonth()+1; //1-12
	var this_year = d.getFullYear();
	if (day==this_day && month==this_month && year==this_year) return "You have chosen today's date - please select the desired date of hire.\n"
	else if (day>29 && month==2) return "The Date is invalid.\n"
	else if (day>30 && (month==9 || month ==4 || month==6 || month==11)) return "The Date is Invalid.\n"
	else return ""
}

function validateAddress(field) {
	if (field == "") return "Please Fill In Address Line 1.\n"
	return ""}
	
function validatePostcode(field) {
	if (field.length<4) return "Please Enter a Full Valid Postcode.\n"
	return ""}
	
function validateVenue(field) {
	if (field == '') return "Please Enter a Wedding/Ceremony venue.\n"
	return ""}
	

// TELEPHONE CHECK ADDITIONAL CODE....................................

function checkUKTelephone (telephoneNumber) {

  // Convert into a string and check that we were provided with something
  var telnum = telephoneNumber + " ";
  if (telnum.length == 1)  {
     telNumberErrorNo = 1;
     return false
  }
  telnum.length = telnum.length - 1;
  
  // Don't allow country codes to be included (assumes a leading "+")
  var exp = /^(\+)[\s]*(.*)$/;
  if (exp.test(telnum) == true) {
     telNumberErrorNo = 2;
     return false;
  }
  
  // Remove spaces from the telephone number to help validation
  while (telnum.indexOf(" ")!= -1)  {
    telnum = telnum.slice (0,telnum.indexOf(" ")) + telnum.slice (telnum.indexOf(" ")+1)
  }
  
  // Remove hyphens from the telephone number to help validation
  while (telnum.indexOf("-")!= -1)  {
    telnum = telnum.slice (0,telnum.indexOf("-")) + telnum.slice (telnum.indexOf("-")+1)
  }  
  
  // Now check that all the characters are digits
  exp = /^[0-9]{10,11}$/;
  if (exp.test(telnum) != true) {
     telNumberErrorNo = 3;
     return false;
  }
  
  // Now check that the first digit is 0
  exp = /^0[0-9]{9,10}$/;
  if (exp.test(telnum) != true) {
     telNumberErrorNo = 4;
     return false;
  }
	
	// Disallow numbers allocated for dramas.
	 
  // Array holds the regular expressions for the drama telephone numbers
  var tnexp = new Array ();
	tnexp.push (/^(0113|0114|0115|0116|0117|0118|0121|0131|0141|0151|0161)(4960)[0-9]{3}$/);
	tnexp.push (/^02079460[0-9]{3}$/);
	tnexp.push (/^01914980[0-9]{3}$/);
	tnexp.push (/^02890180[0-9]{3}$/);
	tnexp.push (/^02920180[0-9]{3}$/);
	tnexp.push (/^01632960[0-9]{3}$/);
	tnexp.push (/^07700900[0-9]{3}$/);
	tnexp.push (/^08081570[0-9]{3}$/);
	tnexp.push (/^09098790[0-9]{3}$/);
	tnexp.push (/^03069990[0-9]{3}$/);
	
	for (var i=0; i<tnexp.length; i++) {
    if ( tnexp[i].test(telnum) ) {
      telNumberErrorNo = 5;
      return false;
    }
	}
  
  // Finally check that the telephone number is appropriate.
  exp = (/^(01|02|03|05|070|071|072|073|074|075|07624|077|078|079)[0-9]+$/);
	if (exp.test(telnum) != true) {
     telNumberErrorNo = 5;
     return false;
  }
  
  // Telephone number seems to be valid - return the stripped telehone number  
  return telnum;
}
var telNumberErrorNo = 0;
var telNumberErrors = new Array ();
telNumberErrors[0] = "Valid UK telephone number";
telNumberErrors[1] = "No Telephone Number was entered";
telNumberErrors[2] = "UK telephone number without the country code, please";
telNumberErrors[3] = "UK telephone numbers should contain 10 or 11 digits";
telNumberErrors[4] = "The telephone number should start with a 0";
telNumberErrors[5] = "The telephone number is either invalid or inappropriate";


document.getElementById("registration").onsubmit = validate;
function validate() {

var elt = document.getElementById("registration");

var userName = elt.userName.value;
var password = elt.password.value;
var repeat = elt.repeat.value;

 var re1 = /^[A-Za-z]{1}[A-Za-z\d]{5,9}$/;
 var re2 = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{6,10}$/;
    
    if(userName ==""||!re1.test(userName)||password ==""||!re2.test(password)||repeat ==""||password !== repeat){
     window.alert("Invalid username or password.");
        return false;
    }else{
    
        return true;  
    }



}


  // Get the modal
  var modal = document.getElementById('id01');
  var modal = document.getElementById('id02');
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  } 
 //  password validation
 
 var myInput = document.getElementById("pas1");
 var letter = document.getElementById("letter");
 var capital = document.getElementById("capital");
 var number = document.getElementById("number");
 var length = document.getElementById("length");
 
 // When the user clicks on the password field, show the message box
 myInput.onfocus = function() {
   document.getElementById("message").style.display = "block";
 }
 
 // When the user clicks outside of the password field, hide the message box
 myInput.onblur = function() {
   document.getElementById("message").style.display = "none";
 }
 
 // When the user starts to type something inside the password field
 myInput.onkeyup = function() {
   // Validate lowercase letters
   var lowerCaseLetters = /[a-z]/g;
   if(myInput.value.match(lowerCaseLetters)) {  
     letter.classList.remove("invalid");
     letter.classList.add("valid");
   } else {
     letter.classList.remove("valid");
     letter.classList.add("invalid");
   }
   
   // Validate capital letters
   var upperCaseLetters = /[A-Z]/g;
   if(myInput.value.match(upperCaseLetters)) {  
     capital.classList.remove("invalid");
     capital.classList.add("valid");
   } else {
     capital.classList.remove("valid");
     capital.classList.add("invalid");
   }
 
   // Validate numbers
   var numbers = /[0-9]/g;
   if(myInput.value.match(numbers)) {  
     number.classList.remove("invalid");
     number.classList.add("valid");
   } else {
     number.classList.remove("valid");
     number.classList.add("invalid");
   }
   
   // Validate length
   if(myInput.value.length >= 8) {
     length.classList.remove("invalid");
     length.classList.add("valid");
   } else {
     length.classList.remove("valid");
     length.classList.add("invalid");
   }
 }
// Show Password
 function myFunction1() {
  var x = document.getElementById("pas1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction2() {
  var x = document.getElementById("pas2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  // Automatic Slideshow - change image every 3 seconds
  var myIndex = 0;
  carousel();
  
  function carousel() {
    var i;
    var x = document.getElementsByClassName("Slides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
  }

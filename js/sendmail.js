
  
  function Validatechname() {

  var chname = document.getElementById("cname").value;
      var nameformat =[A-Za-z];
      if(chname.match(nameformat)) {
            form.classList.add('valid');
            form.classList.remove('invalid');
            chname_err.innerHTML ="Valid child name";
            chname_err.style.color = "#00ff00";

      }
      else {
            form.classList.remove('valid');
            form.classList.add('invalid');
            chname_err.innerHTML ="You have entered an invalid name !!, please enter a valid name";
            chname_err.style.color = "#ff0000";
      }

  }

  function Validatepname() {
      var pname = document.getElementById("pname").value;
      var nameformat =[A-Za-z];
      if(pname.match(nameformat)) {
        form.classList.add('valid');
            form.classList.remove('invalid');
            pname_err.innerHTML ="Valid parent name";
            pname_err.style.color = "#00ff00";

      }
      else {
            form.classList.remove('valid');
            form.classList.add('invalid');
            pname_err.innerHTML ="Error !! You have entered an invalid name!, please enter a valid name";
            pname_err.style.color = "#ff0000";
      }
  }

    function ValidateEmail() {
     // var form = document.getElementById("form");
    
      var email = document.getElementById("email").value;

        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (email.match(mailformat)) {
            form.classList.add('valid');
            form.classList.remove('invalid');
            pemail_err.innerHTML ="Valid email address!";
            pemail_err.style.color = "#00ff00";
                //document.form1.text1.focus();
                // true;
        } 
        
        else {
            form.classList.remove('valid');
            form.classList.add('invalid');
            pemail_err.innerHTML ="Error !! You have entered an invalid email address!, please enter a valid email";
            pemail_err.style.color = "#ff0000";
            //document.form1.email.focus();
           // return false;
            }
        }


 
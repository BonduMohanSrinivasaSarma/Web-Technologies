function formvalidate()
{
    var fname=document.Register.Name;
    var coleg=document.Register.College;
    var telep=document.Register.Telepho;
    var cou=document.Register.course;
    var mail=document.Register.mailid;

    if(namevalid(fname))
    {
        if(gender())
        {
            if(colegva(coleg))
            {
                if(mailv(mail))
                {
                    if(tele(telep))
                    {
                        if(cours(cou))
                        {
    
                        }
                    }
                } 
            }
        }
    }
}
function namevalid(fname)
{
    var len=fname.value.length;
    if(len==0)
    {
        alert("Name cannot be empty");
        fname.focus();
        return false;
    }
    return true
}
function gender()
{
    var radios = document.getElementsByName("gender");
    var formValid = false;

    var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) formValid = true;
        i++;        
    }

    if (!formValid) alert("Please Select Gender");
    return formValid;
}

function mailv(mail)
{
    if(mail.value.length==0)
    {
        alert("Mail cannot be empty");
        mail.focus();
        return false;
    }
    return true;
}

function colegva(coleg)
{
    if(coleg.value.length==0)
    {
        alert("College Name cant be empty");
        coleg.focus();
        return false;
    }
    return true;
}
function tele(telep)
{
    var phoneno = /^\d{10}$/;
  if(telep.value.match(phoneno))
  {return true;}
   else
  {
  alert("Enter Correct Phone number");
  return false;
   }

}

function cours(cou)
{
if(cou.value == "Default")
{
alert('Please Select your Qualification');
cou.focus();
return false;
}
else
{
alert("Your Form has been submitted successfully");
window.location.reload()
document.getElementById("demo").innerHTML="Registered Successfully";
return true;

}
}

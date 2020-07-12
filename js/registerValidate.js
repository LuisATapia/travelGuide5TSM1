    var expName=/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/;
    var expEmail=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/;
    var expPass=/^[0-9a-zA-Z]+$/;
    var expCurp=/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/;

function registerUsers()
{
    var name=document.getElementById('inputName').value;
    var lastName=document.getElementById('inputLastName').value;
    var curp=document.getElementById('inputCurp').value;
    var email=document.getElementById('inputEmail').value;
    var password=document.getElementById('inputPassword').value;
    var rpass=document.getElementById('inputConfirmPassword').value;

    var vname=expName.test(name);
    var vlast=expName.test(name);
    var vcurp=expCurp.test(curp);
    var vemail=expEmail.test(email);
    var vpass=expPass.test(password);
    if(name==="" || lastName==="" || curp==="" || email==="" || password==="" || rpass==="") 
    {
        alert('Please, write your information');
        return false;
    }else 
    if(vcurp===true)
    {
        if(vemail===true)
        {
            if(password === rpass && vpass===true)
            {
                alert('Your count been create');
                return true;
            }else{
                alert('The passwords are diferent');
                return false;
            }
        }else{
            alert('Invalid E-mail');
            return false;
        }
    }else{
        alert('Enter a Correct CURP');
        return false;
    }
}

function validateLogin()
{
    var email=document.getElementById('loginEmail').value;
    var password=document.getElementById('loginPassword').value;

    if (password ==="" || email==="")
    {
        alert('Enter yours Credentials');
    }else
    if(expEmail.test(email))
    {
        return true;
    }else{
        alert('Check your email');
        return false;
    }
}

function validateCards()
{
    var numDec=document.getElementById('cardDec').value;
    var numHexa=document.getElementById('cardHex').value;
    var iduser=document.getElementById('cardIdUser'),value;
    if(numDec=="" || numHexa=="" ||iduser=="")
    {
        alert('Plase, Write Information');
        return false;
    }
    if(/^[0-9A-F]$/.test(numHexa))
    {
        if(/^[0-9]$/.test(numDec))
        {
            if(iduser!="")
            {
                return true;
            }else{
                alert('Please Enter an user');
                return false;
            }
        }else{
            alert('It is not a number Decimal');
            return false;
        }
    }else{
        alert('It is not a number Hexadecimal');
        return false;
    }
}
function validateCars()
{
    var niv=document.getElementById('inputNiv').value;
    var plate=document.getElementById('inputPlate').value;
    var model=document.getElementById('inputModel').value;
    var year=document.getElementById('inputYear').value;
    var color=document.getElementById('inputColor').value;

    if(niv=="" || plate==""|| model=="" || year==""|| color=="")
    {
        alert("Enter Information");
        return false;
    }
    if(niv!="")
    {
        if(/^[a-zA-Z0-9]$/.test(model))
        {
            if(/^[A-Z0-9]$/.test(plate))
            {
                if(/^[0-9]$/.test(year))
                {
                    if(/^[a-zA-Z0-9]$/.test(color))
                    {
                        alert('Car has been added');
                        return true;
                    }else{
                        alert('Incorrect Color');
                        return false;
                    }
                }else{
                    alert('Incorrect Year');
                    return false;
                }
            }else{
                alert('Incorrect Plate');
                return false;
            }
        }else{
            alert('Incorrect Model');
            return false;
        }
    }else{
        alert('Invalid NIV');
        return false;       
    }
}

function validateBooth()
{
    var nameboot=document.getElementById('bootName').value;
    var km=document.getElementById('bootKm').value;

    if(nameboot==""||km=="")
    {
        alert('Enter Information');
        return false;
    }

    if(/^[a-zA-Z0-9]$/.test(nameboot))
    {
        if(/^[0-9]$/.test(km))
        {
            return true;
            alert('TollBooth has been added');
        }else{
            alert('Invalid KM');
            return false;
        }
    }else{
        alert('Name Invalid');
        return false;
    }
}

function validateTravels()
{
    var num=document.getElementById('traHex').value;
    var boot=document.getElementById('traBooth').value;
    var toll=document.getElementById('traToll').value;

    if(num==""||boot==""||toll=="")
    {
        alert('Enter Information');
        return false;
    }
}
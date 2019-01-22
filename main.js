
function val() {
    clearForm();
    var bool = true;        // Sets boolean value to true.

    //Creating variable names

    var name = document.forms["form"]["name"].value;
    var email = document.forms["form"]["email"].value;

    //Checks to see if values are null or empty

    if (name==null || name==""){
        document.getElementById('nameReq').innerHTML = "*Required";
        bool = false;
    }
    if (email==null || email==""){
        document.getElementById('emailReq').innerHTML = "*Required";
        bool = false;
    }

    return bool;
}


function clearForm() {
    document.getElementById('nameReq').innerHTML = "";
    document.getElementById('emailReq').innerHTML = "";
    console.log("clear function");
}

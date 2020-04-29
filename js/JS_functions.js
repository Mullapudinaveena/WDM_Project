
//function for registeration

function registration(){
       console.log("here")
    //$("#message").html("");
    var username = $("#username-register").val().trim();
    var email = $("#email-register").val().trim();
    var password1 = $("#password-register").val().trim();
    var password2 = $("#repeat-password").val().trim();
    var address = $("#address-register").val().trim();
    console.log("1 -- ", username !== "" && password1 !== "" && password2 !== "" && email !== "" && address !== "")
    if( username !== "" && password1 !== "" && password2 !== "" && email !== "" && address !== ""){
        if(password1==password2)
        {
        $.ajax({
            url:'../php/registro.php',
            type:'post',
            data:{username:username, password:password1, email: email, address: address},
            success:function(response){
                console.log(response)
                var msg = "";
                
                if(response == 2)
                {
                    window.location = "inicio.php";
                }
                else{
                    msg = response;
                    $("#message").html(msg);
                }
                
            }
        });
    }
    else
    {
         $("#message").html("Passwords are not matching");
    }
    }
    else
    {
        $("#message").html("Enter all details");
    }
};

//function for login

//for ajax code login
  
function login(){
       
    $("#message").html("");
    var username = $("#username").val().trim();
    var password = $("#password").val().trim();

    if( username !== "" && password !== "" ){
        $.ajax({
            url:'/./php/login.php',
            type:'post',
            data:{username:username,password:password},
            success:function(response){
                var msg = "";
                if(response == 1){
                    window.location = "adminpanel.php";
                }
                else if(response == 2)
                {
                    window.location = "inicio.php";
                }
                else{
                    msg = "Invalid username and password!";
                }
                $("#message").html(msg);
            }
        });
    }
    else
    {
        $("#message").html("Enter all details");
    }
};
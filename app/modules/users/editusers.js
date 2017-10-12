 $(document).ready(function() {

    var userId = getParameterByName('userId');
    var url = null;
    var name = null;

    if(userId){

        url = '../../php/getuser.php?usersId='+ userId + '';

        $.post(url, $(this).serialize(),function(data) {
            if ( data['success'] ) {
                $("#inputName").val(data["name"]);  
                $("#inputUsername").val(data["username"]);  
                $("#inputEmail").val(data["email"]);  
                $("#selectRole").val(data["role"]);  
                var counter =  data["assignedCounter"];  
                $('#selectCounter').append('<option>'+ counter +'</option>')
                $("#selectCounter").val(data["assignedCounter"]); 
        
            } 
        },'JSON');

    }


    //for submit
    $('#submit').click(function(){ 

        name = $('#inputName').val();
        Username = $('#inputUsername').val();
        Password = $('#newinputPassword').val();
        OldPassword = $('#oldinputPassword').val();
        rePassword = $('#inputRePassword').val();
        Email = $('#inputEmail').val();
        Role =  $('#selectRole').find(":selected").text();
        assignedCounter = $('#selectCounter').find(":selected").text();
        var passsuccess = true;

        if(Password.length > 0  || rePassword.length > 0){
            if(OldPassword.length > 0){

                url = 'checkOldPasswordExist.php?oldpassword=' + OldPassword +'&userid=' + userId + '';
                $.post(url, $(this).serialize(),function(data) {
                    if ( data['success']) {
                        if(Password == rePassword){
                            passsuccess = true;
                            callthis();
                        }
                        else{
                            alert("Password Does Not Match");
                            passsuccess = false;
                            return;
                        }
                    } else {
                        alert("Old password is incorrect");
                        passsuccess = false;
                        return;
                    }
                },'JSON');
            }
            else{
                alert("Old Password is Required");
                passsuccess = false;
                return;
            }
        }else{
            callthis();
        }



        function callthis(){

           if(passsuccess){
                if(name.length > 0 && Username.length > 0 && Email.length > 0 && Role.length > 0 && assignedCounter.length > 0){
                    url = '../../php/update_user.php?userid=' + userId + '&name='+ name + '&username=' + Username + '&password='+ Password + '&email='+ Email + '&role=' + Role + '&assignedCounter='+ assignedCounter + ''; 
                    $.post(url, $(this).serialize(),function(data) {
                        if ( data['success']) {
                            alert("User Update");
                          window.close();
                        } else {
                            alert("User Not Update");
                        }
                    },'JSON');
                }
            }
        }
     
    });


    $('#delete').click(function(){
        name = $('#inputName').val();
        if(name){
            if(confirm('DO YOU WANT TO DELETE THE USER ' + name.toUpperCase() +' ?')){
                name = 'Active';
                url = '../../php/update_user.php?userid='+ userId + '&name='+ name + '';
                $.post(url, $(this).serialize(),function(data) {
                    if ( data['success']) {
                        alert("User Deleted");
                      window.close();
                    } else {
                        alert("User Not Deleted");
                    }
                },'JSON');
            }else{

            }
        }
    });


    $('#cancel').click(function(){
        window.close();

    });

    function getParameterByName(name, url) {

        if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

});


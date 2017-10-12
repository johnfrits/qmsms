 $(document).ready(function() {

    //for submit
    $('#submit').click(function(){

    
    var url = null;
    var name = null;
    var Username = null;
    var Password = null;
    var rePassword = null;
    var Email = null;
    var Role = null;
    var assignedCounter = null;

    name = $('#inputName').val();
    Username = $('#inputUsername').val();
    Password = $('#inputPassword').val();
    rePassword = $('#inputRePassword').val();
    Email = $('#inputEmail').val();
    Role =  $('#selectRole').find(":selected").text();
    assignedCounter = $('#selectCounter').find(":selected").text();

    if(Password == rePassword){

        if(name.length > 0 && Username.length > 0 && Password.length > 0 && Email.length > 0 && Role.length > 0 && assignedCounter.length > 0){

            url = '../../php/addnewuser.php?name='+ name + '&username=' + Username + '&password='+ Password + '&email='+ Email + '&role=' + Role + '&assignedCounter='+ assignedCounter + ''; 
     
            $.post(url, $(this).serialize(),function(data) {
                if ( data['status']  == 'success') {
                  alert("User Added");
                  window.close();
                } else {
                    $('.alert').modal("show");
                }
            },'JSON');
        }
    }else{
        alert("Password Does Not Match!");
    }
  

    });


    $('#cancel').click(function(){
        window.close();

    });

});


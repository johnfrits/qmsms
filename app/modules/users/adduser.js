 $(document).ready(function() {

    //for submit
    $('#submit').click(function(){

    
    var url = null;
    var name = null;
    var Username = null;
    var Password = null;
    var Email = null;
    var Role = null;
    var assignedCounter = null;

    name = $('#inputName').val();
    Username = $('#inputUsername').val();
    Password = $('#inputPassword').val();
    Email = $('#inputEmail').val();
    Role = $('#inputRole').val();
    assignedCounter = $('#inputAssignedCounter').val();


    if(name != null && Username != null && Password != null && Email != null && Role != null && assignedCounter != null){

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

    });


    $('#cancel').click(function(){
        window.close();

    });

});


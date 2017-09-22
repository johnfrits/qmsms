 $(document).ready(function() {

    //for submit
    $('#submit').click(function(){

    
    var url = null;
    var name = null;
    var assignedService = null;

    name = $('#inputName').val();
    assignedService = $('#inputAssignedService').val();

    if(name != null && assignedService != null){

        url = '../../php/addnewcounter.php?name='+ name +'&assignedService='+ assignedService+ ''; 
 
        $.post(url, $(this).serialize(),function(data) {
            if ( data['status']  == 'success') {
            alert("Counter Added");
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


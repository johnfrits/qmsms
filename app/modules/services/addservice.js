 $(document).ready(function() {

    //for submit
    $('#submit').click(function(){

    
    var url = null;
    var name = null;
    var defaultNumber = null;

    name = $('#inputName').val();
    defaultNumber = $('#inputDefaultNumber').val();


    if(name != null && defaultNumber != null){

        url = '../../php/addnewservice.php?name='+ name +'&defaultNumber='+ defaultNumber+ ''; 
 
        $.post(url, $(this).serialize(),function(data) {
            if ( data['status']  == 'success') {
              alert("Service Added");
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


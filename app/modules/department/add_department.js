 $(document).ready(function() {


    //for submit
    $('#submit').click(function(){

    var url = null;
    var name = null;
    name = $('#inputName').val();


    if(name){

        url = '../../php/addnewdepartment.php?name='+ name + '';
 
        $.post(url, $(this).serialize(),function(data) {
            if ( data['departmentnametaken']  == 'taken') {
                 alert("Department Name has already been taken.");
            }else{
                if ( data['status']  == 'success') {
                  alert("Department Added");
                  window.close();
                } else {
                    $('.alert').modal("show");
                }
            }
         
        },'JSON');
    }

    });


    $('#cancel').click(function(){
        window.close();

    });

});


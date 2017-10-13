 $(document).ready(function() {
    
    //for submit
    $('#submit').click(function(){

    var url = null;
    var name = null;
    var deptName = null;
    var defaultNumber = null;

    name = $('#inputName').val();
    defaultNumber = $('#defaultNumber').val();
    deptName = $('#select').find(":selected").text();


    if(name.length > 0 && defaultNumber.length > 0 && deptName.length > 0){

        url = '../../php/addnewservice.php?name='+ name +'&defaultNumber='+ defaultNumber+ '&deptName='+ deptName + '';  
 
        $.post(url, $(this).serialize(),function(data) {
            if ( data['servicenametaken']  == 'taken') {
                   alert("Service Name has already been taken.");
            }else{
                if ( data['status']  == 'success') {
                    alert("Service Added");
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


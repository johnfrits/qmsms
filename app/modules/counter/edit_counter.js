 $(document).ready(function() {

    var counterId = getParameterByName('counterId');
    var url = null;
    var name = null;



    if(counterId){

        url = '../../php/getcounter.php?counterId='+ counterId + '';

        $.post(url, $(this).serialize(),function(data) {
            if ( data['success'] ) {
                $("#inputName").val(data["name"]);  
                var assignedService =  data["assignedService"];  
                $('#select').append('<option>'+ assignedService +'</option>')
                $("#select").val(data["assignedService"]);
            } 
        },'JSON');

    }


    //for submit
    $('#submit').click(function(){ 
        counterName = $('#select').find(":selected").text();
        if(counterName){
            url = '../../php/update_counter.php?counterId=' + counterId + '&counterName='+ counterName + '';  
            $.post(url, $(this).serialize(),function(data) {
                if ( data['success']) {
                    alert("Counter Update");
                  window.close();
                } else {
                    alert("Counter Not Update");
                }
            },'JSON');
        }
    });


    $('#delete').click(function(){
        name = $('#inputName').val();
        if(name){

            if(confirm('DO YOU WANT TO DELETE THE ' + name.toUpperCase() +'?')){
                name = 'Active';
                url = '../../php/update_counter.php?counterName='+ name + '&counterId='+ counterId + '';
                $.post(url, $(this).serialize(),function(data) {
                    if ( data['success']) {
                        alert("Counter Deleted");
                      window.close();
                    } else {
                        alert("Counter Not Deleted");
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


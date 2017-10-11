 $(document).ready(function() {

    var serviceId = getParameterByName('serviceId');
    var url = null;
    var name = null;



    if(serviceId){

        url = '../../php/getservices.php?serviceId='+ serviceId + '';

        $.post(url, $(this).serialize(),function(data) {
            if ( data['success'] ) {
                $("#inputName").val(data["name"]);  
                $("#defaultNumber").val(data["defaultNumber"]);
                $("#select").val(data["deptName"]);
            } 
        },'JSON');

    }


    //for submit
    $('#submit').click(function(){
        name = $('#inputName').val();
        defaultNumber = $('#defaultNumber').val();
        deptName = $('#select').find(":selected").text();
        if(name){
            url = '../../php/update_services.php?serviceId=' + serviceId + '&name='+ name +'&defaultNumber='+ defaultNumber+ '&deptName='+ deptName + '';  
            $.post(url, $(this).serialize(),function(data) {
                if ( data['success']) {
                    alert("Service Update");
                  window.close();
                } else {
                    alert("Service Not Update");
                }
            },'JSON');
        }
    });


    $('#delete').click(function(){
        name = $('#inputName').val();
        if(name){

            if(confirm('DO YOU WANT TO DELETE THE ' + name.toUpperCase() +' SERVICE ?')){
                name = 'Active';
                url = '../../php/update_services.php?name='+ name + '&serviceId='+ serviceId + '';
                $.post(url, $(this).serialize(),function(data) {
                    if ( data['success']) {
                        alert("Department Deleted");
                      window.close();
                    } else {
                        alert("Department Not Deleted");
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


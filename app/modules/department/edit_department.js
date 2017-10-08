 $(document).ready(function() {

    var deptId = getParameterByName('departmentId');
    var url = null;
    var name = null;



    if(deptId){

        url = '../../php/getdepartment.php?departmentId='+ deptId + '';

        $.post(url, $(this).serialize(),function(data) {
            if ( data['success'] ) {
                $("#inputName").val(data["name"]);
            } 
        },'JSON');

    }


    //for submit
    $('#submit').click(function(){
        name = $('#inputName').val();
        if(name){
            url = '../../php/update_department.php?name='+ name + '&departmentId='+ deptId + '';
            $.post(url, $(this).serialize(),function(data) {
                if ( data['success']) {
                    alert("Department Update");
                  window.close();
                } else {
                    alert("Department Not Update");
                }
            },'JSON');
        }
    });

    $('#delete').click(function(){
        name = $('#inputName').val();
        if(name){

            if(confirm('DO YOU WANT TO DELETE THE ' + name.toUpperCase() +' DEPARTMENT ?')){
                name = 'Active';
                url = '../../php/update_department.php?name='+ name + '&departmentId='+ deptId + '';
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


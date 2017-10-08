(function () {
    'use strict';

    angular
        .module('departmentModule', [])
        .controller('departmentController', DepartmentController2)
        
    DepartmentController2.$inject = ['$scope', 'Page'];
   
    function DepartmentController2($scope, Page) {
        // create a message to display in our view
        Page.setTitle('Department');
        
    }

})();

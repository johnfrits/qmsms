(function () {
    'use strict';

    angular
        .module('usersModule', [])
        .controller('usersController', UsersController2)
        
    UsersController2.$inject = ['$scope', 'Page'];
   
    function UsersController2($scope, Page) {
        // create a message to display in our view
        Page.setTitle('Users');
        
    }

})();

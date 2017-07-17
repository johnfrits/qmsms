(function () {
    'use strict';

    angular
        .module('counterModule', [])
        .controller('counterController', CounterController2)
        
    CounterController2.$inject = ['$scope', 'Page'];
   
    function CounterController2($scope, Page) {
        // create a message to display in our view
        Page.setTitle('Counter');
        
    }

})();

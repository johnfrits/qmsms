(function () {
    'use strict';

    angular
        .module('callModule', [])
        .controller('callController', CallController2)
        
    CallController2.$inject = ['$scope', 'Page'];
   
    function CallController2($scope, Page) {
        // create a message to display in our view
        Page.setTitle('Call');
        
        $scope.date = new Date();
    }

})();

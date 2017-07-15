(function () {
    'use strict';

    angular
        .module('dashboardModule', [])
        .controller('dashboardController', DashboardController2)
        
    DashboardController2.$inject = ['$scope', 'Page'];
   
    function DashboardController2($scope, Page) {
        // create a message to display in our view
        Page.setTitle('Dashboard');
        
    }

})();

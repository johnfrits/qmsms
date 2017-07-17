(function () {
    'use strict';

    angular
        .module('settingsModule', [])
        .controller('settingsController', SettingsController2)
        
    SettingsController2.$inject = ['$scope', 'Page'];
   
    function SettingsController2($scope, Page) {
        // create a message to display in our view
        Page.setTitle('Settings');
        
    }

})();

(function () {
	'use strict';

	angular
		.module('appModule', [])
		.controller('appController', AppController2)

	AppController2.$inject = ['$scope', 'Page'];

	function AppController2($scope, Page) {
        $scope.loggedUser = "Johnfrits Rejaba";
        
    }

})();	
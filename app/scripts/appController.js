(function () {
	'use strict';

	angular
		.module('appModule', [])
		.controller('appController', AppController2)

	AppController2.$inject = ['$scope', 'Page', '$route'];

	function AppController2($scope, Page, $route) {

		$scope.$route = $route;
        $scope.loggedUser = "Rodel";
        
    }

})();	
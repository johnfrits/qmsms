(function () {
	'use strict';

	angular
		.module('servicesModule', [])
		.controller('servicesController', ServiceControlle2)

	ServiceControlle2.$inject = ['$scope', 'Page'];

	function ServiceControlle2($scope, Page) {
        // create a message to display in our view
        Page.setTitle('Services');
    }

})();	
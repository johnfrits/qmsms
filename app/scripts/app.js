(function () {

  'use strict'

  angular.module( 'myApp', ['ngRoute'] )
    .config(['$routeProvider', '$locationProvider',

      function ($routeProvider, $locationProvider) {

        $locationProvider.hashPrefix('');
        $routeProvider

      .when("/", {
        title : "QMSMS | Dashboard",
        templateUrl : "modules/dashboard/index.php",
        controller : "dashboardController"
       })
      .when("/services", {
        title : "QMSMS | Services",
        templateUrl : "modules/services/index.php"
      })
      .when("/counter", {
        title : "QMSMS | Counter",
        templateUrl : "modules/counter/index.php"
      })
      .when("/users", {
        title : "QMSMS | Users",
        templateUrl : "modules/users/index.php"
      })
       .when("/settings", {
        title : "QMSMS | Services",
        templateUrl : "modules/settings/index.php"
      })
       
  }]);

})();
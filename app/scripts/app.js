(function () {

  'use strict'

  angular

    .module( 'myApp', ['ngRoute', 'dashboardModule', 'servicesModule'] )

    .run([
      '$rootScope', '$location',
      function run($rootScope, $location) {
          $rootScope.location = $location;
    }])

    .config(['$routeProvider', '$locationProvider',
      function ($routeProvider, $locationProvider) {
        $locationProvider.hashPrefix('');
        $routeProvider

      .when("/", {  
        templateUrl : "modules/dashboard/index.php",
        activetab: 'dashboard'
       })
      .when("/services", {
        templateUrl : "modules/services/index.php"
      })
      .when("/counter", {
        templateUrl : "modules/counter/index.php"
      })
      .when("/users", {
        templateUrl : "modules/users/index.php"
      })
       .when("/settings", {
        templateUrl : "modules/settings/index.php"
      })   
    }]) 

    .factory('Page', 
      function ($window) {

      var title = 'QMSMS | ';
          return {
            setTitle: 
            function (newTitle) {
                $window.document.title = title + newTitle;
          }
        };
      })
})();
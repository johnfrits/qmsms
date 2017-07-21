(function () {

  'use strict'

   angular

    .module( 'myApp', ['ngRoute', 'dashboardModule', 'callModule', 'servicesModule', 'appModule', 'counterModule', 'usersModule', 'settingsModule' ] )

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
        activetab: 'Dashboard'
       })
      .when("/call", {  
        templateUrl : "modules/call/index.php",
        activetab: 'Call'
       })
      .when("/services", {
        templateUrl : "modules/services/index.php",
        activetab: 'Services'
      })
      .when("/counter", {
        templateUrl : "modules/counter/index.php",
        activetab: 'Counter'
      })
      .when("/users", {
        templateUrl : "modules/users/index.php",
        activetab: 'Users'
      })
       .when("/settings", {
        templateUrl : "modules/settings/index.php",
        activetab: 'Settings'
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
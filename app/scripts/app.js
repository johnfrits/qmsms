(function () {
  angular.module('myApp', ['ngRoute'])
    .config(['$routeProvider', function ($routeProvider) {
      $routeProvider
      .when("/", {
        title : "QMSMS | Dashboard",
        templateUrl : "modules/dashboard/index.php"
       })
      .when("/dashboard", {
        title : "QMSMS | Dashboard",
        templateUrl : "modules/dashboard/index.php"
      })
      .when("/services", {
        title : "QMSMS | Services",
        templateUrl : "modules/services/index.php"
      })
    }])
    .controller('myCtrl', function($scope) {
    });

})();
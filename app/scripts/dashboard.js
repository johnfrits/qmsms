(function () {
angular.module('myApp')
    .controller('dashboardController', function ($scope) {
       // create a message to display in our view
       $scope.title = 'Dashboard';
  });
})();
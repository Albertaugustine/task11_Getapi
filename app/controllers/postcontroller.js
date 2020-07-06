var fetch = angular.module("myApp", []);

fetch.controller("myCtrl", [
  "$scope",
  "$http",
  function ($scope, $http) {
    $http({
      method: "get",
      url: "api/getdata.php",
    }).then(function successCallback(response) {
      // Store response data
      $scope.names = response.data;
    });
  },
]);

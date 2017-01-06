angular.module("hackathonapp").controller("MainController",["$scope","$location",function($scope,$location){
    $scope.toCategories=function(){
        $location.path('/categories');
    };
    $scope.toLogin=function(){
        $location.path('/login');
    }
}]);
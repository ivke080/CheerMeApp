angular.module("hackathonapp").controller("categoriesController",["$scope","$location",function($scope,$location){
    $scope.categories=[];
    $scope.path=$location.path();
    $scope.redirect=function(){
        var last=$scope.lastIndexOf('/')-$scope.path.length;
        return $scope.substr(last);
    };
    //console.log($scope.redirect);
}]);
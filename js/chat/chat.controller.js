angular.module('hackathonapp').controller('ChatController', ['$scope',"$location",'$firebase',
    function($scope, $location, $firebase) {

      var ref = new Firebase('https://wixkyb1zprj.firebaseio-demo.com/');
      $scope.messages = $firebase(ref.limit(10)); 
    
    $scope.username = 'Guest' + Math.floor(Math.random()*101);
      $scope.addMessage = function() {
        $scope.messages.$add({
          from: $scope.username, content: $scope.message
        });
        $scope.message = "";
      };
    
      }]);
var app = angular.module('loginApp', []);

app.controller('LoginController', function($scope) {
  $scope.username = '';
  $scope.password = '';

  $scope.login = function() {
    // Implement authentication logic here
    // For example, you could check against a hardcoded user list
    if ($scope.username === 'user' && $scope.password === 'password') {
      alert('Login successful!');
    } else {
      alert('Invalid credentials');
    }
  };
});
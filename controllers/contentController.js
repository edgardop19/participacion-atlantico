app.controller('contentController', function ($scope, $rootScope, $routeParams, $location, $http) {
   $scope.listsContent = function () {
		$http.get('api/contenido/list')
		.then(function (results) {
				$scope.conts=results.data;			
		});
	}; 
	$scope.listsGal = function () {
		$http.get('api/contenido/listGal')
		.then(function (results) {
				$scope.conts=results.data;			
		});
	}; 
	$scope.listsCarr = function () {
		$http.get('api/contenido/listCarr')
		.then(function (results) {
				$scope.cars=results.data;			
		});
	}; 
});
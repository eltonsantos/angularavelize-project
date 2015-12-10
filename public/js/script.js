angular.module("listaTelefonica", [], function($interpolateProvider){
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});
angular.module("listaTelefonica").controller("listaTelefonicaCtrl", function($scope){
	$scope.app = "Phone List";
});
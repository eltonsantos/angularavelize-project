// Responsável por mudar as templates tags para não da conflito entre a blade do laravel e as tags do angular
angular.module("listaTelefonica", [], function($interpolateProvider){
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});

angular.module("listaTelefonica").controller("listaTelefonicaCtrl", function($scope){
	$scope.app = "Lista Telefônica";
	// Lista com contatos teste
	$scope.contatos = [
		{nome: "Elton Santos", telefone: "986814473"},
		{nome: "Ericson Santos", telefone: "987056766"},
		{nome: "Lucivania Santos", telefone: "999871009"},
		{nome: "Eloy Padilha", telefone: "988781212"},
		{nome: "Vânia Melo", telefone: "987120902"},
	];
	// Botão para adicionar contato
	$scope.adicionarContato = function(){
		$scope.contatos.push();

	};
});
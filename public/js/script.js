// Materialize select
$(document).ready(function() {
    $('select').material_select();
});

// Responsável por mudar as templates tags para não da conflito entre a blade do laravel e as tags do angular
angular.module("listaTelefonica", [], function($interpolateProvider){
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});

angular.module("listaTelefonica").controller("listaTelefonicaCtrl", function($scope){
	$scope.app = "Lista Telefônica";
	// Lista com contatos teste
	$scope.contatos = [
		{nome: "Elton Santos", telefone: "986814473", cor: "blue"},
		{nome: "Ericson Santos", telefone: "987056766", cor: "yellow"},
		{nome: "Lucivania Santos", telefone: "999871009", cor: "red"},
		{nome: "Eloy Padilha", telefone: "988781212", cor: "red"},
		{nome: "Vânia Melo", telefone: "987120902", cor: "green"},
	];
	// Lista de operadoras teste
	$scope.operadoras = [
		{nome: "Oi", codigo: 14, categoria: "Celular"},
		{nome: "Vivo", codigo: 15, categoria: "Celular"},
		{nome: "Tim", codigo: 41, categoria: "Celular"},
		{nome: "GVT", codigo: 25, categoria: "Fixo"},
		{nome: "Embratel", codigo: 21, categoria: "Fixo"}
	];
	// Adicionar contato
	$scope.adicionarContato = function(contato){
		$scope.contatos.push(angular.copy(contato));
		delete $scope.contato;
	};
	// Apagar contato
	$scope.apagarContatos = function(contatos){
		$scope.contatos = contatos.filter(function(contato){
			if (!contato.selecionado) return contato;
		});
	};
	// Caso contato esteja selecionado
	$scope.isContatoSelecionado = function(contatos){
		return contatos.some(function(contato){
			return contato.selecionado;
		});
	};
});
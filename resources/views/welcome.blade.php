<!DOCTYPE html>
<html ng-app="listaTelefonica">
    <head>
        <title>Project Angular + Laravel + Materialize</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}" media="screen,projection" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="screen,projection" />
    </head>
    <body ng-controller="listaTelefonicaCtrl">
        <div class="container">
            <div class="row col s12">
                <div class="col l3">
                    &nbsp;
                </div>
                <div class="col l6">  
                    <div>
                        <h2 class="teal lighten-2 truncate card-panel"><% app %></h2>
                    </div>
                    <table class="bordered highlight" ng-show="contatos.length > 0" >
                        
                            <tr>
                                <th></th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Operadora</th>
                                <th></th>
                            </tr>
                       
                            <tr ng-class="{'selecionado negrito': contato.selecionado}" ng-repeat="contato in contatos">
                                <td>
                                    <input type="checkbox" class="filled-in" id="check-<% contato.telefone %>" ng-model="contato.selecionado" />
                                    <label for="check-<% contato.telefone %>"></label>
                                </td>
                                <td><% contato.nome %></td>
                                <td><% contato.telefone %></td>
                                <td><% contato.operadora.nome %></td>
                                <td>
                                    <div style="width: 20px; height: 20px;" ng-style="{'background-color': contato.cor}"></div>
                                </td>
                            </tr>
                        
                    </table>
                    <br />

                    <h6 class="card-panel teal lighten-2">Cadastrar contato</h6>

                    <div class="input-field input-operadora">
                        <select ng-model="contato.operadora" ng-options="operadora.nome for operadora in operadoras">
                            <option value="">Selecione uma operadora</option>
                        </select>
                    </div>
                    <div class="input-field input-nome">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate" ng-model="contato.nome">
                        <label for="icon_prefix" data-error="Errado">Nome</label>
                    </div>
                    <div class="input-field input-telefone">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telephone" type="text" class="validate" ng-model="contato.telefone">
                        <label for="icon_telephone" data-error="Errado">Telefone</label>
                    </div>

                    <button class="btn waves-effect waves-light btn-add" ng-click="adicionarContato(contato)" ng-disabled="!contato.nome || !contato.telefone">
                        Adicionar
                        <i class="mdi-content-add right"></i>
                    </button>

                    <button class="btn waves-effect waves-light btn-rm red" ng-click="apagarContatos(contatos)" ng-if="isContatoSelecionado(contatos)" >
                        Remover
                        <i class="mdi-content-remove right"></i>
                    </button>

                </div>
                <div class="col l3">
                     &nbsp;
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</html>
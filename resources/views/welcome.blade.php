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
                    <table class="bordered highlight">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="contato in contatos">
                                <td><% contato.nome %></td>
                                <td><% contato.telefone %></td>
                            </tr>
                        </tbody>
                    </table>
                    <br />
                    <h6 class="card-panel teal lighten-2">Cadastrar contato</h6>

                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate" ng-model="nome">
                        <label for="icon_prefix">Nome</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telephone" type="text" class="validate" ng-model="telefone">
                        <label for="icon_telephone" data-error="Errado" data-success="Correto">Telefone</label>
                    </div>
                    <div class="divider"></div>
                    Nome: <% nome %>
                    <br />
                    Telefone: <% telefone %>
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
<!DOCTYPE html>
<html ng-app="listaTelefonica">
    <head>
        <title>Project Angular + Laravel + Materialize</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}" media="screen,projection" />
    </head>
    <body ng-controller="listaTelefonicaCtrl">
        <div class="container">
            <div>
                <h2 class="center"><% app %></h2>
            </div>
            <table class="centered highlight">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>name</td>
                        <td>phone</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</html>
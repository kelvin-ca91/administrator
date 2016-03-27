<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Administrador - Panel de Control">
        <meta name="keywords" content="" >
        <meta name="author" content="Kelvin M. Carrión Alfaro">
        <title> Administrator </title>
        {!! Html::style('public/library/css/bootstrap.min.css') !!}
        {!! Html::style('public/assets/css/master.css') !!}
        @yield('css')
    </head>
    <body>
        <header id="header" class="">
            <nav class="navbar navbar-default container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">Administrator</a>

                </div>
                {!! Html::link('logout','Logout',['class'=>'btn btn-danger navbar-btn navbar-right']) !!}
                <p class="navbar-text navbar-right">Bienvenido: {{Auth::user()->name}} &nbsp;&nbsp;&nbsp;</p>
            </nav>
        </header><!-- /header -->
        <div id="div-content-layout" class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="list-group">
                        {!! Html::link('#', 'Opcion 1', ['class'=>'list-group-item active']) !!}
                        {!! Html::link('#', 'Opcion 2', ['class'=>'list-group-item']) !!}
                        {!! Html::link('#', 'Opcion 3', ['class'=>'list-group-item']) !!}
                    </div>
                </div>
                <div class="col-sm-9">
                    @yield('content')

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">
                                OPCION 1
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>header</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>data</td>
                                    </tr>
                                    <tr>
                                        <td>data</td>
                                    </tr>
                                    <tr>
                                        <td>data</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            © Kelvin Carrión Alfaro - Todos los derechos reservados.    
        </footer>
        {!! Html::script('public/library/js/jquery.2.1.3.min.js') !!}
        {!! Html::script('public/library/js/bootstrap.min.js') !!}
        @yield('js')
    </body>
</html>


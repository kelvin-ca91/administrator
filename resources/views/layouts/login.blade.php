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
    </head>
    <body>
        <header id="header" class="">
            <br>
            <br>
        </header><!-- /header -->
        <div id="div-content-layout" class="container-fluid">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Login
                            </div>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['route'=>'log.store','method'=>'POST']) !!}
                                <div class="form-group">
                                    {!! Form::label('email', 'E-mail:') !!}
                                    {!! Form::text('email','', ['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('password', 'Password:') !!}
                                    {!! Form::password('password',['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Entrar',['class'=>'btn btn-success form-control']) !!}
                                </div>
                            {!! Form::close() !!}
                            @include('alerts.message_alert')
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
        
    </body>
</html>


<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PhotoCritic</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ URL::asset('bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ URL::asset('dist/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ URL::asset('bower_components/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<div class="col-lg-10" align="center">
		<h1>Photocritic</h1>
		<p class="lead" align="center">Sistema desenvolvido por Felipe Benigno como requisito da disciplina Sistemas Distribuidos do curso de Bacharelado em Sistemas de Informação da Universidade Federal do Pará</p>
		<br>
		<h2>Tecnologias Utilizadas</h2>
		<li>PHP 5.6</li>
		<li><a href="http://laravel.com/">Framework Laravel</a></li>
		<li><a href="http://getbootstrap.com/">Bootstrap</a></li>
		<li><a href="http://startbootstrap.com/template-overviews/sb-admin-2/">Template SB Admin</a></li>
		<br>
		<a href="/posts"><i class="fa fa-arrow-left"></i> Voltar</a>
	</div>

	<script src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="{{ URL::asset('bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

	<!-- Morris Charts JavaScript -->
	<script src="{{ URL::asset('bower_components/raphael/raphael-min.js') }}"></script>
	<script src="{{ URL::asset('bower_components/morrisjs/morris.min.js') }}"></script>
	

	<!-- Custom Theme JavaScript -->
	<script src="{{ URL::asset('dist/js/sb-admin-2.js') }}"></script>
</body>
</html>

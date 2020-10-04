<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Acad') }}</title>

    <!-- Styles -->
    <!-- Última versão CSS compilada e minificada -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Tema opcional -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Última versão JavaScript compilada e minificada -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <script src="/components/jquery/jquery.min.js"></script>
	<script src="/components/jquery/jquery-3.5.1.js"></script>
	<script src="/components/jquery/jquery.inputmask.js"></script>
    <script src="/components/jquery/jquery.maskMoney.js"></script>
    <script src="/components/jquery/jquery.maskMoney.min.js"></script>
	<script src="/components/jquery/inputmask.js"></script>
    <script src="/components/bootstrap/js/bootstrap-datepicker.js"></script>
    <script src="/components/bootstrap/js/bootstrap-datepicker.min.js"></script>
    <script src="/components/bootstrap/js/bootstrap-datepicker.pt-BR.min.js"></script>
	
</head>
<body>

    <div class="container">			
		@yield('content')
	</div>
       

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
	<link rel="stylesheet" href="/components/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="/components/w2ui/w2ui-1.5.rc1.min.css">
	<link rel="stylesheet" href="/components/sidr/stylesheets/jquery.sidr.light.css">
	<link rel="stylesheet" href="/components/bootstrap/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="/components/bootstrap/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="/components/bootstrap/css/bootstrap-datepicker.mim.css">


</body>
</html>

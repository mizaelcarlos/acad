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

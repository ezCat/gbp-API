<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.vertical-tabs.css') }}">    
<!--     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"> -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<script src="{{ asset('js/jquery-2.1.4.js') }}"></script>
</head>

@yield('sidebar')

@yield('content')

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/animatedModal.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/active-menu.js') }}"></script>
<!-- <script src="{{ asset('js/data-table-custom.js') }}"></script> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script> -->
<head> 
  <meta charset="UTF-8"> 
 
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"> 
  <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.vertical-tabs.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
  <script src="{{ asset('js/jquery-2.1.4.js') }}"></script> 
  <script src="{{asset('js/jquery.autocomplete.js')}}"></script>
</head> 

@include('sidebar')

@yield('content')
 
<script src="{{ asset('js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/jquery.metisMenu.js') }}"></script> 
<script src="{{ asset('js/animatedModal.min.js') }}"></script> 
<script src="{{ asset('js/main.js') }}"></script> 
<script src="{{ asset('js/active-menu.js') }}"></script> 
<script src="{{asset('js/ajax/postStatutProjet.js')}}"></script>
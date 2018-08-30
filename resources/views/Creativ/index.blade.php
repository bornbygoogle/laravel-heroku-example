@extends('master')

@section('Site-setup')

	<!-- Google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

	<!-- font awesome -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- uniform -->
	<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/creativ/uniform.default.min.css') }}" />

	<!-- animate.css -->
	<link rel="stylesheet" href="{{ URL::asset('css/creativ/animate.css') }}" />

	<!-- gallery -->
	<link rel="stylesheet" href="{{ URL::asset('css/creativ/blueimp-gallery.min.css') }}">

	<!-- perso style -->
	<link rel="stylesheet" href="{{ URL::asset('css/creativ/style.css') }}">

	<!-- favicon -->
	<link rel="shortcut icon" href="{{ URL::asset('img/creativ/favicon.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ URL::asset('img/creativ/favicon.png') }}" type="image/x-icon">
@endsection

@section('title')
	Creati'v Cuisines et Bains
@endsection

@section('contenu')
   @include('Creativ.contenu')
@endsection

@section('javascript')
<script src="{{ URL::asset('js/creativ/jquery.js') }}"></script>

<!-- wow script -->
<script src="{{ URL::asset('js/creativ/wow.min.js') }}"></script>

<!-- uniform -->
<script src="{{ URL::asset('js/creativ/jquery.uniform.js') }}"></script>


<!-- boostrap -->
<script src="{{ URL::asset('js/creativ/bootstrap.js') }}" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="{{ URL::asset('js/creativ/touchSwipe.min.js') }}"></script>

<!-- jquery mobile -->
<script src="{{ URL::asset('js/creativ/respond.js') }}"></script>

<!-- gallery -->
<script src="{{ URL::asset('js/creativ/jquery.blueimp-gallery.min.js') }}"></script>

<!-- custom script -->
<script src="{{ URL::asset('js/creativ/script.js') }}"></script>
@endsection

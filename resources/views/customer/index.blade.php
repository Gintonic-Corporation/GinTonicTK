{{-- @extends('layouts.layout')
@section('content')
<a href="/customer/create">NEW</a>
<table>
    <tr>
        <th>ID</th>
        <th>Név</th>
        <th>Lakcím</th>
        <th>Elérhetőség</th>
        <th>Rang</th>
        <th>Options</th>
    </tr>

    @foreach($customers as $customer)
    <tr>
        <td>{{$customer->id}}</td>
        <td><a href="/customer/{{$customer->id}}">{{$customer->name}}</a></td>
        <td>{{$customer->address}}</td>
        <td>{{$customer->contact}}</td>
        <td>{{$customer->rank}}</td>
        <td> <a href="/customer/{{$customer->id}}/edit">Edit</a></td>
    </tr>
    @endforeach
</table>
@endsection --}}

<!DOCTYPE HTML>
<html>
	<head>
		<title>GinTonicTK</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		{{-- <link rel="icon" href="public/favicon.ico" type="image/x-icon"/> --}}
		{{-- <link rel="stylesheet" href="resources/css/main.css" /> --}}
		<noscript><link rel="stylesheet" href="resources/css/noscript.css" /></noscript>
        @vite('resources/css/main.css')
	</head>
	<body class="is-preload">

		<!-- Wrapper-->
			<div id="wrapper">

				@include('includes._nav')

				<!-- Main -->
					<div id="main">

						<a href="/customer/create">NEW</a>
<table>
    <tr>
        <th>ID</th>
        <th>Név</th>
        <th>Lakcím</th>
        <th>Elérhetőség</th>
        <th>Rang</th>
        <th>Options</th>
    </tr>

    @foreach($customers as $customer)
    <tr>
        <td>{{$customer->id}}</td>
        <td><a href="/customer/{{$customer->id}}">{{$customer->name}}</a></td>
        <td>{{$customer->address}}</td>
        <td>{{$customer->contact}}</td>
        <td>{{$customer->rank}}</td>
        <td> <a href="/customer/{{$customer->id}}/edit">Edit</a></td>
    </tr>
    @endforeach
</table>

					</div>

				<!-- Footer -->
					@include('includes._footer')

			</div>

		<!-- Scripts -->
			@include('includes._scripts')

	</body>
</html>

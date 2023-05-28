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

                    <button class="button-82-pushable" role="button">
						<span class="button-82-shadow"></span>
						<span class="button-82-edge"></span>
						<span class="button-82-front text">
						<a href="/customer/create" id="decc">NEW</a>
						</span>
					</button>
                    <form action="/customer/search" method="post">
                        @csrf

                        <input type="text" placeholder="Keresés" name="keyword" id="keyword">
                        <select class="form-control" name="key" id="key">
                            <option value="name">Név</option>
                            <option value="address">Lakcím</option>
                            <option value="created_at">Első bejelentkezés</option>
                        </select>
                        <input type="submit" value="Keresés" style="float: right">
                    </form>
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
        <?php $rang=""; if($customer->rank<5) $rang="Tébolygó";
        if($customer->rank/5==1) $rang="Megtért";
        if($customer->rank/5==2) $rang="Szárnyas";
        if($customer->rank>=15) $rang="Örök fanatikus"; ?>
        <td>{{$customer->id}}</td>
        <td><a href="/customer/{{$customer->id}}" id="decc2">{{$customer->name}}</a></td>
        <td>{{$customer->address}}</td>
        <td>{{$customer->contact}}</td>
        <td>{{$rang}}</td>
        <td> <a href="/customer/{{$customer->id}}/edit" id="decc2">Edit</a></td>
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

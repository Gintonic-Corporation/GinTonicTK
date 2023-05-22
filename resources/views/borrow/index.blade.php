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

						<a href="/borrow/create" class="button">NEW</a>
<table>
    <tr>
        <th>ID</th>
        <th>Kölcsönző azonosítója</th>
        <th>Film azonosítója</th>
        <th>Elvitel dátuma</th>
        <th>Visszahozatal dátuma</th>
        <th>Options</th>
    </tr>

    @foreach($borrows as $borrow)
    <tr>
        <td><a href="/borrow/{{$borrow->id}}" id="decc2">{{$borrow->id}}</a></td>
        <td><a href="/customer/{{$borrow->customerID}}" id="decc2">{{$borrow->customerID}}</a></td>
        <td><a href="/film/{{$borrow->filmID}}" id="decc2">{{$borrow->filmID}}</a></td>
        <td>{{$borrow->out}}</td>
        <td>{{$borrow->in}}</td>
        <td> <a href="/borrow/{{$borrow->id}}/edit" id="decc2">Edit</a></td>
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

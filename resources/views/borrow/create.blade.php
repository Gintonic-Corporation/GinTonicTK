
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
        <?php
            $filmData=DB::table('films')
                ->select('*')
                ->where('available','=',1)
                ->get();
            $customerData=DB::table('customers')
                ->select('*')
                ->get();
        ?>
		<!-- Wrapper-->
			<div id="wrapper">

				<form action="/borrow" method="post">
                    @csrf
                    <label for="customerID">Kölcsönző azonosítója: </label>
                    <select class="form-control" name="customerID">
                        @foreach ($customerData as $customer)
                            <option value="{{ $customer->id }}">
                                [{{ $customer->id }}]  {{ $customer->name }} {{ $customer->address }}
                            </option>
                        @endforeach
                    </select>
                    <br>
                    <label for="filmID">Film azonosítója: </label>
                    <select class="form-control" name="filmID">
                        @foreach ($filmData as $film)
                            <option value="{{ $film->id }}">
                                [{{ $film->id }}]  {{ $film->title }} {{ $film->director }}
                            </option>
                        @endforeach
                    </select>
                    <br>
                    <label for="out">Kiadva: </label>
                    <input type="date" name="out" id="out" value="<?php echo date('Y-m-d'); ?>" />
                    <br>
                    {{-- <label for="category">Visszahozva: </label>
                    <input type="text" name="category" id="category"> --}}

                    <input type="submit" value="Mentés">
                </form>

			</div>

		<!-- Scripts -->
			@include('includes._scripts')

	</body>
</html>

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
        <?php $data1=DB::table('borrows')
        ->select('borrows.id as bid', 'films.title as title', 'films.ID as fid', 'borrows.out as bout')
        ->join('films','borrows.filmID','=','films.ID')
        ->where('customerID','=',$customer->id)
        ->whereNull('borrows.in')
        ->get();
        $borrowPeriod=0;
        if($customer->rank<5) $borrowPeriod=2*3600*24;
        if($customer->rank/5==1) $borrowPeriod=3*3600*24;
        if($customer->rank/5==2) $borrowPeriod=5*3600*24;
        if($customer->rank>=15) $borrowPeriod=10*3600*24;

        $data2=DB::table('borrows')
        ->select('borrows.id as bid', 'films.title as title', 'films.ID as fid', 'borrows.out as bout')
        ->join('films','borrows.filmID','=','films.ID')
        ->where('customerID','=',$customer->id)
        ->whereNotNull('borrows.in')
        ->get();

        ?>
		<!-- Wrapper-->
			<div class="box">
				<div class="glass3">
					<div class="detailtext">
						<b>Név:</b> {{$customer->name}}<br>
						<b>Lakcím:</b> {{$customer->address}}<br>
						<b>Elérhetőség:</b> {{$customer->contact}}<br>
						<b>Kölcsönzések száma:</b> {{$customer->rank}}<br>
                        <select class="form-control" name="customerID">
                            <option>Függőben lévő kölcsönzések([id] Filmcím [filmID] Kölcsönzés [Határidő])</option>
                            @foreach ($data1 as $data)
                                <option value="{{ $data->bid }}">
                                    [{{ $data->bid }}]  {{ $data->title }} [{{$data->fid}}] {{ $data->bout }} [{{date("Y-m-d",strtotime($data->bout)+$borrowPeriod)}}]
                                </option>
                            @endforeach
                        </select>
                        <select class="form-control" name="customerID">
                            <option>Korábbi kölcsönzések([id] Filmcím [filmID] Kölcsönzés-Visszavétel)</option>
                            @foreach ($data2 as $data)
                                <option value="{{ $data->bid }}">
                                    [{{ $data->bid }}]  {{ $data->title }} [{{$data->fid}}] {{ $data->bout }} - {{date("Y-m-d",strtotime($data->bout)+$borrowPeriod)}}
                                </option>
                            @endforeach
                        </select>
                        <br>
						<button class="button-82-pushable" role="button">
						<span class="button-82-shadow"></span>
						<span class="button-82-edge"></span>
						<span class="button-82-front text">
						<a href="/customer" id="decc">Vissza</a>
						</span>
						</button>
					</div>
				</div>
			</div>

		<!-- Scripts -->
			@include('includes._scripts')

	</body>
</html>

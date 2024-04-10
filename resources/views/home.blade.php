@extends('layouts/app')

@section('content')


<div class="container py-5">

    <h1 class="mb-3 text-uppercase text-center ">Trains</h1>

    <div class="row row-cols-3">

        @foreach ($trains as $train)
        @if ($train->departure_time == $today)
        
        <div class="card p-2 border border-2">
            <div class="card-body">
                <div class="card-title">

                    <div>
                        Partenza:
                        <h5>{{$train->departure_station}}</h5>
                        <small>{{$train->departure_time}}</small>
                    </div>
                    <div>
                        Arrivo:
                        <h5>{{$train->arrival_station}}</h5>
                        <small>{{$train->arrival_time}}</small>
                    </div>

                </div>
                <div class="card-body">
                    <div class="train_code">
                        Numero treno: <span>{{$train->train_code}}</span>
                    </div>
                    <div class="delay">
                        @if ($train->delay) 
                            <span>
                                Treno in ritardo
                            </span>
                        @else 
                            <span>
                                Treno in orario
                            </span>
                        @endif
                    </div>
                </div>


            </div>
        </div>
        
        @endif
        @endforeach
        
    </div>
</div>

@endsection
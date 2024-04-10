@extends('layouts/app')

@section('content')
    @foreach ($trains as $train)
    @if ($train->departure_time = $today)

    <ul>
        <li>
            {{$train->departure_time}}
        </li>
    </ul>
            
    @endif
    @endforeach
@endsection
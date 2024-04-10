@extends('layouts/app')

@section('content')
<ol>
    @foreach ($trains as $train)
    @if ($train->departure_time == $today)

        <li>
            {{$train->agency}}
        </li>
        
    @endif
    @endforeach
</ol>
@endsection
@extends('layouts/app')

@section('content')
<ol>
    @foreach ($trains as $train)
    @if ($train->departure_time == '2024-04-10')

        <li>
            {{$train->departure_time}}
        </li>
        
    @endif
    @endforeach
</ol>
@endsection
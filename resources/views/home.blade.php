@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">

        @forelse($trains as $train)
        <div class="col">
            <div class="card train-details">
                <div class="card-body">
                    <h4 class="card-title">{{$train->departure_station}}&RightArrow; {{$train->arrival_station}}</h4>
                    <p class="card-text">{{$train->company}} </p>
                    <div>Departure: {{date('H:i', strtotime($train->departure_time))}}</div>
                    <div>Arrival: {{date('H:i', strtotime($train->arrival_time))}}</div>
                    <div class="wagons-code d-flex justify-content-between py-2">
                        <div class="wagons"><i class="fa-solid fa-train-subway me-2"></i>{{$train->num_of_wagons}}</div>
                        <div class="code text-uppercase fw-bold">{{$train->train_code}}</div>
                    </div>
                    @if($train->canceled)
                    <div class="canceled text-danger fw-bold text-uppercase pt-3">canceled</div>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <h1 class="text-center">No trains yet...</h1>
        </div>
        @endforelse

    </div>
</div>
@endsection
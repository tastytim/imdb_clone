@extends('layouts.guests');

@section('content')

<div class="container">
    <div class="row">
        <div class="col-3">
            <slider-list :data-list="{{json_encode($MoviesList)}}"></slider-list>
        </div>
        <div class="col-6">
            <slider :data-list="{{json_encode($MoviesList)}}"></slider>
        </div>
        <div class="col-3">
        </div>
    </div>
</div>

@endsection
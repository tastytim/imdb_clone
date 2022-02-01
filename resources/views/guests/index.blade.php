@extends('layouts.guests');

@section('content')
    <slider :data-list="{{json_encode($MoviesList)}}"></slider>
@endsection
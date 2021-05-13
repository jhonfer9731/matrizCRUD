@extends('layouts.mainApp')
@section('content')
    @foreach($formulario as $key=>$input)
        {{$key}} : {{$input}}
    @endforeach
@endsection
@extends('master')

@section('title')
    BITM Page
@endsection

@section('body')
    <h1>{{$a.$b}}</h1>
    @foreach($fahim as $key=> $value)
        @foreach($value as $item)
        <span> {{$item}}</span></br>
        @endforeach
    @endforeach
    <span>$email</span>
@endsection

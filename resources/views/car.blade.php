@extends('layouts.app')

@section('title', $car->title)

@section('content')
<h1>{{$car->title}}</h1>
<h3>{{$car->producer}}</h3>
<p>{{$car->number_of_doors}}</p>
@endsection
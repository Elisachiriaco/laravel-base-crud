@extends('layouts.base')

@section('pageTitle','Comics - Home')

@section('mainContent')
        <div class="jumbotron">
            <img src="{{asset('../img/jumbotron.jpg')}}" alt="jumbotron">
        </div>
    
        <div class="content">
            <div class="title">
                <h1><a href="{{route('products.index')}}">Current Series</a></h1>
            </div>
        </div>
@endsection
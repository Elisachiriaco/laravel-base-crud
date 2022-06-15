@extends('layouts.base')

@section('pageTitle','Prodotto')

@section('mainContent')
    <main>
        <div class="container">
        <h1 class="text-center">{{$product->title}}</h1>
        <div class="d-flex justify-content-center">
            <img src="{{$product->image}}" alt="{{$product->title}}">
            <p class="p-2">{{$product->description}} <br>
                Data di vendita: {{$product->sale_date}}
            </p>
        </div>
        <div><a href="{{route('products.index')}}" class="btn btn-info">Ritorna ai fumetti</a></div>
        </div>
    </main>
@endsection
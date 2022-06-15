@extends('layouts.base')

@section('pageTitle','Comics - Home')

@section('mainContent')
    <main class="text-center">
        <h1>Comics</h1>
        <a href="{{route('products.index')}}" class="btn btn-info">Vai ai fumetti</a>
    </main>
@endsection
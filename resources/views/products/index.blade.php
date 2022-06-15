@extends('layouts.base')

@section('pageTitle','Prodotti')

@section('mainContent')
    <main>
        <div class="container">
        <h1>Fumetti</h1>
        <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Tipo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Visualizza</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($prodotti as $prodotto)
              <tr>
                <th scope="row">{{$prodotto->id}}</th>
                <td>{{$prodotto->title}}</td>
                <td>{{$prodotto->series}}</td>
                <td>{{$prodotto->type}}</td>
                <td>{{$prodotto->price}}</td>
                <td><a href="{{route('products.show',$prodotto->id)}}" class="btn btn-info">Visualizza</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
        </div>
    </main>
@endsection
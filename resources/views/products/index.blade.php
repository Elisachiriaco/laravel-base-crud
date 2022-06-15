@extends('layouts.base')

@section('pageTitle','Prodotti')

@section('mainContent')
    <main>
        {{-- <div class="container">
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
          
        </div> --}}
          <div class="jumbotron">
              <img src="{{asset('../img/jumbotron.jpg')}}" alt="jumbotron">
          </div>
      
          <div class="content">
              <div class="title">
                  <h1>Current Series</h1>
              </div>
              @foreach ($prodotti as $prodotto)
              <div class="card">
                  <img src="{{$prodotto->image}}" alt="{{$prodotto->title}}">
                  <h2><a href="{{route('products.show',$prodotto->id)}}">{{$prodotto->title}}</a></h2>
              </div>
              @endforeach
              
              <div class="button">
                  <a href="#">Load more</a>
              </div>
          </div>
      
          <div class="image-container">
              <ul>
                  <li><img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="digital comics"></li>
                  <li>digital comics</li>
              </ul>
              <ul>
                  <li><img src="{{asset('img/buy-comics-merchandise.png')}}" alt="merchandise"></li>
                  <li>dc merchandise</li>
              </ul>
              <ul>
                  <li><img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="subscriptions"></li>
                  <li>subscription</li>
              </ul>
              <ul>
                  <li><img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="shop locator"></li>
                  <li>comic shop locator</li>
              </ul>
              <ul>
                  <li><img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="visa"></li>
                  <li>dc power visa</li>
              </ul>
          </div>
    </main>
@endsection
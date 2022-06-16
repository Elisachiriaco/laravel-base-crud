@extends('layouts.base')

@section('pageTitle','Prodotti')

@section('mainContent')
    <main>
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
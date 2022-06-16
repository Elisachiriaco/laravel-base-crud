@extends('layouts.base')

@section('pageTitle','Prodotto')

@section('mainContent')
    <main>
        <div class="jumbotron">
            <img src="{{asset('../img/jumbotron.jpg')}}" alt="">
            <div class="image-hover">
                <img src="{{$product->image}}" alt="{{$product->title}}">
                <div class="comic-book">{{$product->type}}</div>
                <div class="view">View Gallery</div>
            </div>
        </div>
        <div class="line"></div>
        <div class="main-up">
            <div class="center">
            <h2>{{$product->title}}</h2>
            <div class="green-line">
                <div class="col-sx">
                <p>U.S. Price: <span class="price">{{$product->price}}</span> <span class="available">AVAILABLE</span> <span class="vertical">|</span><span class="check">Check Availability 	
                    &#9660;</span></p>
                </div>
            </div>
            <p>{{$product->description}}</p>
            <div class="adv">
            <h4>Advertisement </h4>
            <img src="{{asset('img/adv.jpg')}}" alt="advertisement">
            </div>
            </div>
        </div>
        <div class="main-down">
            <div class="col-left">
                <h3>Talent</h3>
                <hr>
                <div class="list">
                    <h6>Art by: 
                        <span class="artist">
                            Jose Luis Garcìa-Lòpez,Clay Mann,Rafael Albouquerque, Patrick Gleason,Dan Jungers,Joe Shouter, Neal Adams, Curt Swean, John Cassaday, Olivier Coipel, Jim Lee 
                        </span>
                    </h6>
                    <hr>
                    <h6>Written by:
                        <span class="artist">
                            Brad Meltzer, Tom King, Scott Snyder, Geoff John, Brian Michael Bendis, Paul Dini, Louise Simonoson, Richard Donner, Marv Wolfman, Peter J. Tomasi, Dan Jungers, Jerry Siegel, Paul Levitz 
                        </span>
                    </h6>
                    <hr>
                </div>
            </div>
            <div class="col-right">
                <h3>Specs</h3>
                <hr>
                <h6>Series: <span class="artist">{{$product->series}}</span></h6>
                <hr>
                <h6>U.S. Price: <span class="sale">{{$product->price}}</span></h6>
                <hr>
                <h6>On sale date: <span class="sale">{{$product->sale_date}}</span></h6>
                <hr>
            </div>
            <div class="box">
                <div class="box-center">
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                </div>
                <div class="box-center">
                    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                </div>
                <div class="box-center">
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                </div>
                <div class="box-center">
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                </div>
            </div>
        </div>
    </main>
@endsection
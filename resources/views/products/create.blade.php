@extends('layouts.base')

@section('pageTitle','Nuovo Prodotto')

@section('mainContent')
    <main class="main-insert">
      <h1>Inserisci nuovo fumetto</h1>
        <form action="{{route('products.store')}}" method="POST">
          @csrf 
            <div class="mb-3">
              <label for="title">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="title" name="title" placeholder="Insert title" value="{{old('title')}}">
              @error('title')
                  {{$message}}
              @enderror
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea name="description" id="description" cols="60" rows="10"></textarea>
            </div>
            <div class="mb-3 form-check">
              <label for="type" class="form-label">Select type:</label>
              <select name="type" id="type" class="form-control">
                <option value="comic book">comic book</option>
                <option value="graphic novel">graphic novel</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Image Url</label>
              <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" aria-describedby="image" name="image" placeholder="Insert Image" value="{{old('image')}}">
              @error('image')
              {{$message}}
              @enderror
            </div>
            <div class="mb-3">
              <label for="price">Price</label>
              <input type="text" class="form-control" id="price" name="price" placeholder="Insert Price" aria-describedby="price" max="99,99">
            </div>
            <div class="mb-3">
              <label for="series">Series</label>
              <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Insert Series" aria-describedby="series" value="{{old('series')}}">
              @error('series')
              {{$message}}
               @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-4">Save</button>
          </form>
    </main>
@endsection
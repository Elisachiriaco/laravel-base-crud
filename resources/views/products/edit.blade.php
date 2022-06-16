@extends('layouts.base')

@section('pageTitle','Nuovo Prodotto')

@section('mainContent')
    <main>
        <h1>Inserisci prodotto</h1>
        <form action="{{route('products.update',$product->id)}}" method="POST">
          @csrf 
          @method('PUT')
            <div class="mb-3">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="Insert title" value="{{$product->title}}">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea name="description" id="description" cols="30" rows="10">{{$product->description}}</textarea>
            </div>
            <div class="mb-3 form-check">
              <label for="type" class="form-label">Select type:</label>
              <select name="type" id="type" class="form-control">
                <option value="comic book" {{$product->type == 'comic book' ? 'selected' : ''}}>comic book</option>
                <option value="graphic novel" {{$product->type == 'graphic novel' ? 'selected' : '' }}>graphic novel</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Image Url</label>
              <input type="text" class="form-control" id="image" aria-describedby="image" name="image" placeholder="Insert Image" value="{{$product->image}}">
            </div>
            <div class="mb-3">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Insert Price" aria-describedby="price" value="{{$product->price}}">
            </div>
            <div class="mb-3">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Insert Series" aria-describedby="series" value="{{$product->series}}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </main>
@endsection
<header>
    <div class="logo">
        <img src="{{asset('../img/dc-logo.png')}}" alt="logo">
      <nav>
        <ul>
          <li><a href="\" class="{{Route::currentRouteName()=='home' ? 'selected' :''}}">Home</a></li>
          <li><a href="{{route('products.index')}}" class=" {{Route::currentRouteName()=='products.index' ? 'selected' : ''}}">Comics</a></li>
          <li><a href="{{route('products.create')}}" class="{{Route::currentRouteName()=='products.create' ? 'selected' : ''}}">New Comic</a></li>
          <li><a href="#">TV</a></li>
          <li><a href="#">Games</a></li>
          <li><a href="#">Collectibles</a></li>
          <li><a href="#">Videos</a></li>
          <li><a href="#">Fans</a></li>
          <li><a href="#">News</a></li>
          <li><a href="/shop">Shop</a></li>
        </ul>
      </nav>
      </div>
</header>
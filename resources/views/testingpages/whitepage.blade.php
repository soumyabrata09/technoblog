<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Whitepage testing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @if(Cart::instance('default')->content() )
       <h3 class="alert-danger">Cart is emptied now</h3>
    @endif
    <div class="spacer"></div>
    @if(Cart::instance('wishlist')->content() )
       <h3 class="alert-danger">Wishlist is emptied now</h3>
    @endif
    
    <div id="axiostestid">
    <!-- c_sousen :: added for testing the vue compoenent  -->
    <axiostest cart-count="{{ GetCartCount() }}"></axiostest>
    <hr/>
    <axiostest cart-count="{{ GetWishlistCount() }}"></axiostest>
    <hr/>
    <axiostest wishlist-content="{{ json_encode(GetWishlistContent()) }}"></axiostest>
  </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CafeHut</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>

    <!-- <link rel="stylesheet" href="{{ asset('css/algolia.css') }}"> -->
    <body>
    <div id="app">
        <header>
            <div class="top-nav container">
                <div class="logo">
                <img src="img/logo.jpg" alt="hero image" class="avatar">CafeHut
                </div>
                <ul>
                    <li><a href="{{ route('shop.index') }}">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <!-- CartCount functionality -->
                    
                    <li>
                      <a href="{{ route('cart.index') }}">Cart
                        <span class="cart-count">
                          @if( Cart::instance('default')->count() > 0 )
                           <span> {{ Cart::instance('default')->count() }} </span>
                          @endif
                        </span>
                      </a>
                    </li>
                </ul>
            </div> <!-- end top-nav -->

            <div class="hero container">
                <div class="hero-copy">
                    <h1>CafeSushe</h1>
                    <p>Smooth blends of cafine</p>
                    <div class="hero-buttons">
                        <a href="#" class="button button-white">Button 1</a>
                        <a href="#" class="button button-white">Button 2</a>
                    </div>
                </div> <!-- end hero-copy -->

                <div class="hero-image">
                    <img src="img/food1.jpg" alt="hero image">
                </div>
            </div> <!-- end hero -->
        </header>

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">CSS Grid Example</h1>

                <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid earum fugiat debitis nam, illum vero, maiores odio exercitationem quaerat. Impedit iure fugit veritatis cumque quo provident doloremque est itaque.</p>

                <div class="text-center button-container">
                    <a href="#" class="button">Featured</a>
                    <a href="#" class="button">On Sale</a>
                </div>


                <div class="products text-center">
                <!-- route built-in blade function -->
                @foreach($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show',$product->slug) }}"><img src="{{ asset('img/'.$product->slug.'.jpg') }}" alt="image not found"></a>
                        <a href="{{ route('shop.show',$product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product->price }}</div>
                    </div>
                @endforeach
                    <!-- <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href="#"><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href="#"><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href="#"><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href="#"><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href="#"><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href="#"><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href="#"><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div> -->
                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="{{ route('shop.index') }}" class="button">View more products</a>
                </div>

            </div> <!-- end container -->

        </div> <!-- end featured-section -->

       <div id="blogs">
           <blogcontent></blogcontent>
       </div>
        <!-- <wishlist></wishlist>
        <example></example> -->
   @include('partials.footer')
   </div>
   <script src="{{ mix('js/app.js') }}"></script>
   <script rel="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
 </body> 

</html>

@extends('layout')

@section('title', 'Products')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shop</span>
        <!-- <div>
            <div class="aa-input-ontainer" id="aa-input-container">
    <input type="search" id="aa-search-input" class="aa-input-search" placeholder="Search with algolia..." name="search"
        autocomplete="off" />
    <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
        <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
    </svg>
    </div>
    <form action="https://laravelecommerceexample.ca/search" method="GET" class="search-form">
    <i class="fa fa-search search-icon"></i>
    <input type="text" name="query" id="query" value="" class="search-box" placeholder="Search for product" required>
</form> -->
    @endcomponent

    <div class="container">
        
    </div>

    <div class="products-section container">
        <div class="sidebar">
            <h3>By Category</h3>
            <ul>
                <li class=""><a href="#">Laptop</a></li>
                <li class=""><a href="#">Camera</a></li>
                <li class=""><a href="#">Hard Drives</a></li>
                <li class=""><a href="#">Phones</a></li>
                <li class=""><a href="#">Electronics</a></li>
            </ul>
        </div>
         <!-- end sidebar -->
        <div>
            <div class="products-header">
                <h1 class="stylish-heading">Featured</h1>
                <div>
                    <strong>Price: </strong>
                    <a href="#">Low to High</a> |
                    <a href="#">High to Low</a>

                </div>
            </div>
            <div class="products text-center">
            @foreach($products as $product)
                <div class="product">
                <!-- we are passing route path along with the slug value by 
                look in the ShopController for detailed understandings -->
                    <a href="{{ route('shop.show',$product->slug) }}">
                    <!-- the following logic is trying to find the images in the designated '/img' folder 
                    hene we have kept the image name same as the slug name in our database -->
                      <img src="{{ asset('img/'.$product->slug.'.jpg') }}" alt="product">
                    </a>
                    <a href="{{ route('shop.show',$product->slug)}}">
                      <div class="product-name">{{ $product->name }}
                      </div>
                    </a>
                    <div class="product-price">{{ $product->price }}</div>
                </div>
            @endforeach
                                    <!-- <div class="product">
                        <a href="#"><img src="https://laravelecommerceexample.ca/storage/products/dummy/laptop-12.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">Laptop 12</div></a>
                        <div class="product-price">2286.93</div>
                    </div>
                                    <div class="product">
                        <a href="#"><img src="https://laravelecommerceexample.ca/storage/products/dummy/laptop-22.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">Laptop 22</div></a>
                        <div class="product-price">2496.10</div>
                    </div>
                                    <div class="product">
                        <a href="#"><img src="https://laravelecommerceexample.ca/storage/products/dummy/desktop-1.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">Desktop 1</div></a>
                        <div class="product-price">3088.88</div>
                    </div>
                                    <div class="product">
                        <a href="#"><img src="https://laravelecommerceexample.ca/storage/products/dummy/phone-2.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">Phone 2</div></a>
                        <div class="product-price">939.86</div>
                    </div>
                                    <div class="product">
                        <a href="#"><img src="https://laravelecommerceexample.ca/storage/products/dummy/phone-4.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">Phone 4</div></a>
                        <div class="product-price">828.53</div>
                    </div>
                                    <div class="product">
                        <a href="#"><img src="https://laravelecommerceexample.ca/storage/products/dummy/phone-8.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">Phone 8</div></a>
                        <div class="product-price">1316.29</div>
                    </div>
                                    <div class="product">
                        <a href="#"><img src="https://laravelecommerceexample.ca/storage/products/dummy/tablet-3.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">Tablet 3</div></a>
                        <div class="product-price">831.95</div>
                    </div>
                                    <div class="product">
                        <a href="#"><img src="https://laravelecommerceexample.ca/storage/products/dummy/tablet-5.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">Tablet 5</div></a>
                        <div class="product-price">547.67</div>
                    </div> -->
                </div>
            <!-- end products -->

        <div class="spacer"></div>
        <ul class="pagination" role="navigation">
            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
            </li>
        </ul>

        </div>
    </div>

@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <!-- <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script> -->
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection

<div class="might-like-section">
    <div class="container">
        <h2>You might also like...</h2>
        <div class="might-like-grid">
        
        @foreach($productRecommender as $element)
         <!-- c_sousen
                we are passing route path along with the slug value by 
                "route('shop.show',$element->slug)"
                look in the ShopController for detailed understandings -->
                <a href="{{ route('shop.show',$element->slug) }}" class="might-like-product">
                <!-- the following logic is trying to find the images in the designated '/img' folder 
                    hene we have kept the image name same as the slug name in our database -->
                    <img src="{{ asset('img/'.$element->slug.'.jpg') }}" alt="image not found">
                    <div class="might-like-product-name">{{$element->name}}</div>
                    <div class="might-like-product-price">{{$element->price}}</div>
                </a>
        @endforeach
                <!-- <a href="/shop/choco-lava" class="might-like-product">
                    <img src="{{ asset('img/choco-lava.jpg') }}" alt="image not found">
                    <div class="might-like-product-name">Choco Lava</div>
                    <div class="might-like-product-price">230</div>
                </a>
                <a href="/shop/intel-edison" class="might-like-product">
                    <img src="{{ asset('img/intel-edison.jpg') }}" alt="image not found">
                    <div class="might-like-product-name">Intel Edison</div>
                    <div class="might-like-product-price">17846</div>
                </a> -->
            
        </div>
    </div>
</div>
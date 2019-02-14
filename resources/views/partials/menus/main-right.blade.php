<ul>
                    <li><a href="{{ route('shop.index') }}">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li>
                      <a href="{{ route('cart.index') }}">Cart
                          <span class="cart-count">
                          <!-- GetCartCount() method is defined in app/helpers/ShoppingCartHelper.php
                          methods/functions defined as helpers can be used from anywhere within the application scope
                          as helpers needs to be configured to be autoloaded at the time of apllication start up 
                          for more details see  app/helpers/ShoppingCartHelper.php -->
                             @if( GetCartCount() > 0 )
                               <span>{{GetCartCount()}}</span>
                          </span>
                            @endif
                      </a> 
                    </li>
                    <!-- <router-view></router-view> -->
                    
</ul>
@extends('layout')

@section('title', 'Shopping Cart')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="#">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shopping Cart</span>
    @endcomponent

    <div class="cart-section container">
        <div>
            
            
            
            <h2>1 item(s) in Shopping Cart</h2>

            <div class="cart-table">
                                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="https://laravelecommerceexample.ca/shop/tablet-3"><img src="https://laravelecommerceexample.ca/storage/products/dummy/tablet-3.jpg" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="https://laravelecommerceexample.ca/shop/tablet-3">Tablet 3</a></div>
                            <div class="cart-table-description">64GB, 5.10 inch screen, 4GHz Quad Core</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <form action="https://laravelecommerceexample.ca/cart/5506c7fc1606a08349d4fbc918d4830b" method="POST">
                                <input type="hidden" name="_token" value="gAOsbdzNvujynTRlfMRHzq9x7l88Yl7cVKoKhysd">
                                <input type="hidden" name="_method" value="DELETE">

                                <button type="submit" class="cart-options">Remove</button>
                            </form>

                            <form action="https://laravelecommerceexample.ca/cart/switchToSaveForLater/5506c7fc1606a08349d4fbc918d4830b" method="POST">
                                <input type="hidden" name="_token" value="gAOsbdzNvujynTRlfMRHzq9x7l88Yl7cVKoKhysd">

                                <button type="submit" class="cart-options">Save for Later</button>
                            </form>
                        </div>
                        <div>
                            <select class="quantity" data-id="5506c7fc1606a08349d4fbc918d4830b" data-productQuantity="10">
                                                                    <option selected>1</option>
                                                                    <option >2</option>
                                                                    <option >3</option>
                                                                    <option >4</option>
                                                                    <option >5</option>
                                                            </select>
                        </div>
                        <div>$861.08</div>
                    </div>
                </div> <!-- end cart-table-row -->
                
            </div> <!-- end cart-table -->

            
                <a href="#" class="have-code">Have a Code?</a>

                <div class="have-code-container">
                    <form action="https://laravelecommerceexample.ca/coupon" method="POST">
                        <input type="hidden" name="_token" value="gAOsbdzNvujynTRlfMRHzq9x7l88Yl7cVKoKhysd">
                        <input type="text" name="coupon_code" id="coupon_code">
                        <button type="submit" class="button button-plain">Apply</button>
                    </form>
                </div> <!-- end have-code-container -->
            
            <div class="cart-totals">
                <div class="cart-totals-left">
                    Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like figuring out :).
                </div>

                <div class="cart-totals-right">
                    <div>
                        Subtotal <br>
                                                Tax (13%)<br>
                        <span class="cart-totals-total">Total</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        $861.08 <br>
                                                $111.94 <br>
                        <span class="cart-totals-total">$973.02</span>
                    </div>
                </div>
            </div> <!-- end cart-totals -->

            <div class="cart-buttons">
                <a href="https://laravelecommerceexample.ca/shop" class="button">Continue Shopping</a>
                <a href="https://laravelecommerceexample.ca/checkout" class="button-primary">Proceed to Checkout</a>
            </div>

            
            
            <h3>You have no items Saved for Later.</h3>

            
        </div>

    </div> <!-- end cart-section -->



    @include('partials.might-like')


@endsection



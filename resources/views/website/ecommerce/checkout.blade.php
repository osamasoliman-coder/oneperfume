@extends('website.ecommerce.layouts.ecommerce')
@section('content')
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu  mtb-15">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <section id="ceckOutBody">
                <div class="checkout-order-area mb-35">
                    <div class="order-title pb-10 mb-20 text-uppercase">
                        <h3>Your order</h3>
                    </div>
                    <div class="order_review table-responsive">
                        <table>
                            <tbody>
                            <tr>
                                <th class="product-name">image</th>
                                <th class="product-name">Product</th>
                                <th class="product-total">Total</th>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr class="cart_item">
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img src="{{asset('contents/website/img/cart/1.jpg')}}" alt=""/>
                                    </a>
                                </td>
                                <td class="product-name">
                                    laptop
                                </td>
                                <td class="product-total">
                                    <span>$ 100</span>
                                </td>
                            </tr>
                            <tr class="cart_item">
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img src="{{asset('contents/website/img/cart/1.jpg')}}" alt=""/>
                                    </a>
                                </td>
                                <td class="product-name">
                                    laptop
                                </td>
                                <td class="product-total">
                                    <span>$ 100</span>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr class="cart-subtotal">
                                <th colspan="2" class="text-right">Subtotal</th>
                                <td>
                                    <strong><span>$ subtotal</span></strong>
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th colspan="2" class="text-right">Total</th>
                                <td>
                                    <strong><span>$ subtotal</span></strong>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="customer-details-area">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                            <div class="customer-details mb-50">
                                <div class="customer-details-title mb-10">
                                    <h2>Billing Details</h2>
                                </div>
                                <div class="customer-details-form account-form p-20 clear">
                                    <form action="#">
                                <span class="form-row-first">
                                    <b>Name <span class="required">*</span></b>
                                    <input type="text">
                                </span>
                                        <span class="form-row-first">
                                    <b>Email Address <span class="required">*</span></b>
                                    <input type="email">
                                </span>
                                        <span>
                                    <b>Address <span class="required">*</span></b>
                                    <input type="text" placeholder="Street address">
                                </span>
                                        <span>
                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                </span>
                                        <span>
                                    <b>Town/City <span class="required">*</span></b>
                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                </span>
                                        <span>
                                    <b>State <span class="required">*</span></b>
                                    <input type="text" placeholder="">
                                </span>
                                        <span>
                                    <b>Phone <span class="required">*</span></b>
                                    <input type="text" placeholder="">
                                </span>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                            <div class="additional-information mb-50">
                                <div class="customer-details-title mb-10">
                                    <h2>Additional Information</h2>
                                </div>
                                <b>Order Notes</b>
                                <textarea name="#" id="#" cols="30" rows="10"
                                          placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>
                            <button class="btn btn-success">Checkout</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

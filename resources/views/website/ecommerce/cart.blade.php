@extends('website.ecommerce.layouts.ecommerce')
@section('content')

    <div class="cart-main-container shop-bg" id="productCartDetails">
        <div class="cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="woocommerce-breadcrumb mtb-15">
                            <div class="menu">
                                <ul>
                                    <li><a href="{{ route('website.home') }}">Home</a></li>
                                    <li class="active"><a href="{{ route('website.cart') }}">cart</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="cart-table mb-50 bg-fff">
                                    <form action="#">
                                        <div class="table-content table-responsive">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th class="product-remove">Action</th>
                                                    <th class="product-thumbnail">Image</th>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-price">Price</th>
                                                    <th class="product-quantity">Quantity</th>
                                                    <th class="product-subtotal">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="cart-item">
                                                    <td class="product-remove" style="width:165px;">
                                                        <a href="#"  class="btn btn-danger btn-sm my-1" title="Remove this item">
                                                            <i class="fa fa-trash"></i> delete item
                                                        </a>
                                                        <a href="#"  class="btn btn-warning btn-sm my-1" title="Remove this item">
                                                            <i class="fa fa-pencil"></i> Edit Cart
                                                        </a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="{{asset('contents/website/img/cart/1.jpg')}}" alt="" />
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="#">product name</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amounte">$ total</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <input value="1" min="1"  type="number">
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="sub-total">price</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart-item">
                                                    <td class="product-remove" style="width:165px;">
                                                        <a href="#"  class="btn btn-danger btn-sm my-1" title="Remove this item">
                                                            <i class="fa fa-trash"></i> delete item
                                                        </a>
                                                        <a href="#"  class="btn btn-warning btn-sm my-1" title="Remove this item">
                                                            <i class="fa fa-pencil"></i> Edit Cart
                                                        </a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="{{asset('contents/website/img/cart/1.jpg')}}" alt="" />
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="#">product name</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amounte">$ total</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <input value="1" min="1"  type="number">
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="sub-total">price</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart-item">
                                                    <td class="product-remove" style="width:165px;">
                                                        <a href="#"  class="btn btn-danger btn-sm my-1" title="Remove this item">
                                                            <i class="fa fa-trash"></i> delete item
                                                        </a>
                                                        <a href="#"  class="btn btn-warning btn-sm my-1" title="Remove this item">
                                                            <i class="fa fa-pencil"></i> Edit Cart
                                                        </a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="{{asset('contents/website/img/cart/1.jpg')}}" alt="" />
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="#">product name</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amounte">$ total</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <input value="1" min="1"  type="number">
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="sub-total">price</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart-item">
                                                    <td class="product-remove" style="width:165px;">
                                                        <a href="#"  class="btn btn-danger btn-sm my-1" title="Remove this item">
                                                            <i class="fa fa-trash"></i> delete item
                                                        </a>
                                                        <a href="#"  class="btn btn-warning btn-sm my-1" title="Remove this item">
                                                            <i class="fa fa-pencil"></i> Edit Cart
                                                        </a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="{{asset('contents/website/img/cart/1.jpg')}}" alt="" />
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="#">product name</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amounte">$ total</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <input value="1" min="1"  type="number">
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="sub-total">price</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart-item">
                                                    <td class="product-remove" style="width:165px;">
                                                        <a href="#"  class="btn btn-danger btn-sm my-1" title="Remove this item">
                                                            <i class="fa fa-trash"></i> delete item
                                                        </a>
                                                        <a href="#"  class="btn btn-warning btn-sm my-1" title="Remove this item">
                                                            <i class="fa fa-pencil"></i> Edit Cart
                                                        </a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="{{asset('contents/website/img/cart/1.jpg')}}" alt="" />
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="#">product name</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amounte">$ total</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <input value="1" min="1"  type="number">
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="sub-total">price</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart-item">
                                                    <td class="product-remove" style="width:165px;">
                                                        <a href="#"  class="btn btn-danger btn-sm my-1" title="Remove this item">
                                                            <i class="fa fa-trash"></i> delete item
                                                        </a>
                                                        <a href="#"  class="btn btn-warning btn-sm my-1" title="Remove this item">
                                                            <i class="fa fa-pencil"></i> Edit Cart
                                                        </a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="{{asset('contents/website/img/cart/1.jpg')}}" alt="" />
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="#">product name</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amounte">$ total</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <input value="1" min="1"  type="number">
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="sub-total">price</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>

                                    <div class="modal fade"  id="cartEditModal" style="z-index: 99999999999;" tabindex="-1" aria-labelledby="cartEditModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="cartEditModalLabel">Cart Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                  product details here
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                        <div class="cart_totals">
                            <div class="cart-total-taitle mb-30 text-uppercase">
                                <h3>Cart Totals</h3>
                            </div>
                        </div>
                        <div class="table-content table-responsive mb-30">
                            <table>
                                <tbody><tr>
                                    <td><strong>Subtotal</strong></td>
                                    <td><b>$ 100</b></td>
                                </tr>
                                <tr>
                                    <td><strong>Total</strong></td>
                                    <td><b>$ 32423</b></td>
                                </tr>
                            </tbody></table>
                        </div>
                        <div class="simple-product-form contuct-form mb-30">
                            <a class="btn btn-success btn-sm" href="/checkout">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

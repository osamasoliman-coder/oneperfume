@extends('website.ecommerce.layouts.ecommerce')
@section('content')
    <div class="simple-product-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="woocommerce-breadcrumb mtb-15">
                        <div class="menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Hats</a></li>
                                <li class="active"><a href="#">Cras nec nisl ut erat</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12 col-12">
                    <div class="row">
                        <div class="col-12" id="productList">
                            <div id="app_product_details">
                                <div class="row" v-if="typeof product == 'object'">
                                    <div class="col-lg-5">
                                        <div class="symple-product">
                                            <div class="single-product-tab box-shadow mb-20 text-center">
                                                <img src="https://wallpaperaccess.com/full/4318317.jpg"
                                                     class="img-fluid" alt=""
                                                     style="width: 100%;height: auto;background-size: cover"/>

                                            </div>
                                            <div class="single-product-menu mb-30 d-flex flex-wrap"
                                                 style="justify-content: space-evenly;">
                                                <div class="d-inline-block shadow shadow-sm my-1">
                                                    <img src="{{asset('contents/website/img/cart/1.jpg')}}"
                                                         style="height:80px;width:80px;cursor:pointer;" alt=""/>
                                                </div>

                                                <div class="d-inline-block shadow shadow-sm my-1">
                                                    <img src="{{asset('contents/website/img/cart/1.jpg')}}"
                                                         style="height:80px;width:80px;cursor:pointer;" alt=""/>
                                                </div>

                                                <div class="d-inline-block shadow shadow-sm my-1">
                                                    <img src="{{asset('contents/website/img/cart/1.jpg')}}"
                                                         style="height:80px;width:80px;cursor:pointer;" alt=""/>
                                                </div>

                                                <div class="d-inline-block shadow shadow-sm my-1">
                                                    <img src="{{asset('contents/website/img/cart/1.jpg')}}"
                                                         style="height:80px;width:80px;cursor:pointer;" alt=""/>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="symple-product box-shadow bg-fff p-15 mb-30">
                                            <h3>product name</h3>
                                            <div class="category mb-10">
                                                <b>Categories:</b>
                                                <a href="#" style="color: #0c5460;margin-left: 8px;"> Watches </a>
                                            </div>
                                            <div class="product-content simple-product-content mb-10">
                                                Reviews:
                                                <ul style="margin-left: 8px;">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <a href="#">(3 customer reviews)</a><br/>
                                                <div class="category mb-10">
                                                    <b>Price:</b>
                                                    <a href="#" style="color: #0c5460;margin-left: 8px;"> 100 AED </a>
                                                </div>
                                            </div>
                                            <div style="max-lines:2">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially unchanged. It was popularised in the 1960s with the release
                                                of Letraset sheets containing Lorem Ipsum passages, and more recently
                                                with desktop publishing software like Aldus PageMaker including versions
                                                of Lorem Ipsum.
                                            </div>
                                            <div class="simple-product-form contuct-form mtb-20">
                                                <form action="#" class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group d-flex justify-content-between">
                                                            <label for="" style="margin-right: 10px; font-weight:bold;font-size: 15px">Quantity: </label>
                                                            <input class="form-control" min="1" name="quantity" value="1" type="number" style="height: 23px;font-size: 13px">
                                                        </div>
                                                    </div>

                                                    <div class="col-8" style="float: right!important;">
                                                        <button type="button" style="float: right!important;">Add to cart</button>
                                                    </div>
                                                </form>
                                            </div>
                                            {{--                                            <div class="product_meta">--}}
                                            {{--                                                --}}
                                            {{--                                                <div class="footer-content pt-15 text-uppercase">--}}
                                            {{--                                                    <p>Share this product</p>--}}
                                            {{--                                                    <ul>--}}
                                            {{--                                                        <li>--}}
                                            {{--                                                            <a href="#" data-toggle="tooltip" title=""--}}
                                            {{--                                                               data-original-title="Facebook"><i--}}
                                            {{--                                                                    class="fa fa-facebook"></i></a>--}}
                                            {{--                                                        </li>--}}
                                            {{--                                                        <li>--}}
                                            {{--                                                            <a href="#" data-toggle="tooltip" title=""--}}
                                            {{--                                                               data-original-title="Twetter"><i--}}
                                            {{--                                                                    class="fa fa-twitter"></i></a>--}}
                                            {{--                                                        </li>--}}
                                            {{--                                                        <li>--}}
                                            {{--                                                            <a href="#" data-toggle="tooltip" title=""--}}
                                            {{--                                                               data-original-title="Instagram"><i--}}
                                            {{--                                                                    class="fa fa-instagram"></i></a>--}}
                                            {{--                                                        </li>--}}
                                            {{--                                                        <li>--}}
                                            {{--                                                            <a href="#" data-toggle="tooltip" title=""--}}
                                            {{--                                                               data-original-title="Google-Plus"><i--}}
                                            {{--                                                                    class="fa fa-google-plus"></i></a>--}}
                                            {{--                                                        </li>--}}
                                            {{--                                                        <li>--}}
                                            {{--                                                            <a href="#" data-toggle="tooltip" title=""--}}
                                            {{--                                                               data-original-title="Linkedin"><i--}}
                                            {{--                                                                    class="fa fa-linkedin"></i></a>--}}
                                            {{--                                                        </li>--}}
                                            {{--                                                    </ul>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="simple-product-tab box-shadow">
                                <div class="simple-product-tab-menu clear">
                                    <ul class="nav">
                                        <li><a class="active" href="#description" data-toggle="tab">Description</a></li>
                                        <li><a href="#reviews" data-toggle="tab">Reviews (3)</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content  bg-fff">
                                    <div class="tab-pane active" id="description">
                                        <div class="product-description p-20 bt">
                                            <h2>Product Description</h2>
                                            <p>
                                                it over 2000 years old. Richard McClintock, a Latin professor at
                                                Hampden-Sydney College in Virginia, looked up one of the more
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="reviews">
                                        <div class="product-reviews p-20 bt">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="review-area">
                                                        <h2>3 reviews for Cras nec nisl ut erat</h2>
                                                        <ul>
                                                            <li class="review-1">
                                                                <div class="review mb-20">
                                                                    <div class="review-img">
                                                                        <img class="img-thumbnail"
                                                                             src="{{ asset('contents/website/img/comment/1.png') }}"
                                                                             alt="">
                                                                    </div>
                                                                    <div class="review-content p-15">
                                                                        <b>admin -</b>
                                                                        <div
                                                                            class="review-rating product-content simple-product-content pull-right">
                                                                            <ul>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                        <p>December 16, 2015:</p>
                                                                        <p>like</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="review mb-20">
                                                                    <div class="review-img">
                                                                        <img class="img-thumbnail"
                                                                             src="{{ asset('contents/website/img/comment/1.png') }}"
                                                                             alt="">
                                                                    </div>
                                                                    <div class="review-content p-15">
                                                                        <b>alex -</b>
                                                                        <div
                                                                            class="review-rating product-content simple-product-content pull-right">
                                                                            <ul>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                        <span> December 18, 2015: </span>
                                                                        <p>google</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="review mb-20">
                                                                    <div class="review-img">
                                                                        <img class="img-thumbnail"
                                                                             src="{{ asset('contents/website') }}/img/comment/1.png"
                                                                             alt="">
                                                                    </div>
                                                                    <div class="review-content p-15">
                                                                        <b>name -</b>
                                                                        <div
                                                                            class="review-rating product-content simple-product-content pull-right">
                                                                            <ul>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                        <span>August 11, 2016: </span>
                                                                        <p>my rating</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="review-form form-style">
                                                        <h2>Add a review</h2>
                                                        <p>Add a review</p>
                                                        <div
                                                            class="review-rating product-content simple-product-content">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                        <form action="#">
                                                            <p>Your Review</p>
                                                            <textarea name="#" id="#" cols="30" rows="10"></textarea>
                                                            <p>Name *</p>
                                                            <input type="text">
                                                            <p>Emai *</p>
                                                            <input type="email">
                                                            <button>Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- related product -->
                    <div class="tab-area box-shadow bg-fff m" style="margin-top: 30px;margin-bottom: 30px;">
                        <div class="product-title home3-bg text-uppercase">
                            <h3>Related Product</h3>
                        </div>
                        <div class="tab-content">
                            <div style="padding: 0 15px;">
                                <div class="tab-content">
                                    <div class="row">
                                        @for ($i = 0; $i < 4; $i++)
                                            <div class="col-md-3">

                                                <div class="product-wrapper">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img
                                                                src="http://127.0.0.1:8000/contents/website/img/product/5.jpg"
                                                                alt="" class="primary">
                                                            <img
                                                                src="http://127.0.0.1:8000/contents/website/img/product/6.jpg"
                                                                alt="" class="secondary">
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip" title=""
                                                                       data-original-title="Add to cart"><i
                                                                            class="fa fa-shopping-cart"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" title=""
                                                                       data-original-title="Wishlist"><i
                                                                            class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" title=""
                                                                       data-original-title="Compare"><i
                                                                            class="fa fa-comments"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" title=""
                                                                       data-original-title="Accumsan eli"><i
                                                                            class="fa fa-search"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&amp;300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab-area end -->
            </div>

        </div>
    </div>
    </div>
@endsection

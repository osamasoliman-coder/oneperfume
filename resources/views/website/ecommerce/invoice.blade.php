@extends('website.ecommerce.layouts.ecommerce')
@section('content')

    <div class="cart-main-container shop-bg">
        <div class="cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="woocommerce-breadcrumb mtb-15">
                            <div class="menu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li class="active">invoice</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="invoiceBody">
                        <div class="card card-body printableArea mb-4">
                            <h3><b>INVOICE</b> <span class="pull-right">#id</span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <h3><b class="text-danger">CIT Web Store</b></h3>
                                            <p class="text-muted m-l-5">
                                                Dhanmondi,
                                                <br> Dhaka,
                                                <br> Bangladesh
                                                <br> 01620006811
                                                <br> 01620006812
                                            </p>
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <h3>To</h3>
                                            <h4 class="font-bold">name</h4>
                                            <p class="text-muted m-l-30">
                                                address, <br>
                                                address2, <br>
                                                town, <br>
                                                state, <br>
                                                phone, <br>
                                            </p>
                                            <p class="m-t-30">
                                                <b>Invoice Date : </b>
                                                <br>
                                                <i class="fa fa-calendar"></i>
                                                1/2/1010
                                            </p>
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Description</th>
                                                <th class="text-right">Quantity</th>
                                                <th class="text-right">Unit Cost</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td> product name</td>
                                                <td class="text-right"> 3 </td>
                                                <td class="text-right"> TK. 100</td>
                                                <td class="text-right"> TK. 200 </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td> product name</td>
                                                <td class="text-right"> 3 </td>
                                                <td class="text-right"> TK. 100</td>
                                                <td class="text-right"> TK. 200 </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td> product name</td>
                                                <td class="text-right"> 3 </td>
                                                <td class="text-right"> TK. 100</td>
                                                <td class="text-right"> TK. 200 </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td> product name</td>
                                                <td class="text-right"> 3 </td>
                                                <td class="text-right"> TK. 100</td>
                                                <td class="text-right"> TK. 200 </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Sub-Total amount: TK. 100</p>
                                        <hr>
                                        <h3><b>Total :</b> TK. 200</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        <button id="print" class="btn btn-default btn-outline" type="button">
                                            <span><i class="fa fa-print"></i> Print</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @push('custom_js')
        <script src="{{asset('contents/website')}}/js/jquery.PrintArea.js" type="text/JavaScript"></script>
        <script>
            $(document).ready(function() {
                $("#print").click(function() {
                    var mode = 'iframe'; //popup
                    var close = mode == "popup";
                    var options = {
                        mode: mode,
                        popClose: close
                    };
                    $("div.printableArea").printArea(options);
                });
            });
        </script>
    @endpush

@endsection

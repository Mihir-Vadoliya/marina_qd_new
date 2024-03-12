@extends('frontend.layouts.app')
@section('content')
        
    <section class="shoppingFlow | padding-top-main">
        <div class="container">
            <div class="row row-gap-5 gx-5 justify-content-md-center">
                <ul>
                    <li>
                        <div class="title">Shopping Cart</div>
                        <div class="dot">

                        </div>
                    </li>
                    <li class="active">
                        <div class="title">Details</div>
                        <div class="dot">

                        </div>
                    </li>
                    <li>
                        <div class="title">Complete Order</div>
                        <div class="dot">

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="orderPage | padding-top-main margin-bottom-max">
        <div class="container">
            <div class="row row-gap-5 gx-5">
                <div class="col-md-7">
                    <div class="mt-3">
                        <table class="table align-middle">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="product">
                                            <div class="position-relative">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/products/pro1.jpg') }}" alt="">
                                                </div>
                                                <div class="count"><span>2</span></div>
                                            </div>
                                            <div class="details">
                                                <h1>SURMAI Steaks</h1>
                                                <ul class="tags">
                                                    <li><strong>1000 g</strong></li>
                                                    <li>4-5 pcs</li>
                                                    <li>Serves 3</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="price">
                                            <span class="rupee">₹</span>
                                            575
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product">
                                            <div class="position-relative">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/products/pro1.jpg') }}" alt="">
                                                </div>
                                                <div class="count"><span>1</span></div>
                                            </div>
                                            <div class="details">
                                                <h1>SURMAI Steaks</h1>
                                                <ul class="tags">
                                                    <li><strong>1000 g</strong></li>
                                                    <li>4-5 pcs</li>
                                                    <li>Serves 3</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="price">
                                            <span class="rupee">₹</span>
                                            575
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <ul class="checkoutSec">
                                <li>
                                    <div class="title">Subtotal :</div>
                                    <div class="price">
                                        <span class="rupee">₹</span>
                                        1000
                                    </div>
                                </li>
                                <li>
                                    <div class="title">Shipping Charges :</div>
                                    <div class="price">
                                        <span class="rupee">₹</span>
                                        100
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <ul class="checkoutSec pt-2">
                                <li>
                                    <div class="title">Grand Total :</div>
                                    <div class="total">
                                        <span class="rupee">₹</span>
                                        1000
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <form>
                        <div class="row row-gap-3">
                            <div class="col-12">
                                <label for="" class="head">Full Name</label>
                                <input type="text">
                            </div>
                            <div class="col-12">
                                <label for="" class="head">Email Address</label>
                                <input type="text">
                            </div>
                            <div class="col-12">
                                <label for="" class="head">Billing Address</label>
                                <input type="text">
                            </div>
                            <div class="col-6">
                                <input type="text" placeholder="Enter City">
                            </div>
                            <div class="col-6">
                                <input type="text" placeholder="Zip Code">
                            </div>
                            <div class="col-12 mt-3">
                                <div class="head">Payment Method </div>
                                <div class="row mt-2 gx-5">
                                    <div class="col-5 d-flex flex-column align-items-center">
                                        <label for="razorpay" class="mb-2">
                                            <img src="{{ asset('assets/images/icons/Razorpay_logo.svg') }}" style="width: 150px;" alt="">
                                        </label>
                                        <input type="radio" name="paymentMethod" id="razorpay" checked  />
                                    </div>
                                    <div class="col-5 d-flex flex-column align-items-center">
                                        <label for="paytm" class="mb-2">
                                            <img src="{{ asset('assets/images/icons/Paytm_Logo.svg') }}" style="width: 100px;" alt="">
                                        </label>
                                        <input type="radio" name="paymentMethod" id="paytm" />
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="col-12">
                                <label class="d-flex align-items-center mt-3">
                                    <input name="rememberme" type="checkbox" value="forever" > <span class="ms-2 pt-1">Billing address is same as shipping & Save Address</span>
                                </label>
                            </div>
                            <div class="col-12">
                                <button class="btn1"><span>Place Order</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            
        </div>
    </section>

@endsection
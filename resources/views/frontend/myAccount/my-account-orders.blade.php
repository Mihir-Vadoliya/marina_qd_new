@extends('frontend.layouts.app')
@section('content')
    
    @include('frontend.myAccount.sidebar-account')
                
                <div class="col-md-9">
                    <h1 class="heading3">Your Orders</h1>
                        <div class="table-responsive mt-3">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#1357</td>
                                        <td>March 45, 2020</td>
                                        <td>Processing</td>
                                        <td>₹125.00 for 2 item</td>
                                        <td><a href="#" class="btn-small d-block">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>#2468</td>
                                        <td>June 29, 2020</td>
                                        <td>Completed</td>
                                        <td>₹364.00 for 5 item</td>
                                        <td><a href="#" class="btn-small d-block">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>#2366</td>
                                        <td>August 02, 2020</td>
                                        <td>Completed</td>
                                        <td>₹280.00 for 3 item</td>
                                        <td><a href="#" class="btn-small d-block">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </section>
        
@endsection
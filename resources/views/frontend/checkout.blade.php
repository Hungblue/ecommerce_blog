@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="container mt-3">
        <form action="{{ url('/payment/vnpay') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="font-weight-bold">Thông tin cơ bản</h5>
                            <hr>
                            <div class="row check-form">
                                <div class="col-md-6">
                                    <label class="font-weight-bold" for="">Họ và Tên đệm</label>
                                    <input type="text" class="form-control firstname" name="firstname"
                                        value="{{ Auth::user()->name }}" placeholder="Enter First Name">
                                    <span id="firstname_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <label class="font-weight-bold" for="">Tên</label>
                                    <input type="text" class="form-control lastname" name="lastname"
                                        value="{{ Auth::user()->lastname }}" placeholder="Enter Last Name">
                                    <span id="lastname_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label class="font-weight-bold" for="">Email</label>
                                    <input type="email" class="form-control email" name="email"
                                        value="{{ Auth::user()->email }}" placeholder="Enter Email">
                                    <span id="email_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label class="font-weight-bold" for="">Số điện thoại</label>
                                    <input type="text" class="form-control phone" name="phone"
                                        value="{{ Auth::user()->phone }}" placeholder="Enter Phone Number">
                                    <span id="phone_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label class="font-weight-bold" for="">Địa chỉ 1</label>
                                    <input type="text" class="form-control address1" name="address1"
                                        value="{{ Auth::user()->address1 }}" placeholder="Enter Address 1">
                                    <span id="address1_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label class="font-weight-bold" for="">Địa chỉ 2</label>
                                    <input type="text" class="form-control address2" name="address2"
                                        value="{{ Auth::user()->address2 }}" placeholder="Enter Address">
                                    <span id="address2_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label class="font-weight-bold" for="">Quận</label>
                                    <input type="text" class="form-control city" name="city"
                                        value="{{ Auth::user()->city }}" placeholder="Enter City">
                                    <span id="city_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label class="font-weight-bold" for="">Thành Phố</label>
                                    <input type="text" class="form-control state" name="state"
                                        value="{{ Auth::user()->state }}" placeholder="Enter State">
                                    <span id="state_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label class="font-weight-bold" for="">Quốc Gia</label>
                                    <input type="text" class="form-control country" name="country"
                                        value="{{ Auth::user()->country }}" placeholder="Enter Country">
                                    <span id="country_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label class="font-weight-bold" for="">Mã Pin Code</label>
                                    <input type="text" class="form-control pincode" name="pincode"
                                        value="{{ Auth::user()->pincode }}" placeholder="Enter Pin Code">
                                    <span id="pincode_error" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body font-weight-bold">
                            Thông tin thanh toán</div>
                        <hr>
                        @php
                            $total = 0;
                        @endphp
                        <table class="table table-striped table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Giá * số lượng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartitems as $item)
                                    <tr>
                                        <td>{{ $item->products->name }}</td>
                                        <td>{{ $item->product_qty }}</td>
                                        <td>{{ $item->products->selling_price }}</td>
                                        <td>{{ $item->product_qty * $item->products->selling_price }}</td>
                                    </tr>
                                    @php
                                        $total += $item->products->selling_price * $item->product_qty;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>

                        <div class="card-footer">
                            <h6 class="float-right">Tổng cộng: {{ $total }} đ
                            </h6>
                            <input type="hidden" name="total_price" value="{{ $total }}">

                        </div>
                        <hr>
                        <input type="hidden" name="payment_mode" value="COD">
                        <button type="submit" class="btn btn-primary float-end place_btn mb-3">Đặt hàng</button>
                        <button type="submit" class="btn btn-primary float-end mb-3">Thanh toán
                            VNPAY 2</button>
                        <div class="mt-3 paypal_btn" id="paypal-button"></div>

                    </div>
                </div>
            </div>
        </form>

    </div>
    </div>
@endsection

@section('scripts')
    {{-- <script
        src="https://www.paypal.com/sdk/js?client-id=AYBl1eK9sGgieS1DiR1ysPL3Yw_KJRrMgUq1raRQYyl7Fbr6ce21oUgmnlOCjw86KlmJdUG7d4JoE3m0">
    </script> --}}
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
        paypal.Button.render({
            // Configure environment
            env: 'sandbox',
            client: {
                sandbox: 'AYBl1eK9sGgieS1DiR1ysPL3Yw_KJRrMgUq1raRQYyl7Fbr6ce21oUgmnlOCjw86KlmJdUG7d4JoE3m0',
                production: 'demo_production_client_id'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'large',
                color: 'gold',
                shape: 'pill',
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function(data, actions) {
                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: '{{ $total }}',
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function(data, actions) {
                return actions.payment.execute().then(function(details) {
                    // Show a confirmation message to the buyer
                    //alert('Transaction completed by paypal');

                    var firstname = $('.firstname').val();
                    var lastname = $('.lastname').val();
                    var email = $('.email').val();
                    var phone = $('.phone').val();
                    var address1 = $('.address1').val();
                    var address2 = $('.address2').val();
                    var city = $('.city').val();
                    var state = $('.state').val();
                    var country = $('.country').val();
                    var pincode = $('.pincode').val();

                    $.ajax({
                        method: 'POST',
                        url: "/place-order",
                        data: {
                            'firstname': firstname,
                            'lastname': lastname,
                            'email': email,
                            'phone': phone,
                            'address1': address1,
                            'address2': address2,
                            'city': city,
                            'state': state,
                            'country': country,
                            'pincode': pincode,
                            'payment_mode': "Paud by PayPal",
                            'payment_id': details.id,
                        },
                        success: function(response) {
                            //alert(response.status);
                            //swal(response.status);
                            swal({
                                icon: "success",
                            });
                            window.location.href = "/my-orders";
                        }
                    })
                });
            }
        }, '#paypal-button');
    </script>
@endsection

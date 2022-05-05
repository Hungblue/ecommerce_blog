@extends('layouts.front2')

@section('title')
    Welcome to Shop
@endsection

@section('content')
    <!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="index">Trang chủ</a>
                        <i>|</i>
                    </li>
                    <li>Giới thiệu</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->

    <!-- about -->
    <div class="welcome py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>G</span>iới
                <span>T</span>hiệu
                <!-- //tittle heading -->
                <div class="row">
                    <div class="col-lg-6 welcome-left">
                        <h3>Xin chào</h3>
                        <h4 class="my-sm-3 my-2">Chúng tôi là Máy Xanh với niềm đam mê với công nghệ và khát vọng muốn được
                            chia sẻ phủ xong niềm đam mê của chúng tôi</h4>
                        <p>Chúng tôi sẽ cung cấp cho các bạn những sản phẩm tốt nhất với dịch vụ tốt nhất cho trải nghiệm
                            của bạn</p>
                    </div>
                    <div class="col-lg-6 welcome-right-top mt-lg-0 mt-sm-5 mt-4">
                        <img src="{{ asset('frontend/images/ab.jpg') }}" class="img-fluid" alt=" ">
                    </div>
                </div>
        </div>
    </div>
    <!-- //about -->

    <!-- testimonials -->
    <div class="testimonials py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center text-white mb-lg-5 mb-sm-4 mb-3">
                <span>H</span>àng
                <span>Đ</span>ặc
                <span>B</span>iệt
            </h3>
            <!-- tittle heading -->
            <div class="row gallery-index">
                <div class="col-sm-6 med-testi-grid">
                    <div class="med-testi test-tooltip rounded p-4">
                        <p>Những khách hàng thân quen luôn được chúng tôi trân trọng </p>
                    </div>
                    <div class="row med-testi-left my-5">
                        <div class="col-lg-2 col-3 w3ls-med-testi-img">
                            <img src="{{ asset('frontend/images/user.jpg') }}" alt=" " class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-lg-10 col-9 med-testi-txt">
                            <h4 class="font-weight-bold mb-lg-1 mb-2">Long</h4>
                            <p>Iphone 13</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 med-testi-grid">
                    <div class="med-testi test-tooltip rounded p-4">
                        <p>Hàng dùng rất tốt</p>
                    </div>
                    <div class="row med-testi-left my-5">
                        <div class="col-lg-2 col-3 w3ls-med-testi-img">
                            <img src="{{ asset('frontend/images/user.jpg') }}" alt=" " class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-lg-10 col-9 med-testi-txt">
                            <h4 class="font-weight-bold mb-lg-1 mb-2">Hưng</h4>
                            <p>Sam Sung Ultra 22</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 med-testi-grid">
                    <div class="med-testi test-tooltip rounded p-4">
                        <p>Chất lượng phục vụ tốt 5*</p>
                    </div>
                    <div class="row med-testi-left mt-sm-5 my-5">
                        <div class="col-lg-2 col-3 w3ls-med-testi-img">
                            <img src="{{ asset('frontend/images/user.jpg') }}" alt=" " class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-lg-10 col-9 med-testi-txt">
                            <h4 class="font-weight-bold mb-lg-1 mb-2">Tân</h4>
                            <p>Iphone 11</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 med-testi-grid">
                    <div class="med-testi test-tooltip rounded p-4">
                        <p>Ship rất nhanh</p>
                    </div>
                    <div class="row med-testi-left mt-5">
                        <div class="col-lg-2 col-3 w3ls-med-testi-img">
                            <img src="{{ asset('frontend/images/user.jpg') }}" alt=" " class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-lg-10 col-9 med-testi-txt">
                            <h4 class="font-weight-bold mb-lg-1 mb-2">Long</h4>
                            <p>Iphone 11 Pro Max</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->
@endsection

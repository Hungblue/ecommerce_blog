@extends('layouts.front')

@section('title')
    May xanh chào mừng bạn
@endsection

@section('content')
    <!-- top Products -->
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>Đ</span>iện Thoại
                <span>&</span>
                <span>M</span>áy Tính
            </h3>
            <!-- //tittle heading -->
            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-9">
                    <div class="wrapper">
                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <div class="row">
                                <div class="col-md-4 product-men">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="{{ asset('frontend/images/m1.jpg') }}" alt="">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single" class="link-product-add-cart">Xem</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single">Samsung Galaxy J7</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">2.000.000 đ</span>
                                                <del>2.800.000 đ</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="Samsung Galaxy J7" />
                                                        <input type="hidden" name="amount" value="2.000.000" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Thêm vào giỏ hàng"
                                                            class="button btn" />
                                                    </fieldset>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 product-men mt-md-0 mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="{{ asset('frontend/images/m2.jpg') }}" alt="">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single" class="link-product-add-cart">Xem</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">Mới</span>

                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single">OPPO A37f</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">2.300.000 đ</span>
                                                <del>2.500.000 đ</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="OPPO A37f" />
                                                        <input type="hidden" name="amount" value="2.300.000" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Thêm vào giỏ hàng"
                                                            class="button btn" />
                                                    </fieldset>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 product-men mt-md-0 mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="{{ asset('frontend/images/m3.jpg') }}" alt="">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single" class="link-product-add-cart">Xem</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">Mới</span>

                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single">Apple iPhone X</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">2.800.000 đ</span>
                                                <del>3.000.000 đ</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="Apple iPhone X" />
                                                        <input type="hidden" name="amount" value="2.800.000" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Thêm vào giỏ hàng"
                                                            class="button btn" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //first section -->
                        <!-- second section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <div class="row">
                                <div class="col-md-4 product-men">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="{{ asset('frontend/images/mk1.jpg') }}" alt="">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single" class="link-product-add-cart">Xem</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single">Infinix Hot S3</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">3.000.000 đ</span>
                                                <del>320.000 đ</del>
                                            </div>
                                            <span class="product-new-top">Mới</span>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="Infinix Hot S3" />
                                                        <input type="hidden" name="amount" value="3.000.000" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Thêm vào giỏ hàng"
                                                            class="button btn" />
                                                    </fieldset>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 product-men mt-md-0 mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="{{ asset('frontend/images/mk2.jpg') }}" alt="">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single" class="link-product-add-cart">Xem</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single">Moto X4 (6 GB)</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">.233.000</span>
                                                <del>2.400.000</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="Moto X4 (6 GB)" />
                                                        <input type="hidden" name="amount" value="2.330.000" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Thêm vào giỏ hàng"
                                                            class="button btn" />
                                                    </fieldset>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 product-men mt-md-0 mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="{{ asset('frontend/images/mk3.jpg') }}" alt="">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single" class="link-product-add-cart">Xem</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single">iVooMi i Series</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">2.490.000 đ</span>
                                                <del>2.600.000 đ</del>
                                            </div>
                                            <span class="product-new-top">Mới</span>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="iVooMi i Series" />
                                                        <input type="hidden" name="amount" value="2.490.000" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Thêm vào giỏ hàng"
                                                            class="button btn" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //second section -->
                        <!-- 3rd section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
                            <div class="row">
                                <div class="col-md-4 product-men">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="{{ asset('frontend/images/mk4.jpg') }}" alt=""
                                                class="img-fluid">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single" class="link-product-add-cart">Xem</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single">Dell Vostro Laptop</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">20.052.000 đ</span>
                                                <del>20.600.000 đ</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="Dell Vostro Laptop" />
                                                        <input type="hidden" name="amount" value="20.052.000" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Thêm vào giỏ hàng"
                                                            class="button btn" />
                                                    </fieldset>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 product-men mt-md-0 mt-5 mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="{{ asset('frontend/images/mk5.jpg') }}" alt=""
                                                class="img-fluid">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single" class="link-product-add-cart">Xem</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single">Acer Laptop</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">20.040.000 đ</span>
                                                <del>20.600.000 đ</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="Acer Laptop" />
                                                        <input type="hidden" name="amount" value="20.040.000" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Thêm vào giỏ hàng"
                                                            class="button btn" />
                                                    </fieldset>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 product-men mt-md-0 mt-5 mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="{{ asset('frontend/images/mk6.jpg') }}" alt=""
                                                class="img-fluid">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single" class="link-product-add-cart">Xem</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single">Lenovo </a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">30.000.000 đ</span>
                                                <del>30.200.000 đ</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="Alcatel Tablet" />
                                                        <input type="hidden" name="amount" value="30.000.000" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Thêm vào giỏ hàng"
                                                            class="button btn" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //3rd section -->
                        <!-- fourth section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
                            <div class="row">
                                <div class="col-md-4 product-men">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="{{ asset('frontend/images/mk7.jpg') }}" alt=""
                                                class="img-fluid">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single" class="link-product-add-cart">Xem</a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-new-top">Mới</span>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single">Intex Power Bank</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">100.000 đ</span>
                                                <del>200.000 đ</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="Intex Power Bank" />
                                                        <input type="hidden" name="amount" value="100.000" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Thêm vào giỏ hàng"
                                                            class="button btn" />
                                                    </fieldset>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 product-men mt-md-0 mt-5 mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="{{ asset('frontend/images/mk8.jpg') }}" alt=""
                                                class="img-fluid">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single" class="link-product-add-cart">Xem</a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-new-top">Mới</span>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single">HP Wireless Printer</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">2.430.000 đ</span>
                                                <del>2.500.000 đ</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="HP Wireless Printer" />
                                                        <input type="hidden" name="amount" value="2.430.000" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Thêm vào giỏ hàng"
                                                            class="button btn" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 product-men mt-md-0 mt-5 mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="{{ asset('frontend/images/mk9.jpg') }}" alt=""
                                                class="img-fluid">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single" class="link-product-add-cart">Xem</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single">Alcatel Tablet</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">3.200.000 đ</span>
                                                <del>3.500.000 đ</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="Alcatel Tablet" />
                                                        <input type="hidden" name="amount" value="3.200.000" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Thêm vào giỏ hàng"
                                                            class="button btn" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //fourth section -->
                    </div>
                </div>
                <!-- //product left -->
                <!-- product right -->
                <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
                    <div class="side-bar p-sm-4 p-3">
                        <div class="search-hotel border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Hãng</h3>
                            <form action="#" method="post">
                                <input type="search" placeholder="Search Brand..." name="search" required="">
                                <input type="submit" value=" ">
                            </form>
                            <div class="left-side py-2">
                                <ul>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Samsung</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Red Mi</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Apple</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Nexus</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Motorola</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Micromax</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Lenovo</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Oppo</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Sony</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">LG</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">One Plus</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ram -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Ram</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Ít hơn 512 MB</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">512 MB - 1 GB</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">1 GB</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">2 GB</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">3 GB</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">5 GB</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">6 GB</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">6 GB & Hơn</span>
                                </li>
                            </ul>
                        </div>
                        <!-- //ram -->
                        <!-- price -->
                        <div class="range border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Giá</h3>
                            <div class="w3l-range">
                                <ul>
                                    <li>
                                        <a href="#">Dưới 1.000.000 đ</a>
                                    </li>
                                    <li class="my-1">
                                        <a href="#">1.000.000 đ - 5.000.000 đ</a>
                                    </li>
                                    <li>
                                        <a href="#">5.000.000 đ - 10.000.000 đ</a>
                                    </li>
                                    <li class="my-1">
                                        <a href="#">10.000.000 đ - 20.000.000 đ</a>
                                    </li>
                                    <li>
                                        <a href="#">20.000.000 đ - 30.000.000 đ</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">Trên 30.000.000 đ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- //price -->
                        <!-- discounts -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Giảm giá</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">5% Hoặc hơn</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">10% Hoặc hơn</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">20% Hoặc hơn</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">30% Hoặc hơn</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">50% Hoặc hơn</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">60% Hoặc hơn</span>
                                </li>
                            </ul>
                        </div>
                        <!-- //discounts -->
                        <!-- offers -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Ưu đãi</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Phiếu mua hàng trao đổi</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Trả góp 0%</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Giá đặc biệt</span>
                                </li>
                            </ul>
                        </div>
                        <!-- //offers -->
                        <!-- delivery -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">COD</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Đủ điều kiện để nhận tiền mặt khi giao hàng</span>
                                </li>
                            </ul>
                        </div>
                        <!-- //delivery -->
                        <!-- arrivals -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Mới tới</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">30 ngày cuối</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">90 ngày cuối</span>
                                </li>
                            </ul>
                        </div>
                        <div class="left-side py-2">
                            <h3 class="agileits-sear-head mb-3">Còn hàng</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Hết hàng</span>
                                </li>
                            </ul>
                        </div>
                        <!-- //arrivals -->
                    </div>
                    <!-- //product right -->
                </div>
            </div>
        </div>
    </div>
    <!-- //top products -->

    <!-- middle section -->
    @include('frontend.inc.front-middle-section')
@endsection

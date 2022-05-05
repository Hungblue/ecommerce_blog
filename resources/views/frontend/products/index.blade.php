@extends('layouts.front')

@section('title')
    {{ $category->name }}
@endsection

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6>Các Danh Mục / {{ $category->name }}</h6>
        </div>
    </div>
    <!-- top Products -->
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-12">
                    <div class="wrapper">
                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <h4 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                                <span>D</span>anh sách sản phẩm
                            </h4>
                            <div class="row">
                                <div class="owl-carousel featured-theme owl-theme">
                                    @foreach ($trending_products as $item)
                                        <div class="item">
                                            <div class="product-men mt-5">
                                                <div class="men-pro-item simpleCart_shelfItem">
                                                    <div class="men-thumb-item text-center">
                                                        @php
                                                            $arrayImage = explode(',', $item->image);
                                                        @endphp
                                                        <img class=""
                                                            src="{{ asset('assets/uploads/product/' . $arrayImage[0]) }}"
                                                            alt="image1">
                                                        <div class="men-cart-pro">
                                                            <div class="inner-men-cart-pro">
                                                                <a href="/category/{{ $category->slug }}/{{ $item->slug }}"
                                                                    class="link-product-add-cart">Xem
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info-product text-center border-top mt-4">
                                                        <h4 class="pt-1">
                                                            <a
                                                                href="/category/{{ $category->slug }}/{{ $item->slug }}">{{ $item->name }}</a>
                                                        </h4>
                                                        <div class="info-product-price my-2">
                                                            <span
                                                                class="item_price">{{ $item->selling_price }}đ</span>
                                                            <del>{{ $item->original_price }}đ</del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- //first section -->
                        <!-- second section -->
                        {{-- <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <h4 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                                <span>S</span>ản Phẩm Khác
                            </h4>
                            <div class="row">
                                <div class="owl-carousel featured-theme owl-theme">
                                    @foreach ($products as $item)
                                        <div class="item">
                                            <div class="product-men mt-5">
                                                <div class="men-pro-item simpleCart_shelfItem">
                                                    <div class="men-thumb-item text-center">
                                                        <img class=""
                                                            src="{{ asset('assets/uploads/product/' . $item->image) }}"
                                                            alt="image1">
                                                        <div class="men-cart-pro">
                                                            <div class="inner-men-cart-pro">
                                                                <a href="/category/{{ $category->slug }}/{{ $item->slug }}"
                                                                    class="link-product-add-cart">Xem
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info-product text-center border-top mt-4">
                                                        <h4 class="pt-1">
                                                            <a
                                                                href="/category/{{ $category->slug }}/{{ $item->slug }}">{{ $item->name }}</a>
                                                        </h4>
                                                        <div class="info-product-price my-2">
                                                            <span
                                                                class="item_price">{{ $item->selling_price }}đ</span>
                                                            <del>2.800.000 đ</del>
                                                        </div>
                                                        <div
                                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name"
                                                                        value="Samsung Galaxy J7" />
                                                                    <input type="hidden" name="amount" value="200.00" />
                                                                    <input type="hidden" name="discount_amount"
                                                                        value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart"
                                                                        class="button btn" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> --}}
                        <!-- //second section -->

                    </div>
                </div>
                <!-- //product left -->
                <!-- product right -->
                {{-- <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
                    <div class="side-bar p-sm-4 p-3">
                        <div class="search-hotel border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Thương hiệu</h3>
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
                                    <span class="span">Lớn hơn 6 GB</span>
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
                                        <a href="#">20.000.000 đ - 30.000.000</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">Trên 30.000.000</a>
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
                                    <span class="span">5% hoặc hơn</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">10% hoặc hơn</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">20% hoặc hơn</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">30% hoặc hơn</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">50% hoặc hơn</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">60% hoặc hơn</span>
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
                                    <span class="span">Thu cũ đổi mới</span>
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
                            <h3 class="agileits-sear-head mb-3">Ship code</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Trả tiền khi nhập hàng</span>
                                </li>
                            </ul>
                        </div>
                        <!-- //delivery -->
                        <!-- arrivals -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Mặt hàng mới</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">30 Ngày Cuối</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">90 Ngày Cuối</span>
                                </li>
                            </ul>
                        </div>
                        <div class="left-side py-2">
                            <h3 class="agileits-sear-head mb-3">Khả dụng</h3>
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
                </div> --}}
            </div>
        </div>
    </div>
    <!-- //top products -->

    <!-- middle section -->
    @include('frontend.inc.front-middle-section')
@endsection

@section('scripts')
    <script>
        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 50,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
@endsection

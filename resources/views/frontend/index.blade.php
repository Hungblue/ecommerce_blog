@extends('layouts.front')

@section('title')
@section('title')
    E-Shop chào mừng bạn
@endsection

@section('content')

    @include('layouts.inc.front-slider')

    <!-- top Products -->
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>S</span>ản
                <span>P</span>hẩm
                <span>M</span>ới
            </h3>
            <!-- //tittle heading -->
            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-12">
                    <div class="wrapper">
                        <!-- first section -->
                        @foreach ($featured_products as $item_product)
                            <div class="">
                                {{-- <h3 class="heading-tittle text-center font-italic">{{ $featured_products }}
                                </h3> --}}
                                <div class="row">
                                    <div class="owl-carousel featured-theme owl-theme">
                                        @foreach ($item_product as $item)
                                            <div class="item">
                                                <div class="product-men mt-5">
                                                    <div class="men-pro-item simpleCart_shelfItem">
                                                        <div class="men-thumb-item text-center">
                                                            <div
                                                                style="height: 250px; vertical-align: middle; display: table-cell;">
                                                                <div>
                                                                    @php
                                                                        $arrayImage = explode(',', $item->image);
                                                                    @endphp
                                                                    <img class=""
                                                                        src="{{ asset('assets/uploads/product/' . $arrayImage[0]) }}"
                                                                        alt="image1">
                                                                </div>
                                                                <div class="men-cart-pro">
                                                                    <div class="inner-men-cart-pro">
                                                                        <a href="/category/{{ $item->category->slug }}/{{ $item->slug }}"
                                                                            class="link-product-add-cart">Xem</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info-product text-center border-top mt-4">
                                                            <h4 class="pt-1">
                                                                <a href="/single">{{ $item->name }}</a>
                                                            </h4>
                                                            <div class="info-product-price my-2">
                                                                <span class="item_price">{{ $item->selling_price }}
                                                                    đ</span>
                                                                <del></del>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- //first section -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //top products -->
@endsection

@section('scripts')
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            nav: false,
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

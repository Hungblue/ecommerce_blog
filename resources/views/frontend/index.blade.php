@extends('layouts.front')

@section('title')
    Welcome to Shop
@endsection

@section('content')

    @include('layouts.inc.front-slider')

    <!-- top Products -->
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>O</span>ur
                <span>N</span>ew
                <span>P</span>roducts
            </h3>
            <!-- //tittle heading -->
            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-12">
                    <div class="wrapper">
                        <!-- first section -->
                        @for ($i = 0; $i < $featured_categories->count(); $i++)
                            <div class="">
                                <h3 class="heading-tittle text-center font-italic">{{ $featured_categories[$i]->name }}
                                </h3>
                                <div class="row">
                                    <div class="owl-carousel featured-theme owl-theme">
                                        @foreach ($featured_products[$i] as $item)
                                            <div class="item">
                                                <div class="product-men mt-5">
                                                    <div class="men-pro-item simpleCart_shelfItem">
                                                        <div class="men-thumb-item text-center">
                                                            <div
                                                                style="height: 250px; vertical-align: middle; display: table-cell;">
                                                                <div>
                                                                    <img class=""
                                                                        src="{{ asset('assets/uploads/product/' . $item->image) }}"
                                                                        alt="image1">
                                                                </div>
                                                                <div class="men-cart-pro">
                                                                    <div class="inner-men-cart-pro">
                                                                        <a href="/category/{{ $featured_categories[$i]->slug }}/{{ $item->slug }}"
                                                                            class="link-product-add-cart">Quick
                                                                            View</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info-product text-center border-top mt-4">
                                                            <h4 class="pt-1">
                                                                <a href="/single">{{ $item->name }}</a>
                                                            </h4>
                                                            <div class="info-product-price my-2">
                                                                <span
                                                                    class="item_price">${{ $item->selling_price }}</span>
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
                        @endfor)
                        <!-- //first section -->>

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

@extends('layouts.front')

@section('title')
    welcome E-Shop
@endsection

@section('content')
    <!-- top Products -->
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <div class="wrapper">
                <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
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
                                                        <a href="/category/{{ $item->category->slug }}/{{ $item->slug }}"
                                                            class="link-product-add-cart">Quick
                                                            View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info-product text-center border-top mt-4">
                                                <h4 class="pt-1">
                                                    <a
                                                        href="/category/{{ $item->category->slug }}/{{ $item->slug }}">{{ $item->name }}</a>
                                                </h4>
                                                <div class="info-product-price my-2">
                                                    <span class="item_price">${{ $item->selling_price }}</span>
                                                    <del>${{ $item->original_price }}</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
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

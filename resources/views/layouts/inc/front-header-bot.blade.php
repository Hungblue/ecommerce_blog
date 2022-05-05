<div class="header-bot">
    <div class="container">
        <div class="row header-bot_inner_wthreeinfo_header_mid">
            <!-- logo -->
            <div class="col-md-3 logo_agile">
                <h1 class="text-center">
                    <a href="/" class="font-weight-bold font-italic">
                        <img src="{{ asset('frontend/images/logo2.png') }}" alt=" " class="img-fluid">May Xanh
                    </a>
                </h1>
            </div>
            <!-- //logo -->
            <!-- header-bot -->
            <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                <div class="row">
                    <!-- search -->
                    <div class="col-10 agileits_search">
                        <form class="form-inline" action="search" method="GET">
                            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search"
                                aria-label="Search" required>
                            <button class="btn my-2 my-sm-0" type="submit">Tìm kiếm</button>
                        </form>
                    </div>
                    <!-- //search -->
                    <!-- cart details -->
                    <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                        <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                            {{-- <form action="#" method="post" class="last">
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="display" value="1">
                <button class="btn w3view-cart" type="submit" name="submit" value="">
                <i class="fas fa-cart-arrow-down"></i>
                </button>
            </form> --}}
                            <button class="btn w3view-cart" type="button" name="submit" value=""
                                onclick="location.href='/cart';">
                                <i class="fas fa-cart-arrow-down"></i><span
                                    class="badge badge-pill bg-success cart-count">0</span>
                            </button>
                        </div>
                    </div>
                    <!-- //cart details -->
                </div>
            </div>
        </div>
    </div>
</div>

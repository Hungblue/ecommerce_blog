<div class="navbar-inner">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="agileits-navi_search">
                {{-- <form action="search_category" method="GET">
                    <select id="agileinfo-nav_search" name="search_category" class="border" required=""
                        onchange="this.form.submit()">
                        <option value="">Tất cả danh mục</option>
                        @foreach ($featured_categories as $cate)
                            <li>
                                <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                            </li>
                        @endforeach
                    </select>
                </form> --}}
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center mr-xl-5">
                    <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="/">Trang chủ
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="/category">Category</a>
                    </li> --}}
                    <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Danh mục
                        </a>
                        <div class="dropdown-menu">
                            <div class="agile_inner_drop_nav_info p-4">

                                <div class="row">
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            @foreach ($featured_categories as $cate)
                                                <li>
                                                    <a href="/view-category/{{ $cate->slug }}">{{ $cate->name }}</a>
                                                </li>
                                            @endforeach
                                    </div>
                                    {{-- <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li>
                                                <a href="/products">Laptops</a>
                                            </li>
                                            <li>
                                                <a href="/products">Drives & Storage</a>
                                            </li>
                                            <li>
                                                <a href="/products">Printers & Ink</a>
                                            </li>
                                            <li>
                                                <a href="/products">Networking Devices</a>
                                            </li>
                                            <li>
                                                <a href="/products">Computer Accessories</a>
                                            </li>
                                            <li>
                                                <a href="/products">Game Zone</a>
                                            </li>
                                            <li>
                                                <a href="/products">Software</a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="/wishlist">Danh sách yêu thích<span
                                class="badge badge-pill bg-success text-white wishlist-count">0</span></a>
                    </li>
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="/about">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

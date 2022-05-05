<div class="agile-main-top">
    <div class="container-fluid">
        <div class="row main-top-w3l py-2">
            <div class="col-lg-4 header-most-top">
                <p class="text-white text-lg-left text-center">Ưu đãi và giảm giá hàng đầu của khu vực ưu đãi
                    <i class="fas fa-shopping-cart ml-1"></i>
                </p>
            </div>
            <div class="col-lg-8 header-right mt-lg-0 mt-2">
                <!-- header lists -->
                <ul style="text-align: end; margin-right:60px">
                    {{-- <li class="text-center border-right text-white">
                        <a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
                            <i class="fas fa-map-marker mr-2"></i>Chọn địa điểm</a>
                    </li>
                    <li class="text-center border-right text-white">
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                            <i class="fas fa-truck mr-2"></i>Theo dõi đơn hàng</a>
                    </li> --}}
                    <li class="text-center border-right text-white">
                        <i class="fas fa-phone mr-2"></i> 0353090996
                    </li>
                    {{-- <li class="text-center border-right text-white">
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                            <i class="fas fa-sign-in-alt mr-2"></i> Log In </a>
                    </li>
                    <li class="text-center text-white">
                        <a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
                            <i class="fas fa-sign-out-alt mr-2"></i>Register </a>
                    </li> --}}
                    @guest
                        @if (Route::has('login'))
                            <li class="text-center border-right">
                                <a class="text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="text-center border-right">
                                <a class="text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <button class="dropdown" style="background: none;border: none;text-align: center;">
                            <li class="btn dropdown-toggle" style="background:none; color:white" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle"></i>
                                {{ Auth::user()->name }}
                            </li>
                            <li class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ url('profile') }}">
                                    <i class="fas fa-user-circle"></i>
                                    {{ Auth::user()->name }}
                                </a>
                                <a class="dropdown-item" href="{{ url('my-orders') }}"><i
                                        class="fas fa-cart-arrow-down"></i>
                                    My Orders</a>
                                <a class="dropdown-item" href="{{ url('changepassword') }}"><i
                                        class="fas fa-user-circle"></i>
                                    Đổi mật khẩu</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </button>
                    @endguest
                </ul>
                <!-- //header lists -->
            </div>
        </div>
    </div>
</div>

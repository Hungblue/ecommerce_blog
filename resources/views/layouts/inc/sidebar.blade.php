<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="/index">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="/dashboard">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Bảng điều
                        khiển</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('categories') ? 'active' : '' }}">
                <a class="sidebar-link" href="/categories">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Danh mục</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('products') ? 'active' : '' }}">
                <a class="sidebar-link" href="/products">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Sản phẩm</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('orders') ? 'active' : '' }}">
                <a class="sidebar-link" href="/orders">
                    <i class="feather feather-shopping-cart" data-feather="user"></i> <span class="align-middle">Đơn
                        đặt hàng</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('users') ? 'active' : '' }}">
                <a class="sidebar-link" href="/users">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Người dùng</span>
                </a>
            </li>
    </div>
</nav>

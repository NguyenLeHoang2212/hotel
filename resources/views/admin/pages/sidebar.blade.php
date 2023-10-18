<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/client/images/logo.png') }}" alt="" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/client/images/admin-image.jpg')}}" alt="">
            </div>
            <div class="info">
                <a href="#" class="d-block">Nguyễn Lê Hoàng</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}"
                                class="nav-link {{ request()->route()->getName() === 'admin.dashboard'? 'active': '' }}">
                                <i class="fas fa-church nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.product_category.list') }}"
                                class="nav-link {{ request()->route()->getName() === 'admin.product_category.list'? 'active': '' }}">
                                <i class="fas fa-chess-king nav-icon"></i>
                                <p>Product Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.product.index') }}"
                                class="nav-link {{ request()->route()->getName() === 'admin.product.index'? 'active': '' }}">
                                <i class="fas fa-briefcase nav-icon"></i>
                                <p>Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.room.index') }}"
                                class="nav-link {{ request()->route()->getName() === 'admin.room.index'? 'active': '' }}">
                                <i class="fas fa-chalkboard"></i>
                                <p>Room</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.orders') }}"
                                class="nav-link {{ request()->route()->getName() === 'admin.orders'? 'active': '' }}">
                                <i class="far fa-bell"></i>
                                <p>Order</p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.allbooking') }}"
                                class="nav-link {{ request()->route()->getName() === 'admin.allbooking'? 'active': '' }}">
                                <i class="fas fa-suitcase"></i>
                                <p>Booking</p>
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                            <a href="{{ route('admin.allcustomers') }}"
                                class="nav-link {{ request()->route()->getName() === 'admin.allcustomers'? 'active': '' }}">
                                <i class="fas fa-suitcase"></i>
                                <p>Customer</p>
                            </a>
                        </li> --}}


                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

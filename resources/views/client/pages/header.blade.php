<header>

    <!-- ======================== Navigation ======================== -->

    <div class="container">

        <!-- === navigation-top === -->

        <nav class="navigation-top clearfix">

            <!-- navigation-top-left -->

            <div class="navigation-top-left">
                <a class="box" href="#">
                    <i style="color:aliceblue" class="fa fa-facebook"></i>
                </a>
                <a class="box" href="#">
                    <i style="color:aliceblue" class="fa fa-twitter"></i>
                </a>
                <a class="box" href="#">
                    <i style="color:aliceblue" class="fa fa-youtube"></i>
                </a>
            </div>

            <!-- navigation-top-right -->

            <div class="navigation-top-right">
                <a class="box" href="cart">
                    <i class="icon icon-cart"></i>
                    CART
                </a>
                <a class="box" href="reservation-1">
                    <i class="icon icon-tag"></i>
                    Reservations
                </a>
                <a class="box" href="contact">
                    <i class="icon icon-phone-handset"></i>
                    Contact
                </a>

            </div>
        </nav>

        <!-- === navigation-main === -->

        <nav class="navigation-main clearfix">

            <!-- logo -->

            <div class="logo animated fadeIn">
                <a href="bookingintro">
                    <img class="logo-desktop"  src="{{ asset('assets/client/images/logo.png') }}  " alt="Alternate Text" />
                    <img class="logo-mobile" src="{{ asset('assets/client/images/logo-mobile.png') }}  " alt="Alternate Text" />
                </a>
            </div>

            <!-- toggle-menu -->

            <div class="toggle-menu"><i class="icon icon-menu"></i></div>

            <!-- navigation-block -->

            <div class="navigation-block clearfix">

                <!-- navigation-left -->

                <ul class="navigation-left">
                    <li>
                        <a href="bookingintro">Home <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="about">About us</a></li>
                            <li><a href="bookingbox">Booking box</a></li>
                            <li><a href="roomsintro">Rooms intro</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Rooms <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="rooms-category">Rooms category</a></li>
                            <li><a href="room-overview">Room overview</a></li>

                            {{-- <li><a href="404">404 Not found</a></li>
                            <li><a href="shortcodes">Shortcodes</a></li> --}}
                        </ul>
                    </li>
                    <li>
                        <a href="menu">Menu <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="foods">Foods</a></li>
                            <li><a href="drinks">Drinks</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- navigation-right -->

                <ul class="navigation-right">

                    <li>
                        <a href="facility">Facilities </a>

                    </li>
                    <li>
                        <a href="#">Blog <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="blog-category">Blog category</a></li>
                            <li><a href="blog-item">Blog item</a></li>
                        </ul>
                    </li>
                    @if (Route::has('login'))
                    @auth
                 {{ Auth::user()->name }}

                    @endauth
                    <li>

                        <a   href="login"><i class="fa fa-user"></i></a>



                    @auth


                    <ul>


                            <div style="color: black;background:white;text-align:center;">Hello {{ Auth::user()->name }}</div>

                        <li>
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </li>







                    </ul>

                    @else

                        <ul>
                        <li><a href="{{ route('login') }}" >Log in</a></li>
                        <li>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" >Register</a>
                                @endif
                        </li>
                        </ul>
                    @endauth


                    </li>
                    @endif
                    {{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
                </ul>



            </div> <!--/navigation-block-->

        </nav>
    </div> <!--/container-->

</header>


<nav class="bg-white sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{ asset('assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="dashbtn" class="nav-link" href="{{ url('dashboard') }}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="catbtn" class="nav-link" href="{{ url('category-all') }}">
                            <i class="ni ni-planet text-orange"></i>
                            <span class="nav-link-text">Category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="probtn" class="nav-link" href="{{ url('product-all') }}">
                            <i class="ni ni-pin-3 text-primary"></i>
                            <span class="nav-link-text">product</span>
                        </a>
                    </li>

                </ul>
                <!-- Divider -->
                <hr class="my-3">

                <!-- Navigation -->

            </div>
        </div>
    </div>
</nav>

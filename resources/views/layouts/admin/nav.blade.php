<nav class="main-header navbar navbar-expand @if(config('app.dark_mode')) navbar-dark @else navbar-white navbar-light @endif">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item dropdown">
            <a id="plansMenu" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Order</a>
            <ul aria-labelledby="plansMenu" class="dropdown-menu border-0 shadow">
                <li><a href="{{ route('plans') }}" class="dropdown-item">View All Plans</a></li>
                <div class="dropdown-divider"></div>
                <li><a href="#" class="dropdown-item">Category 1</a></li>
                <li><a href="#" class="dropdown-item">Category 2</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a id="storeMenu" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Pages</a>
            <ul aria-labelledby="storeMenu" class="dropdown-menu border-0 shadow">
                <li><a href="{{ route('home') }}" class="dropdown-item">Home</a></li>
                <div class="dropdown-divider"></div>
                <li><a href="{{ route('kb') }}" class="dropdown-item">Knowledge Base</a></li>
                <li><a href="{{ route('status') }}" class="dropdown-item">System Status</a></li>
                <li><a href="{{ route('contact') }}" class="dropdown-item">Contact Us</a></li>
            </ul>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a id="accountMenu" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">user@example.com</a>
            <ul aria-labelledby="accountMenu" class="dropdown-menu dropdown-menu-right border-0 shadow">
                <li><a href="#" class="dropdown-item">Account</a></li>
                <li><a href="{{ route('client.dash') }}" class="dropdown-item">Client Area</a></li>
                <div class="dropdown-divider"></div>
                <li><a href="#" class="dropdown-item">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
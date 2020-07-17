
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{ route('admin.test') }}" class="nav-link{{ request()->routeIs('admin.test') ? ' active' : '' }}">Test</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.test2') }}" class="nav-link{{ request()->routeIs('admin.test2') ? ' active' : '' }}">Text</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.test3') }}" class="nav-link{{ request()->routeIs('admin.test3') ? ' active' : '' }}">JSon</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.test4') }}" class="nav-link{{ request()->routeIs('admin.test4') ? ' active' : '' }}">Image</a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('admin.addNews') }}" class="nav-link{{ request()->routeIs('admin.addNews') ? ' active' : '' }}">Add news</a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('admin.addNews2') }}" class="nav-link{{ request()->routeIs('admin.addNews2') ? ' active' : '' }}">Add news2</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

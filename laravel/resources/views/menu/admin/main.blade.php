<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{ route('admin.test1') }}"
                       class="nav-link{{ request()->routeIs('admin.test1')?' active':'' }}">Тест 1</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.test2') }}"
                       class="nav-link{{ request()->routeIs('admin.test2')?' active':'' }}">Тест 2</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.add.news') }}"
                       class="nav-link{{ request()->routeIs('admin.add.news')?' active':'' }}">Добавить новость</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

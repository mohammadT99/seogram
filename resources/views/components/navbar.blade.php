<!-- desktop menu -->
<div class="col-12 d-none d-md-block">
    <div class="menu__desktop">
        <nav class="
  navbar
  menu__desktop__navbar
  navbar-light navbar-expand-sm
">
            <div class="
    collapse
    navbar-collapse
    menu__desktop__navbar__collapse
  "
                id="navbarSupportedContent">
                <ul class="
      navbar-nav
      menu__desktop__navbar__nav
      me-auto
      mb-2 mb-lg-0
    ">
                    <li class="nav-item menu__desktop__navbar__nav-item">
                        <a class="nav-link menu__desktop__navbar__nav-link active" aria-current="page" href="#">صفحه
                            اصلی</a>
                    </li>
                    <li class="nav-item menu__desktop__navbar__nav-item">
                        <a class="nav-link menu__desktop__navbar__nav-link" aria-current="page" href="#">درباره
                            ما</a>
                    </li>
                    <li class="nav-item menu__desktop__navbar__nav-item">
                        <a class="nav-link menu__desktop__navbar__nav-link" aria-current="page" href="#">جستجو</a>
                    </li>
                    <li class="nav-item menu__desktop__navbar__nav-item">
                        <a class="nav-link menu__desktop__navbar__nav-link" aria-current="page"
                            href="#">مقالات</a>
                    </li>
                    <li class="nav-item menu__desktop__navbar__nav-item">
                        <a class="nav-link menu__desktop__navbar__nav-link" aria-current="page" href="#">اخبار</a>
                    </li>

                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                            @auth
                                <li class="nav-item menu__desktop__navbar__nav-item"> <a href="{{ url('/dashboard') }}"
                                        class="nav-link menu__desktop__navbar__nav-link">Dashboard</a></li>
                            @else
                                <li class="nav-item menu__desktop__navbar__nav-item">
                                    <a class="nav-link menu__desktop__navbar__nav-link" aria-current="page"
                                        href="{{ route('login') }}">ورود</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item menu__desktop__navbar__nav-item">
                                        <a class="nav-link menu__desktop__navbar__nav-link" aria-current="page"
                                            href="{{ route('register') }}">ثبت نام</a>
                                    </li>
                                @endif
                            @endauth

                        </div>
                    @endif
                </ul>
                <div class="menu__desktop__logo">
                    <a class="menu__desktop__logo__link" href="#">
                        <img class="menu__desktop__logo__img" src="./assets/images/logo.png" alt="" />
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- mobile menu -->
<div class="col-12 d-block d-md-none">
    <div class="menu__mobile">
        <div class="menu__mobile__icons">
            <div class="menu__mobile__icon__opener" id="menuOpener">
                <?xml version="1.0" ?><svg fill="none" height="40" viewBox="0 0 24 24" width="40"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M4 12H20M13 18H20" stroke="#555" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" />
                </svg>
            </div>
            <div class="menu__mobile__logo">
                <a class="menu__mobile__logo__link" aria-current="page" href="#">
                    <img class="menu__mobile__logo__img" src="./assets/images/logo.png" alt="" />
                </a>
            </div>
        </div>
        <ul class="
  nav
  menu__mobile__nav menu__mobile__nav__hidden
  flex-column
">
            <div class="menu__mobile__icon__closer" id="menuCloser">
                <i class="fas fa-times"></i>
            </div>
            <li class="nav-item menu__mobile__nav__nav-item">
                <a class="nav-link menu__mobile__nav__nav-link active" aria-current="page" href="#">صفحه اصلی</a>
            </li>
            <li class="nav-item menu__mobile__nav__nav-item">
                <a class="nav-link menu__mobile__nav__nav-link" aria-current="page" href="#">درباره ما</a>
            </li>
            <li class="nav-item menu__mobile__nav__nav-item">
                <a class="nav-link menu__mobile__nav__nav-link" aria-current="page" href="#">جستجو</a>
            </li>
            <li class="nav-item menu__mobile__nav__nav-item">
                <a class="nav-link menu__mobile__nav__nav-link" aria-current="page" href="#">مقالات</a>
            </li>
            <li class="nav-item menu__mobile__nav__nav-item">
                <a class="nav-link menu__mobile__nav__nav-link" aria-current="page" href="#">اخبار</a>
            </li>
            <li class="nav-item menu__mobile__nav__nav-item">
                <a class="nav-link menu__mobile__nav__nav-link" aria-current="page" href="#">ورود</a>
            </li>
        </ul>
    </div>
</div>
</div>
</div>
</div>
<!-- end menu -->

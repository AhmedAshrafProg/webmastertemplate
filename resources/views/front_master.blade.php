<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Responsive Web Design</title>
    <link rel="stylesheet" href={{ asset('assets/css/bootstrap.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/normalize.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/main.css') }} />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Sans">
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href={{ route('HPage') }}>WebMaster</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        @if ($user === null)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href={{ route('login') }}>Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('register') }}>Register</a>
                    </li>
                @elseif($user->exists())
                    <input type="hidden" value="{{ $user->id }}" name="user_id" />
                    <form method="GET" action={{ route('logout') }}><button
                            type="submit"class="btn btn-danger">Logout</button>
                    </form>
                    @endif

                    </li>
                    <div class="d-flex align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{ route('contact.form') }}>Contact us</a>
                        </li>
                    </div>
                </ul>
                <form class="d-flex" role="search">

                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    @yield('content')
    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <div class="copyright float-left">Copyright to Elzero Web School 2017</div>
            <div class="design float-left">Designed By Osama Elzero</div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- End Footer -->
    <script src={{ asset('assets/js/jquery-3.7.1.min.js') }}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src={{ asset('assets/js/bootstrap.min.js') }}></script>
    <script src={{ asset('assets/js/custom.js') }}></script>
</body>

</html>

@include('Layouts.header')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><img src="{{ url('assets/img/logo.png') }}" width="60px"
                            height="60px" alt=""> Ayo Nyemil!</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ route('home') }}#home" class="nav-item nav-link">Home</a>
                        <a href="{{ route('home') }}#menu" class="nav-item nav-link">Menu</a>
                        <a href="{{ route('home') }}#testimonial" class="nav-item nav-link">Testimonial</a>
                        <a href="{{ route('home') }}#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="https://api.whatsapp.com/send/?phone=6289635032061&text=Hallo%20Ayo%20Nyemil%0A%0ASaya%20ingin%20memesan"
                        class="btn btn-primary py-2 px-4">Beli Sekarang!</a>
                </div>
            </nav>
            <div class="container-xxl py-2 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Masuk / Daftar</h1>
                </div>
            </div>

        </div>
        <!-- Navbar & Hero End -->






        <!-- Login -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Masuk</h5>
                    <h1 class="mb-5">Isikan Data Dengan Benar</h1>
                </div>
                <div class="row g-4">
                    @if (session()->has('error_message'))
                        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                            <ul>

                                @foreach (session('error_message')->messages() as $error_message)
                                    @foreach ($error_message as $value)
                                        <li>{{ $value }}</li>
                                    @endforeach
                                @endforeach
                            </ul>

                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('message'))
                        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                            {{ session('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="col-md-10 m-auto">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="{{ route('prosses_login') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="username" name="username"
                                                placeholder="Username / Email">
                                            <label for="username">Username</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <img class="d-block m-auto" src="img/google.png"
                                                style="width: 50px; height: 50px;" alt="">
                                        </div>


                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Masuk</button>
                                    </div>
                                    <div class="col-12 text-center">
                                        <a href="{{ route('form_register') }}">
                                            <p>DAFTAR</p>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Login -->
        @include('Layouts.footer');
</body>

</html>

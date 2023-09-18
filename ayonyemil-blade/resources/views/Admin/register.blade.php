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
                    <h1 class="text-primary m-0"><img src="img/logo.png" width="60px" height="60px" alt="">
                        Ayo Nyemil!</h1>
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
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Daftar</h5>
                    <h1 class="mb-5">Isikan Data Dengan Benar</h1>
                </div>
                <div class="row g-4">


                    <div class="col-md-10 m-auto">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">DAFTAR</button>
                                    </div>
                                    <div class="col-12 text-center">
                                        <a href="">
                                            <p>
                                                MASUK
                                            </p>
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


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <!-- <div class="col-lg-3 col-md-6">
                                  <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                                  <a class="btn btn-link" href="">About Us</a>
                                  <a class="btn btn-link" href="">Contact Us</a>
                                  <a class="btn btn-link" href="">Reservation</a>
                                  <a class="btn btn-link" href="">Privacy Policy</a>
                                  <a class="btn btn-link" href="">Terms & Condition</a>
                              </div> -->
                    <div class="col-lg-4 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2">
                            <i class="fa fa-map-marker-alt me-3"></i>Kaliwungu - Kendal
                        </p>
                        <p class="mb-2">
                            <i class="fa fa-phone-alt me-3"></i>+62 89635032061
                        </p>
                        <p class="mb-2">
                            <i class="fa fa-envelope me-3"></i>ayonyemil@gmail.com
                        </p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><img src="img/instagram.svg"
                                    alt=""></a>
                            <a class="btn btn-outline-light btn-social" href=""><img src="img/tiktok.svg"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Senin - Minggu</h5>
                        <p>
                            20 jam
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Subscribe</h4>
                        <p>
                            Anda akan mendapatkan notifikasi jika ada update produk, Subscribe me
                        </p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email">
                            <button type="button"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Footer End -->


        @include('Layouts.footer')
</body>

</html>

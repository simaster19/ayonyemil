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
                        <a href="#home" class="nav-item nav-link">Home</a>
                        <a href="#menu" class="nav-item nav-link">Menu</a>
                        <a href="#testimonial" class="nav-item nav-link">Testimonial</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="https://api.whatsapp.com/send/?phone=6289635032061&text=Hallo%20Ayo%20Nyemil%0A%0ASaya%20ingin%20memesan"
                        class="btn btn-primary py-2 px-4">Beli Sekarang!</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5" id="home">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Nyemil Enak<br>Murah dan Sehat</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">
                                Aneka cemilan dan jajanan masa kini, cocok untuk kalian yang perutnya keroncongan!
                            </p>
                            <a href="https://api.whatsapp.com/send/?phone=6289635032061&text=Hallo%20Ayo%20Nyemil%0A%0ASaya%20ingin%20memesan"
                                class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Beli
                                Sekarang!</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="{{ url('assets/img/hero.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Pilihan Cemilan</h5>
                                <p>
                                    Ada berbagai pilihan cemilan untuk kamu penikmat cemilan ringan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Pembelian Online</h5>
                                <p>
                                    Daftar akun terlebih dahulu untuk membeli cmilan secara online.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>Contact Support / 24Jam</h5>
                                <p>
                                    Respon cepat hanya pada jam kerja dan hari Senin - Jumat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Product Cemilan -->
        <div id="menu" class="container-xxl pt-5 pb-3">
            <div class="container mt-3">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Cemilan</h5>
                    <h1 class="mb-5">Cemilan Kekinian</h1>
                </div>
                <div class="row g-4">
                    @foreach ($products as $product)
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid"
                                        src="{{ Storage::url('images/product/' . $product->foto_produk) }}"
                                        alt="" style="width: 200px; height: 230px">
                                </div>
                                <h5 class="mb-0">{{ $product->nama_produk }}</h5>
                                <small>{{ $product->rasa }}</small>
                                <div class="d-flex justify-content-center mt-3">
                                    <a class="btn btn-square btn-primary mx-1" data-bs-toggle="modal"
                                        data-bs-target="#modalDetail{{ $product->id }}" href=""
                                        onclick="event.preventDefault()"><i class="bi-eye-fill"></i></a>

                                    <a class="btn btn-square btn-primary mx-1" href="shopee.co.id/miftakhulmcu"><i
                                            class="bi bi-cart-plus-fill"></i></a>
                                    <a class="btn btn-square btn-primary mx-1"
                                        href="https://instagram.com/ayonyemil23"><i class="bi-instagram"></i></a>
                                    <a class="btn btn-square btn-primary mx-1"
                                        href="https://api.whatsapp.com/send/?phone=6289635032061&text=Hallo%20Ayo%20Nyemil%0A%0ASaya%20ingin%20memesan"><i
                                            class="bi
                    bi-whatsapp"></i></a>

                                </div>
                            </div>
                        </div>
                        <!-- Modal Detail -->
                        <div class="modal fade" id="modalDetail{{ $product->id }}" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDetailLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalDetailLabel">Detail Produk</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="col-12 d-flex justify-content-center mb-2">

                                                    <img class="img img-thumbnail"
                                                        src="{{ Storage::url('images/product/' . $product->foto_produk) }}"
                                                        alt="Foto Produk" style="width: 200px; height: 200px">

                                                </div>
                                                <div class="text-center">
                                                    <h2>{{ $product->nama_produk }}</h2>
                                                    <h4>{{ $product->rasa }}</h4>
                                                    <h5 class="text-muted">Rp. {{ $product->harga_jual }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Modal Detail-->
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Product Cemilan End -->


        <!-- Menu Start -->
        <!-- <div class="container-xxl py-5">
                                                                                    <div class="container">
                                                                                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                                                                            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Menu Cemilan</h5>
                                                                                            <h1 class="mb-5">Populer Cemilan</h1>
                                                                                        </div>
                                                                                        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                                                                                            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                                                                                                <li class="nav-item">
                                                                                                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                                                                                        <i class="fa fa-coffee fa-2x text-primary"></i>
                                                                                                        <div class="ps-3">
                                                                                                            <small class="text-body">Popular</small>
                                                                                                            <h6 class="mt-n1 mb-0">Breakfast</h6>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="nav-item">
                                                                                                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                                                                                        <i class="fa fa-hamburger fa-2x text-primary"></i>
                                                                                                        <div class="ps-3">
                                                                                                            <small class="text-body">Special</small>
                                                                                                            <h6 class="mt-n1 mb-0">Launch</h6>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="nav-item">
                                                                                                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                                                                                        <i class="fa fa-utensils fa-2x text-primary"></i>
                                                                                                        <div class="ps-3">
                                                                                                            <small class="text-body">Lovely</small>
                                                                                                            <h6 class="mt-n1 mb-0">Dinner</h6>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                            <div class="tab-content">
                                                                                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                                                                                    <div class="row g-4">
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="tab-2" class="tab-pane fade show p-0">
                                                                                                    <div class="row g-4">
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="tab-3" class="tab-pane fade show p-0">
                                                                                                    <div class="row g-4">
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="d-flex align-items-center">
                                                                                                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt="" style="width: 80px;">
                                                                                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                                                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                                                                        <span>Chicken Burger</span>
                                                                                                                        <span class="text-primary">$115</span>
                                                                                                                    </h5>
                                                                                                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div> -->
        <!-- Menu End -->


        <!-- Testimonial Start -->
        <div id="testimonial" class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container mt-3">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Cuitan Customer</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-item bg-transparent border rounded p-4">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p>
                                {{ $testimonial->catatan }}
                            </p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle"
                                    src="{{ Storage::url('images/customer/' . $testimonial->foto_customer) }}"
                                    style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">{{ $testimonial->nama_customer }}</h5>
                                    <small>{{ '@' . $testimonial->instagram }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Contact Start -->
        <div id="contact" class="container-xxl py-5">
            <div class="container mt-3">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                    <h1 class="mb-5">Isikan Data Dengan Benar</h1>
                </div>
                <div class="row g-4">

                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
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
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject"
                                                placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button onclick="event.preventDefault(); alert('Under Maintenance')"
                                            class="btn btn-primary w-100 py-3" type="submit">Kirim Pesan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        @include('Layouts.footer');
</body>

</html>

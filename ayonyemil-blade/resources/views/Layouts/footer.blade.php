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
                    <a class="btn btn-outline-light btn-social" href=""><img
                            src="{{ url('assets/img/instagram.svg') }}" alt=""></a>
                    <a class="btn btn-outline-light btn-social" href=""><img
                            src="{{ url('assets/img/tiktok.svg') }}" alt=""></a>
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


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="{{ url('assets/lib/wow/wow.min.js') }} "></script>
<script src="{{ url('assets/lib/easing/easing.min.js') }} "></script>
<script src="{{ url('assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ url('assets/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ url('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ url('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ url('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ url('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ url('assets/js/main.js') }}"></script>
@stack('script')

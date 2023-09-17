<a href="" class="navbar-brand p-0">
    <h1 class="text-primary m-0"><img src="{{ url('assets/img/logo.png') }}" width="60px" height="60px" alt="">
        Ayo Nyemil!</h1>
    <!-- <img src="img/logo.png" alt="Logo"> -->
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="fa fa-bars"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0 pe-4">
        <a href="{{ route('dashboard') }}" class="nav-item nav-link">Dashboard</a>
        <a href="{{ route('all_product') }}" class="nav-item nav-link">Product</a>
        <a href="#" class="nav-item nav-link">Testimonial</a>
        <a href="#contact" class="nav-item nav-link">Contact</a>
    </div>
    <a href="" class="btn btn-primary py-2 px-4">Logout</a>
</div>

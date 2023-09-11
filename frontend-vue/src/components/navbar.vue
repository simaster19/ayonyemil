
<template>
      <!-- Navbar & Hero Start -->
      <div class="container-xxl position-relative p-0">
        <nav
          class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0"
        >
          <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0">
              <img
                src="../assets/frontend/img/logo.png"
                width="60px"
                height="60px"
                alt=""
              />
              Ayo Nyemil!
            </h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
              <router-link to="/" class="nav-item nav-link">Home</router-link>
              <router-link to="/menu" class="nav-item nav-link">Menu</router-link>
              <router-link to="/testimonial" class="nav-item nav-link">Testimonial</router-link>
              <router-link to="/contact" class="nav-item nav-link">Contact</router-link>
            </div>
            <router-link to="/login" class="btn btn-primary py-2 px-4">
                Beli Sekarang!
            </router-link>
          
          </div>
        </nav>
  
        
      </div>
      <!-- Navbar & Hero End -->

</template>


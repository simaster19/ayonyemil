<script setup>
import heroVue from '../components/hero.vue';
</script>


<template>
     <div class="container-xxl bg-white p-0">
       

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            
            <heroVue>

            </heroVue>
           
        </div>
        <!-- Navbar & Hero End -->
      <!-- Product Cemilan -->
      <div id="menu" class="container-xxl pt-5 pb-3">
        <div class="container mt-3">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Cemilan
            </h5>
            <h1 class="mb-5">Cemilan Kekinian</h1>
          </div>
          <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img
                    class="img-fluid"
                    src="../assets/frontend/img/hero.png"
                    alt=""
                  />
                </div>
                <h5 class="mb-0">Mie</h5>
                <small>Pedas</small>
                <div class="d-flex justify-content-center mt-3">
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="bi bi-cart-plus-fill"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img
                    class="img-fluid"
                    src="../assets/frontend/img/hero.png"
                    alt=""
                  />
                </div>
                <h5 class="mb-0">Mie</h5>
                <small>Pedas</small>
                <div class="d-flex justify-content-center mt-3">
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="bi bi-cart-plus-fill"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img
                    class="img-fluid"
                    src="../assets/frontend/img/hero.png"
                    alt=""
                  />
                </div>
                <h5 class="mb-0">Mie</h5>
                <small>Pedas</small>
                <div class="d-flex justify-content-center mt-3">
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="bi bi-cart-plus-fill"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img
                    class="img-fluid"
                    src="../assets/frontend/img/hero.png"
                    alt=""
                  />
                </div>
                <h5 class="mb-0">Mie</h5>
                <small>Pedas</small>
                <div class="d-flex justify-content-center mt-3">
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="bi bi-cart-plus-fill"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product Cemilan End -->
    </div>
</template>
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




         <!-- Login -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Masuk</h5>
                    <h1 class="mb-5">Isikan Data Dengan Benar</h1>
                </div>
                <div class="row g-4">
        
                 
                    <div class="col-md-10 m-auto">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <img class="d-block m-auto" src="../assets/frontend/img/google.png" style="width: 50px; height: 50px;" alt="">
                                        </div>
                                            
                                        
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Masuk</button>
                                    </div>
                                    <div class="col-12 text-center">
                                        
                                        <a href="#">
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
        

</div>

   

</template>
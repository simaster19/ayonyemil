<script setup>
import heroVue from '../components/hero.vue';
</script>
<template>
    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
            
        <heroVue>

        </heroVue>
       
    </div>
    <!-- Navbar & Hero End -->
       <!-- Testimonial Start -->
       <div
       id="testimonial"
       class="container-xxl py-5 wow fadeInUp"
       data-wow-delay="0.1s"
     >
       <div class="container">
         <div class="text-center">
           <h5
             class="section-title ff-secondary text-center text-primary fw-normal"
           >
             Testimoni
           </h5>
           <h1 class="mb-5">Beberapa Customer Berkata!</h1>
         </div>
 
         
         <div
           id="carouselExampleInterval"
           class="carousel slide text-center carousel-dark"
           data-mdb-ride="carousel"
         >
           <div class="carousel-inner">
             <div class="carousel-item active" data-bs-interval="10000">
               <img
                 class="rounded-circle shadow-1-strong mb-4"
                 src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                 alt="avatar"
                 style="width: 150px"
               />
               <div class="row d-flex justify-content-center">
                 <div class="col-lg-8">
                   <h5 class="mb-3">Maria Kate</h5>
                   <p>Photographer</p>
                   <p class="text-muted">
                     <i class="fas fa-quote-left pe-2"></i>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Minus et deleniti nesciunt sint eligendi reprehenderit
                     reiciendis, quibusdam illo, beatae quia fugit consequatur
                     laudantium velit magnam error. Consectetur distinctio fugit
                     doloremque.
                   </p>
                 </div>
               </div>
               <ul
                 class="list-unstyled d-flex justify-content-center text-warning mb-0"
               >
                 <li><i class="fas fa-star fa-sm"></i></li>
                 <li><i class="fas fa-star fa-sm"></i></li>
                 <li><i class="fas fa-star fa-sm"></i></li>
                 <li><i class="fas fa-star fa-sm"></i></li>
                 <li><i class="far fa-star fa-sm"></i></li>
               </ul>
             </div>
             <div class="carousel-item" data-bs-interval="2000">
               <img
                 class="rounded-circle shadow-1-strong mb-4"
                 src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp"
                 alt="avatar"
                 style="width: 150px"
               />
               <div class="row d-flex justify-content-center">
                 <div class="col-lg-8">
                   <h5 class="mb-3">John Doe</h5>
                   <p>Web Developer</p>
                   <p class="text-muted">
                     <i class="fas fa-quote-left pe-2"></i>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Minus et deleniti nesciunt sint eligendi reprehenderit
                     reiciendis.
                   </p>
                 </div>
               </div>
               <ul
                 class="list-unstyled d-flex justify-content-center text-warning mb-0"
               >
                 <li><i class="fas fa-star fa-sm"></i></li>
                 <li><i class="fas fa-star fa-sm"></i></li>
                 <li><i class="fas fa-star fa-sm"></i></li>
                 <li><i class="fas fa-star fa-sm"></i></li>
                 <li><i class="far fa-star fa-sm"></i></li>
               </ul>
             </div>
             <div class="carousel-item">
               <img
                 class="rounded-circle shadow-1-strong mb-4"
                 src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                 alt="avatar"
                 style="width: 150px"
               />
               <div class="row d-flex justify-content-center">
                 <div class="col-lg-8">
                   <h5 class="mb-3">Anna Deynah</h5>
                   <p>UX Designer</p>
                   <p class="text-muted">
                     <i class="fas fa-quote-left pe-2"></i>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Minus et deleniti nesciunt sint eligendi reprehenderit
                     reiciendis, quibusdam illo, beatae quia fugit consequatur
                     laudantium velit magnam error. Consectetur distinctio fugit
                     doloremque.
                   </p>
                 </div>
               </div>
               <ul
                 class="list-unstyled d-flex justify-content-center text-warning mb-0"
               >
                 <li><i class="fas fa-star fa-sm"></i></li>
                 <li><i class="fas fa-star fa-sm"></i></li>
                 <li><i class="fas fa-star fa-sm"></i></li>
                 <li><i class="fas fa-star fa-sm"></i></li>
                 <li><i class="far fa-star fa-sm"></i></li>
               </ul>
             </div>
           </div>
           <button
             class="carousel-control-prev"
             type="button"
             data-bs-target="#carouselExampleInterval"
             data-bs-slide="prev"
           >
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
           </button>
           <button
             class="carousel-control-next"
             type="button"
             data-bs-target="#carouselExampleInterval"
             data-bs-slide="next"
           >
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
           </button>
         </div>
       </div>
     </div>
     <!-- Testimonial End -->
</template>
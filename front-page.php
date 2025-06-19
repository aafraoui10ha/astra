<?php get_header(); ?>
<div id="primary" <?php astra_primary_class(); ?>>
<!-- Swiper Container -->
<section>
  <div class="swiper herosection">
     <div class="swiper-wrapper">
    <div class="swiper-slide heroslide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/skin-cleanser-template-about-header-img-bg.jpg');">
      <div class="row h-100 align-items-end">
  <div class="col-12 col-md-6 align-self-end ms-md-4 p-4">
    <h1 class="text-uppercase text-light fadeInRight">TITLE 1 HERO</h1>
    
    <!-- Description visible uniquement sur md et plus -->
    <p class="text-light d-none d-md-block fadeInRight">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ipsa nemo, voluptatem doloremque itaque rerum, alias omnis qui cum iure voluptatum quis maxime! Cupiditate alias
    </p>

    <a href="#" class="btn1 fadeInRight">
      <span class="text-uppercase">Discover</span>
    </a>
  </div>
</div>

  </div>
  <div class="swiper-slide heroslide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/skin-cleanser-template-about-page-header-img-bg.jpg');">
    <div class="row h-100 align-items-end">
      <div class="col-6">

      </div>
      <div class="row h-100 align-items-end">
  <div class="col-12 col-md-6 align-self-end ms-md-4 p-4">
    <h1 class="text-uppercase text-light">TITLE 1 HERO</h1>
    
    <!-- Description visible uniquement sur md et plus -->
    <p class="text-light d-none d-md-block">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ipsa nemo, voluptatem doloremque itaque rerum, alias omnis qui cum iure voluptatum quis maxime! Cupiditate alias
    </p>

    <a href="#" class="btn1">
      <span class="text-uppercase">Discover</span>
    </a>
  </div>
</div>

    </div>
  </div>
  <div class="swiper-slide heroslide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/skin-cleanser-template-hero-img-bg.jpg');">
    <div class="row h-100 align-items-end">
      <div class="col-6">
        
      </div>
      <div class="row h-100 align-items-end">
  <div class="col-12 col-md-6 align-self-end ms-md-4 p-4">
    <h1 class="text-uppercase text-light">TITLE 1 HERO</h1>
    
    <!-- Description visible uniquement sur md et plus -->
    <p class="text-light d-none d-md-block">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ipsa nemo, voluptatem doloremque itaque rerum, alias omnis qui cum iure voluptatum quis maxime! Cupiditate alias
    </p>

    <a href="#" class="btn1">
      <span class="text-uppercase">Discover</span>
    </a>
  </div>
</div>

    </div>
  </div>
  </div>



    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <style>
     /* في CSS */
.hide-buttons {
  display: none;
}

    </style>

<script>
  jQuery(document).ready(function($) {
  $('.swiper').hover(
    function() {
      $(this).find('.swiper-button-prev, .swiper-button-next').removeClass('hide-buttons').fadeIn(300);
    },
    function() {
      $(this).find('.swiper-button-prev, .swiper-button-next').addClass('hide-buttons').fadeOut(300);
    }
  );
});

</script>


    <!-- <div class="swiper-scrollbar"></div> -->
  </div>
</section>
<!-- end -->
<!-- category section -->
<section class="category-section py-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-12 d-flex flex-column justify-content-center align-items-center text-center mb-5">
        <h2 class="text-uppercase" data-aos="fade-up">Categories</h2>
        <span class="line d-block mb-5"></span>
      </div>
    
    

      <?php
      $terms = get_terms(array(
        'taxonomy' => 'product_cat',
        'hide_empty' => true, 
      ));

      if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $term) :
          $thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
          $image_url = wp_get_attachment_url($thumbnail_id);

          if (!$image_url) {
            $image_url = get_template_directory_uri() . '/assets/img/skin-cleanser-template-about-page-header-img-bg.jpg';
          }

          $term_link = get_term_link($term);
      ?>

          <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="300">
            <a href="<?php echo esc_url($term_link); ?>" class="text-decoration-none hover-a">
              <img class="category-img-wrapper img-fluid category-img" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($term->name); ?>">
              <p class="text-center hover-a mt-2"><?php echo esc_html($term->name); ?></p>
            </a>
          </div>

      <?php
        endforeach;
      endif;
      ?>

    </div>
  </div>
</section>


<!-- end category section -->
 <!-- section 3 -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Colonne gauche : Titre + texte -->
      <div class="col-md-8">
        <h2 class="text-uppercase font-weight-bold mb-3" data-aos="fade-right" data-aos-delay="300">Our Products</h2>
        <span class="line d-block mb-4" data-aos="fade-left" data-aos-delay="300"></span>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="300">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, dignissimos provident aliquam perferendis earum fuga saepe dolorum recusandae, ipsum nostrum hic tempore tempora quidem velit fugiat, repellat iure delectus quaerat!
        </p>
      </div>
      
      <!-- Colonne droite : bouton -->
      <div class="col-md-4 text-md-right text-center mt-4 mt-md-0">
        <a href="#" class="btn1" data-aos="fade-left" data-aos-delay="300">
          <span class="text-uppercase" >En savoir plus</span>
        </a>
      </div>
      
    </div>
  </div>
</section>
<!-- end section 3  -->
 <!-- section 4 -->
  <section class="custom-section" id="heroSection">
  <div class="container position-relative overflow-hidden py-5">
    <div class="row align-items-center justify-content-center flex-md-row flex-column-reverse">
      
     
      
      <!-- Image Content -->
      <div class="col-md-6 image-content text-center" id="imageContent">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Coffret_Energie_Rituel_du_Matin_Hendiya_Organic.webp" class="img-fluid main-image" alt="">
      </div>

       <!-- Text Content -->
      <div class="col-md-6 text-content px-4 justify-content-center align-content-center" id="textContent">
        
         <div class="d-flex flex-column justify-content-center align-items-center text-center mb-5">
  <h2 class="text-uppercase">Coffret d'énergie rituel du matin</h2>
  <span class="line "></span>
</div>

        <h3><a href="#" class="text-uppercase text-decoration-none text-dark">Coffret d'énergie rituel</a></h3>
        <p>The Energy Set - Morning RitualDh 520.00 MADDh 650.00 MAD</p>
        <p>The Energy Set combines the 4 steps of our morning ritual, 4 fresh natural treatments designed to gently awaken the skin, starting with cleansing, then&...</p>
        <a href="#" class="btn1">En savoir plus</a>
      </div>

    </div>
  </div>
  <script>
    // section 3
// JavaScript: Add class "active" on hover
document.addEventListener("DOMContentLoaded", function () {
  const section = document.getElementById("heroSection");

  section.addEventListener("mouseenter", function () {
    section.classList.add("active");
  });

  section.addEventListener("mouseleave", function () {
    section.classList.remove("active");
  });
});
  </script>
</section>





  <!-- end section 4 -->
<!-- comment -->
<section>
  <div class="container my-5">
   <div class="">
     <h2 data-aos="fade-right" data-aos-delay="300"> cactuslove</h2>
     <span class="line d-block mb-5" data-aos="fade-left" data-aos-delay="300"></span>
   </div>
   <div class="row">
    <div class="col-4 col-12 col-md-6 col-lg-4 mb-4">
      <div class="cart-cmnt" data-aos="fade-up" data-aos-delay="300">
        <h3><span class="rating__star__full">
          <svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
            <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon></svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
          <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon></svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full"><polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon></svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full"><polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon></svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full"><polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon></svg></span></h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ipsa nemo, voluptatem doloremque itaque rerum, alias omnis qui cum iure voluptatum quis maxime! Cupiditate alias</p>
      <span>hatim</span>
      </div>
    </div>

     <div class="col-4 col-12 col-md-6 col-lg-4 mb-4">
      <div class="cart-cmnt" data-aos="fade-up" data-aos-delay="800">
        <h3><span class="rating__star__full"><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full"><polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon></svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full"><polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon></svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full"><polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon></svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full"><polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon></svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full"><polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon></svg></span></h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ipsa nemo, voluptatem doloremque itaque rerum, alias omnis qui cum iure voluptatum quis maxime! Cupiditate alias</p>
      <span>hatim</span>
      </div>
    </div>


     <div class="col-4 col-12 col-md-6 col-lg-4 mb-4">
      <div class="cart-cmnt" data-aos="fade-up" data-aos-delay="1300">
        <h3><span class="rating__star__full"><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full"><polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon></svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full"><polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon></svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full"><polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon></svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full"><polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon></svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full"><polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon></svg></span></h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ipsa nemo, voluptatem doloremque itaque rerum, alias omnis qui cum iure voluptatum quis maxime! Cupiditate alias</p>
      <span>hatim</span>
      </div>
    </div>
    
  </div>
  </div>
</section>
<!-- end -->
<!-- section 5 -->
 <section>
  <div class="container my-5">
   <div class="d-flex flex-column justify-content-center align-items-center text-center mb-5">
  <h2 data-aos="fade-up" data-aos-delay="300">Tips & Tricks</h2>
  <span class="line "></span>
  </div> 
   <div class="row">
    <div class="col-12 col-md-6 col-lg-3 mb-3 ">
      <div class="image-box position-relative overflow-hidden" data-aos="fade-right" data-aos-delay="1500">
  <img class="img-fluid productimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/skin-cleanser-template-about-page-header-img-bg.jpg" alt="">
  <h3 class="image-text">test</h3>
</div>

    </div>

    <div class="col-12 col-md-6 col-lg-3 mb-3 ">
      <div class="image-box position-relative overflow-hidden" data-aos="fade-right" data-aos-delay="1100">
  <img class="img-fluid productimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/skin-cleanser-template-about-page-header-img-bg.jpg" alt="">
  <h3 class="image-text">test</h3>
</div>

    </div>

    <div class="col-12 col-md-6 col-lg-3 mb-3">
      <div class="image-box position-relative overflow-hidden"data-aos="fade-right" data-aos-delay="700">
  <img class="img-fluid productimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/skin-cleanser-template-about-page-header-img-bg.jpg" alt="">
  <h3 class="image-text">test</h3>
</div>

    </div>

    <div class="col-12 col-md-6 col-lg-3 mb-3">
      <div class="image-box position-relative overflow-hidden" data-aos="fade-right" data-aos-delay="300">
  <img class="img-fluid productimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/skin-cleanser-template-about-page-header-img-bg.jpg" alt="">
  <h3 class="image-text">test</h3>
</div>

    </div>
   </div>
  </div>
 </section>
 <!-- section 5 end -->
</div>
<?php get_footer(); ?>

<style>

 .image-box {
  position: relative;
  width: 100%;
  height: 300px;
  overflow: hidden;
}

.image-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.image-box:hover img {
  transform: scale(1.1); /* Zoom In */
}

.image-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 2rem;
  z-index: 2;
  text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
  margin: 0;
}
</style>
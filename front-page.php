<?php get_header(); ?>
<div id="primary" <?php astra_primary_class(); ?>>
  <!-- Swiper Container -->
  <section>
    <div class="swiper herosection">
      <div class="swiper-wrapper">
        <div class="swiper-slide heroslide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/skin-cleanser-template-about-header-img-bg.jpg');">
          <div class="row h-100 align-items-end">
            <div class="col-12 col-md-6 align-self-end ms-md-4 p-4">
              <span class="line d-block mb-5 text-light" style="background: #fff;"></span>
              <h1 class=" text-light fadeInRight">title hero 1</h1>

              <!-- Description visible uniquement sur md et plus -->
              <p class="text-light d-none d-md-block fadeInRight">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ipsa nemo, voluptatem doloremque itaque rerum, alias omnis qui cum iure voluptatum quis maxime! Cupiditate alias
              </p>

              <a href="#" class="btn1 fadeInRight">
                <span class="">Discover</span>
              </a>
            </div>
          </div>

        </div>
        <div class="swiper-slide heroslide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/skin-cleanser-template-about-page-header-img-bg.jpg');">
          <div class="row h-100 align-items-end">
            <div class="col-6">

            </div>
            <div class="row h-100 d-flex justify-content-end align-items-end">
              <div class="col-12 col-md-6 align-self-end p-4 text-end">
                <span class="line d-block mb-5 text-light ms-auto" style="background: #fff; width: 100px;"></span>
                <h1 class=" text-light">title hero 1</h1>

                <!-- Description visible uniquement sur md et plus -->
                <p class="text-light d-none d-md-block">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ipsa nemo, voluptatem doloremque itaque rerum, alias omnis qui cum iure voluptatum quis maxime! Cupiditate alias
                </p>

                <a href="#" class="btn1">
                  <span class="">Discover</span>
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
                <span class="line d-block mb-5 text-light" style="background: #fff;"></span>
                <h1 class=" text-light">title hero 1</h1>

                <!-- Description visible uniquement sur md et plus -->
                <p class="text-light d-none d-md-block">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ipsa nemo, voluptatem doloremque itaque rerum, alias omnis qui cum iure voluptatum quis maxime! Cupiditate alias
                </p>

                <a href="#" class="btn1">
                  <span class="">Discover</span>
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
          <h2 role="heading" class="text-uppercase" data-aos="fade-up" style="color: #477023;">Filtrer par catégories</h2>
          <span class="line d-block mb-5"></span>
        </div>

        <?php
        $terms = get_terms(array(
          'taxonomy' => 'product_cat',
          'hide_empty' => true,
        ));

        if (!empty($terms) && !is_wp_error($terms)) :
          $delay = 0;
          foreach ($terms as $term) :
            $thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
            $image_url = wp_get_attachment_url($thumbnail_id);

            if (!$image_url) {
              $image_url = get_template_directory_uri() . '/assets/img/skin-cleanser-template-about-page-header-img-bg.jpg';
            }

            $term_link = get_term_link($term);
        ?>

            <article class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>">
              <a href="<?php echo esc_url($term_link); ?>" class="text-decoration-none hover-a" itemprop="url">
                <img class="category-img-wrapper img-fluid category-img" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($term->name); ?>" loading="lazy">
                <p class="text-center hover-a mt-2"><?php echo esc_html($term->name); ?></p>
              </a>
            </article>

        <?php
            $delay += 400;
          endforeach;
        endif;
        ?>

      </div>
    </div>
  </section>



  <!-- end category section -->
  <!-- section 3 -->
  <section class="py-5" itemscope itemtype="https://schema.org/Product">
    <div class="p-5 lazy-background" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/skin-cleanser-template-hero-img-bg.jpg"
      style="background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment:fixed;">

      <div class="row align-items-center">

        <!-- collum left : Titre + texte -->
        <div class="col-md-8">
          <h2 class="text-uppercase font-weight-bold mb-3" data-aos="fade-right" data-aos-delay="300">
            Discover Our Organic & Natural Skin Products
          </h2>
          <span class="line d-block mb-4" data-aos="fade-left" data-aos-delay="300"></span>
          <p class="lead text-muted" data-aos="fade-up" data-aos-delay="300">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, dignissimos provident aliquam perferendis earum fuga saepe dolorum recusandae, ipsum nostrum hic tempore tempora quidem velit fugiat, repellat iure delectus quaerat!
          </p>
        </div>

        <!-- Colonne droite : bouton -->
        <div class="col-md-4 text-md-right text-center mt-4 mt-md-0">
          <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="btn1" aria-label="Découvrez nos produits de soin naturels" data-aos="fade-left" data-aos-delay="300">
            Découvrez nos produits
          </a>

        </div>

      </div>
    </div>
  </section>
  <!-- end section 3  -->
  <!-- section 4 -->
  <section class="custom-section" id="heroSection" itemscope itemtype="https://schema.org/Product">
    <div class="container position-relative overflow-hidden py-5">
      <div class="row align-items-center justify-content-center flex-md-row flex-column-reverse">

        <!-- Image Content -->
        <div class="col-md-6 image-content text-center" id="imageContent">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Coffret_Energie_Rituel_du_Matin_Hendiya_Organic.webp"
            class="img-fluid main-image"
            alt="Coffret d'énergie rituel du matin Hendiya Organic"
            itemprop="image"
            loading="lazy">
        </div>

        <!-- Text Content -->
        <div class="col-md-6 text-content px-4 justify-content-center align-content-center" id="textContent" itemprop="description">
          <div class="d-flex flex-column justify-content-center align-items-center text-center mb-5">
            <h2 class="text-uppercase" data-aos="fade-up" data-aos-delay="300" itemprop="name">
              Coffret d'énergie rituel du matin
            </h2>
            <span class="line"></span>
          </div>

          <h3><a href="#" class="text-uppercase text-decoration-none text-dark" itemprop="url">Coffret d'énergie rituel</a></h3>

          <p><span itemprop="offers" itemscope itemtype="https://schema.org/Offer">
              <meta itemprop="priceCurrency" content="MAD" />
              <span itemprop="price">520.00</span> MAD <span class="text-muted"><s>650.00 MAD</s></span>
            </span></p>

          <p>The Energy Set combines the 4 steps of our morning ritual, 4 fresh natural treatments designed to gently awaken the skin, starting with cleansing, then...</p>

          <a href="#" class="btn1" aria-label="Voir les détails du coffret d'énergie rituel">En savoir plus</a>
        </div>

      </div>
    </div>

    <script>
      // JavaScript: Add class "active" on hover
      document.addEventListener("DOMContentLoaded", function() {
        const section = document.getElementById("heroSection");
        section.addEventListener("mouseenter", function() {
          section.classList.add("active");
        });
        section.addEventListener("mouseleave", function() {
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
                  <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon>
                </svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
                  <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon>
                </svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
                  <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon>
                </svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
                  <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon>
                </svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
                  <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon>
                </svg></span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ipsa nemo, voluptatem doloremque itaque rerum, alias omnis qui cum iure voluptatum quis maxime! Cupiditate alias</p>
            <span>hatim</span>
          </div>
        </div>

        <div class="col-4 col-12 col-md-6 col-lg-4 mb-4">
          <div class="cart-cmnt" data-aos="fade-up" data-aos-delay="800">
            <h3><span class="rating__star__full"><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
                  <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon>
                </svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
                  <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon>
                </svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
                  <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon>
                </svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
                  <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon>
                </svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
                  <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon>
                </svg></span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ipsa nemo, voluptatem doloremque itaque rerum, alias omnis qui cum iure voluptatum quis maxime! Cupiditate alias</p>
            <span>hatim</span>
          </div>
        </div>


        <div class="col-4 col-12 col-md-6 col-lg-4 mb-4">
          <div class="cart-cmnt" data-aos="fade-up" data-aos-delay="1300">
            <h3><span class="rating__star__full"><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
                  <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon>
                </svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
                  <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon>
                </svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
                  <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon>
                </svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
                  <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon>
                </svg><svg width="15px" height="15px" viewBox="0 0 25 25" class="icon icon-star icon-star--full">
                  <polygon fill-rule="nonzero" points="16.2212909 8.77064179 12.5128412 0.870224269 8.80343056 8.77064179 0.512841234 10.0374085 6.51243703 16.1862739 5.09643337 24.8702243 12.5128412 20.7696377 19.9292491 24.8702243 18.5122845 16.1862739 24.5128412 10.0374085"></polygon>
                </svg></span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ipsa nemo, voluptatem doloremque itaque rerum, alias omnis qui cum iure voluptatum quis maxime! Cupiditate alias</p>
            <span>hatim</span>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end -->
  <!-- section fin -->
  <section>
    <div class="row"
      style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/skin-cleanser-template-about-page-header-img-bg.jpg'); height: 530px; background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">

      <div class="d-flex justify-content-end align-items-center" style="height: 530px; width: 100%;">

        <div class="col-5 me-5">
          <div class="p-5 text-center" style="background-color: rgba(255, 255, 255, 0.4); color: #000; ">
            <div class="d-flex flex-column justify-content-center align-items-center text-center mb-5">
              <h2 data-aos="fade-up" data-aos-delay="300">Prickly pears, but not only</h2>
              <span class="line"></span>
            </div>
            <p data-aos="fade-left" data-aos-delay="300">
              We are committed to a holistic approach that brings together all our convictions as a brand.
              Whether in terms of formulation, ecology, people or our relationship with you.
              Our 7 main commitments make up the charter of values that guides our daily choices, discover it now.
            </p>
            <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn1" data-aos="fade-right" data-aos-delay="300">Contact us</a>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end section fin -->
  <!-- section 5 -->
  <section>
    <div class="container my-5">
      <div class="d-flex flex-column justify-content-center align-items-center text-center mb-5">
        <h2 data-aos="fade-up" data-aos-delay="300">Tips & Tricks</h2>
        <span class="line"></span>
      </div>

      <div class="row justify-content-center">
        <?php
        $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 4,
        );
        $query = new WP_Query($args);
        $delay = 300;

        if ($query->have_posts()):
          while ($query->have_posts()): $query->the_post();
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
            $post_title = get_the_title();
            $post_link  = get_permalink();
            $alt_text   = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
        ?>
            <article class="col-12 col-md-6 col-lg-3 mb-1" itemscope itemtype="https://schema.org/BlogPosting">
              <a href="<?php echo esc_url($post_link); ?>" class="text-decoration-none" itemprop="url">
                <div class="image-box position-relative overflow-hidden" data-aos="fade-right" data-aos-delay="<?php echo $delay; ?>">
                  <?php if ($image_url): ?>
                    <img class="img-fluid productimg"
                      src="<?php echo esc_url($image_url); ?>"
                      alt="<?php echo esc_attr($alt_text ?: $post_title); ?>"
                      itemprop="image"
                      loading="lazy">
                  <?php else: ?>
                    <img class="img-fluid productimg"
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg"
                      alt="Default image"
                      loading="lazy">
                  <?php endif; ?>
                  <p class="image-text" itemprop="headline"><?php echo esc_html($post_title); ?></p>
                </div>
              </a>
            </article>
        <?php
            $delay += 400;
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-center mb-5">
            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn1" aria-label="Voir tous les articles">
              Voir tous les articles
            </a>
          </div>
        </div>
      </div>
  </section>




  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const lazyBg = document.querySelectorAll(".lazy-background");
      lazyBg.forEach(el => {
        const bg = el.getAttribute("data-bg");
        if (bg) el.style.backgroundImage = `url('${bg}')`;
      });
    });
  </script>

  <?php get_footer(); ?>
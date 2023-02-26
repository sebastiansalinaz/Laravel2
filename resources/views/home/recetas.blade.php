<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('css/recetas.css')}}">
    <link rel="icon" href="{{ asset('/img/senakitch.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>

  <body>

    

  <header class="header">

<a href="#" class="logo">
  <img src="img/logosena.png" alt="">
  
</a>

  <nav class="navbar">
      <a href="<?php echo e(route('home')); ?>">inicio</a>
      <a href="<?php echo e(route('nosotros')); ?>">acerca de</a>
      <a href="<?php echo e(route('menu')); ?>">menu</a>
      <a href="<?php echo e(route('productos')); ?>">productos</a>
      <a href="<?php echo e(route('opiniones')); ?>">opiniones</a>
      <a href="{{route('contactos')}}">contacto</a>
      <a href="<?php echo e(route('recetas')); ?>">Recetas</a>
</nav>

<div class="icons">
  <div class="fas fa-search" id="search-btn"></div>
  <div class="fas fa-shopping-cart" id="cart-btn"></div>
  <div class="fas fa-bars" id="menu-btn"></div>
</div>

<div class="search-form">
  <input type="search" id="search-box" placeholder="que estas buscando...">
  <label for="search-box" class="fas fa-search"></label>
</div>



</header>
    <section id="tranding">
      <div class="container">
        <h3 class="text-center section-subheading">- popular Delivery -</h3>
        <h1 class="text-center section-heading">Tranding food</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="images/gastronomia-colombiana.jpg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price"></h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    
                  </h2>
                  <h3 class="food-rating">
                    <span>4.5</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="images/gourmet.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price"></h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                   
                  </h2>
                  <h3 class="food-rating">
                    <span>4.3</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="images/vegetariana.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price"></h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    
                  </h2>
                  <h3 class="food-rating">
                    <span>4.5</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="images/oriental.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price"></h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                   
                  </h2>
                  <h3 class="food-rating">
                    <span>4.4</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="images/helado.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price"></h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                   
                  </h2>
                  <h3 class="food-rating">
                    <span>4.6</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="images/tranding-food-6.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price"></h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                  
                  </h2>
                  <h3 class="food-rating">
                    <span>4.7</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="images/mar.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price"></h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                   
                  </h2>
                  <h3 class="food-rating">
                    <span>4.2</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
          </div>

          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </div>
    </section>


    <section class="footer">

    <div class="share">
        <a href="https://www.facebook.com/SENA" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/SENAComunica" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/senacomunica/" class="fab fa-instagram"></a>
        <a href="https://co.linkedin.com/school/servicio-nacional-de-aprendizaje-sena-/" class="fab fa-linkedin"></a>
        <a href="https://co.pinterest.com/senacomunica/" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
    <a href="<?php echo e(route('home')); ?>">inicio</a>
        <a href="<?php echo e(route('nosotros')); ?>">acerca de</a>
        <a href="<?php echo e(route('menu')); ?>">menu</a>
        <a href="<?php echo e(route('productos')); ?>">productos</a>
        <a href="<?php echo e(route('opiniones')); ?>">opiniones</a>
        <a href="{{route('contactos')}}">contacto</a>
        <a href="<?php echo e(route('recetas')); ?>">Recetas</a>
    </div>

    <div class="credit">creado por <span>Senakitch</span> | Todos los derechos reservados</div>

</section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/jm.js') }}"></script>
  </body>
  <script src="{{ asset('js/script.js') }}"></script>
</html>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fody Slider</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('css/recetas.css')}}">
    <link rel="icon" href="{{ asset('/img/senaa.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>

  <body>

    

  <header class="header">

<a href="#" class="logo">
  <img src="img/Logo-sena-blanco-sin-fondo.png" alt="">
  
</a>

  <nav class="navbar">
      <a href="<?php echo e(route('home')); ?>">inicio</a>
      <a href="">acerca de</a>
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
                <img src="images/tranding-food-1.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">$20</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Special Pizza
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
                <img src="images/tranding-food-2.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">$20</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Meat Ball
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
                <img src="images/tranding-food-3.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">$40</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Burger
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="images/tranding-food-4.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">$15</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Frish Curry
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
                <img src="images/tranding-food-5.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">$15</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Pane Cake
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
                <img src="images/tranding-food-6.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">$20</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Vanilla cake
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
                <img src="images/tranding-food-7.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="food-price">$8</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Straw Cake
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

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/jm.js') }}"></script>
  </body>

</html>
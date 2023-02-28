@extends('layauts.rece')
@section('title', 'recetas')

@section('conten')
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
            <img src="images/tranding-food-2.png" alt="Tranding">
          </div>
          <div class="tranding-slide-content">
        
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
          
            <div class="tranding-slide-content-bottom">
              <h2 class="food-name">
                Burger
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
            <img src="images/tranding-food-4.png" alt="Tranding">
          </div>
          <div class="tranding-slide-content">
      
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


<section class="blogs" id="blogs">

  <h1 class="heading"> nuestras <span>recetas </span> </h1>


  <div class="box-container">

    <div class="box">
      <div class="image">
        <img src="images/blog-1.jpeg" alt="">
      </div>
      <div class="content">
        <a href="#" class="title">cafe delicioso y refrescante</a>
        <span>by Daniel García / 21 mayo, 2022</span>
        <p>Nada más delicioso que disfrutar de una deliciosa tacita de café a cualquier hora, puedes estar en la oficina o en la casa.</p>
        <a href="#" class="btn">leer mas</a>
      </div>
    </div>

    <div class="box">
      <div class="image">
        <img src="images/empandas.jpg" alt="">
      </div>
      <div class="content">
        <a href="#" class="title">empanadas de queso</a>
        <span>by Ferran Adriá Acosta / 09 agosto, 2022</span>
        <p>Un clásico de la cocina tradicional colombiana, empanadas de queso. Es una receta super fácil, rápida y quedan increíbles y muy jugosas!.</p>
        <a href="#" class="btn">leer mas</a>
      </div>
    </div>

    <div class="box">
      <div class="image">
        <img src="images/raspao.jpg" alt="">
      </div>
      <div class="content">
        <a href="#" class="title">cholado del valle del cauca</a>
        <span>by Joan Roca / 13 septiembre, 2022</span>
        <p>El Cholado es un cruce entre un postre helado, cóctel de frutas, y una bebida, y es popular en la región de El Valle de Colombia. </p>
        <a href="#" class="btn">leer mas</a>
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
@endsection
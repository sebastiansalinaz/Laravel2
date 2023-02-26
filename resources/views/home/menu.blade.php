<x-layauts.app title="menu">



<section class="menu" id="menu">

    <h1 class="heading"> nuestro <span>menu</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/sirloin.png" alt="">
            <h3>sirloin con salsa de chiplote</h3>
            <div class="price">$14,900 <span>21,000</span></div>
            <a href="#" class="btn">añadir al carrito</a>
        </div>

        <div class="box">
            <img src="images/tomate..png" alt="">
            <h3>tomate acordeon</h3>
            <div class="price">$16,300 <span>17,300</span></div>
            <a href="#" class="btn">añadir al carrito</a>
        </div>

        <div class="box">
            <img src="images/menu-3.png" alt="">
            <h3>cafe soluble de colombia</h3>
            <div class="price">$8,000 <span>13,900</span></div>
            <a href="#" class="btn">añadir al carrito</a>
        </div>

        <div class="box">
            <img src="images/rollo.png" alt="">
            <h3>rollo de carne relleno de jamon y queso</h3>
            <div class="price">$18,000 <span>20,900</span></div>
            <a href="#" class="btn">añadir al carrito</a>
        </div>

        <div class="box">
            <img src="images/pastel.png" alt="">
            <h3>Pastel con buttercream de chocolate</h3>
            <div class="price">$32,000 <span>46,100</span></div>
            <a href="#" class="btn">añadir al carrito</a>
        </div>

        <div class="box">
            <img src="images/hamburguesa.png" alt="">
            <h3>Hamburguesa</h3>
            <div class="price">$15,900 <span>21,000</span></div>
            <a href="#" class="btn">añadir al carrito</a>
        </div>

        <div class="box">
            <img src="images/donuts.png" alt="">
            <h3>Donuts</h3>
            <div class="price">$5,100 <span>5,900</span></div>
            <a href="#" class="btn">añadir al carrito</a>
        </div>

        <div class="box">
            <img src="images/hotdog.png" alt="">
            <h3>Hots Dogs</h3>
            <div class="price">$13,000 <span>15,400</span></div>
            <a href="#" class="btn">añadir al carrito</a>
        </div>

        <div class="box">
            <img src="images/sandwich.png" alt="">
            <h3>sandwich Especial</h3>
            <div class="price">$7,900 <span>8,800</span></div>
            <a href="#" class="btn">añadir al carrito</a>
        </div>

        <div class="box">
            <img src="images/empa.png" alt="">
            <h3>Empanadas de pipian</h3>
            <div class="price">$1,600 <span>1,700</span></div>
            <a href="#" class="btn">añadir al carrito</a>
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

<script src="{{ asset('js/script.js') }}"></script>


</x-layauts.app>
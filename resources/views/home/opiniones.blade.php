<<<<<<< HEAD
@extends('layauts.app')
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opiniones</title>
    <link rel="icon" href="{{ asset('/img/senakitch.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
>>>>>>> 7e13de0910ddb8dd34eb64defc36be8579e62921

@section('content')



    <section class="review" id="review">

<<<<<<< HEAD
      
=======
    <nav class="navbar">
    <a href="<?php echo e(route('home')); ?>">inicio</a>
        <a href="<?php echo e(route('nosotros')); ?>">acerca de</a>
        <a href="<?php echo e(route('menu')); ?>">menu</a>
        <a href="<?php echo e(route('productos')); ?>">productos</a>
        <a href="<?php echo e(route('opiniones')); ?>">opiniones</a>
        <a href="{{route('contactos')}}">contacto</a>
        <a href="<?php echo e(route('recetas')); ?>">Recetas</a>
    </nav>
>>>>>>> 7e13de0910ddb8dd34eb64defc36be8579e62921

        <h1 class="heading"> su <span>opinion</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Que meloooo, ojala pudieran haber mas paginas asi tan buenas, ojala las demas paginas puedan tomar ejemplo de paginas asi como estas.</p>
                <img src="images/anuel.jpg" class="user" alt="">
                <h3>la dobleAA</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>que buena web, puedo encontrar todo lo que busco tanto en recetas como en productos pero creo que le falta algo, aun pueden mejorar sigan asi que bendicion.</p>
                <img src="images/descarga.jpg" class="user" alt="">
                <h3>juan cruz</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>esta muy buena la pagina trae muy buenas cosas pero le faltan algunos cambios y optimizarla pero de resto todo bello todo bonito.</p>
                <img src="images/fuicioso.jpg" class="user" alt="">
                <h3>fabian alberto</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>
        <br>
    </section>
    <section class="review" id="review">

        <div class="box-container">

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Que meloooo, ojala pudieran haber mas paginas asi tan buenas, ojala las demas paginas puedan tomar ejemplo de paginas asi como estas.</p>
                <img src="images/westcol.jpeg" class="user" alt="">
                <h3>El West</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>que buena web, puedo encontrar todo lo que busco tanto en recetas como en productos pero creo que le falta algo, aun pueden mejorar sigan asi que bendicion.</p>
                <img src="images/jordi.jpeg" class="user" alt="">
                <h3>Jorge</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>esta muy buena la pagina trae muy buenas cosas pero le faltan algunos cambios y optimizarla pero de resto todo bello todo bonito.</p>
                <img src="images/yina.jpeg" class="user" alt="">
                <h3>Yina</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>


        </div>
        <br>
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
            <a href="#home">inicio</a>
            <a href="#about">acerca de</a>
            <a href="#menu">menu</a>
            <a href="#products">productos</a>
            <a href="#review">opiniones</a>
            <a href="#contact">contacto</a>
            <a href="#blogs">recetas</a>
        </div>

        <div class="credit">creado por <span>Senakitch</span> | Todos los derechos reservados</div>

    </section>

    <script src="{{ asset('js/script.js') }}"></script>

<<<<<<< HEAD
@endsection
=======
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


</body>
</html>
>>>>>>> 7e13de0910ddb8dd34eb64defc36be8579e62921

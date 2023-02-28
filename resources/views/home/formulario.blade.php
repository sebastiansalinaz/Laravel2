<x-layauts.app title="formulario">

<section class="formulario">
    <h1>¿Como hecer empanadas de queso?</h1>
    <form action="{{ route('formulario.store') }}" method="POST">
        <label for="ingredientes">
            ingredientes
            <br>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </label>
        <br>
        
        <label for="">
            preparacion
            <br>
            <textarea name="preparacion" id="" cols="30" rows="10"></textarea>
        </label>
        <br>
        <h1>empanadas de queso</h1>
        <label for="">
            Categorias de esta receta
            <br>
            <input type="text">
            <input type="text">
        </label>
        <button>enviar</button>
    </form>
</section>


</x-layauts.app>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/venta.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
</head>
<body>
            <div class="rain-container"> 
                <div class="rainDrop rainDrop--s" style="--x-start:40vw; --x-end: 50vw;">🥇</div>
                <div class="rainDrop rainDrop--m" style="--x-start:60vw; --x-end: 50vw;">💰</div>
                <div class="rainDrop rainDrop--l" style="--x-start:50vw; --x-end: 50vw;">💵</div>
                <div class="rainDrop rainDrop--xl" style="--x-start:50vw; --x-end: 50vw;">💲</div>

                <!-- <div class="venta">
                    <h1 id="verde">¡¡¡ VENTA !!!</h1>
                </div> -->

                <div>
                    <h1 style=" margin-top: 8rem; font-size: 3rem;">{{ $producto->nombre }}</h1>
                    <h2 style=" margin-top: 2rem; font-size: 1rem;">TL: {{ $producto->descripcion }}</h2>
                </div>


                <div class="grid grid-cols-1 mt-6 mx-7">
                        <img id="imagenSeleccionada" style="max-height: 500px;" src="/imagen/{{ $producto->imagen }}">           
                </div>
            
            </div>

            <a href="{{ route('productos.index') }}" class="btn-flotante">Volver a lista</a>
        
        <script src="{{ asset('js/venta.js') }}"></script>
</body>
</html>]
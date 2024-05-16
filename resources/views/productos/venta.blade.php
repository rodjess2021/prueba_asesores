<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/venta.css') }}">
</head>
<body>
            <div class="rain-container"> 
                <div>
                    <h1 style="margin-left: 30rem; font-size: 20px; font-weight: bold;">{{ $producto->nombre }}</h1>
                    <h2 style="margin-left: 31rem; margin-top: 2rem;">{{ $producto->descripcion }}</h2>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                        <img id="imagenSeleccionada" style="max-height: 300px;" src="/imagen/{{ $producto->imagen }}">           
                </div>


                   
                <div class="rainDrop rainDrop--s" style="--x-start:40vw; --x-end: 50vw;">🥇</div>
                <div class="rainDrop rainDrop--m" style="--x-start:60vw; --x-end: 50vw;">💰</div>
                <div class="rainDrop rainDrop--l" style="--x-start:50vw; --x-end: 50vw;">💵</div>
                <div class="rainDrop rainDrop--xl" style="--x-start:50vw; --x-end: 50vw;">💲</div>
            
            </div>

        <script src="{{ asset('js/tuarchivo.js') }}"></script>
</body>
</html>
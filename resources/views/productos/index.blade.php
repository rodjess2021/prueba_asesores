<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <a type="button" href="{{ route('productos.create') }}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Añadir nuevo</a>
            <table class="table-fixed w-full mt-3">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th style="display: none;">ID</th>
                        <th class="border px-4 py-2">STAGENAME</th>
                        <th class="border px-4 py-2">TEAMLEADER</th>
                        <th class="border px-4 py-2">AVATAR</th>
                        <th class="border px-4 py-2">ACCIONES</th>
                        <th class="border px-4 py-2">VENTA</th>
                    </tr>  
                </thead>    
                <tbody>
                    @foreach ($productos as $producto)
                    <tr>
                        <td style="display: none;">{{$producto->id}}</td>
                        <td class="text-center">{{$producto->nombre}}</td>
                        <td class="text-center">{{$producto->descripcion}}</td>
                        <td  class="border px-14 py-1">
                            <img src="/imagen/{{$producto->imagen}}" width="60%">
                        </td>                        
                        <td class="border px-4 py-2">
                            <div class="flex justify-center rounded-lg text-lg" role="group">
                                <!-- botón editar -->
                                <a href="{{ route('productos.edit', $producto->id) }}" class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg text-sm px-5 py-3.5 text-center inline-flex items-center dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 me-2 mb-2">Editar</a>

                                <!-- botón borrar -->
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-5 py-3 text-base font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Borrar</button>
                                </form>
                            </div>
                        </td>
                        <td>
                        <a href="{{ route('productos.show', $producto->id) }}" style="margin-left: 4rem;" type="submit" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 ml-12">Venta 🤑</a>
                        </td>
                    </tr>
                    @endforeach   
                </tbody>  
                     
            </table>
            <div>
            {!! $productos->links() !!}
            </div>
            </div>
        </div>
    </div>
    <footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span style="margin-left: 30rem;" class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 All Rights Reserved. | Developed by: rodjess</span>
        </div>
    </footer>

</x-app-layout>
<script>
    (function () {
  'use strict'
  //debemos crear la clase formEliminar dentro del form del boton borrar
  //recordar que cada registro a eliminar esta contenido en un form  
  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {        
          event.preventDefault()
          event.stopPropagation()        
          Swal.fire({
                title: '¿Confirma la eliminación del registro?',        
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#20c997',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                    Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                }
            })                      
      }, false)
    })
})()
</script>
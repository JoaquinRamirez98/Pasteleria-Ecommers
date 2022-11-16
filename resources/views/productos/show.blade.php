<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-2 gap-6">
            <div>
                <div class="flexslider">
                    <ul class="slides">
                     @foreach ($producto->images as $imagen)
                         
                        <li data-thumb="{{ Storage::url($imagen->url) }}">
                         <img src="{{ Storage::url($imagen->url) }}" />
                        </li>
                     @endforeach  
                    </ul>
                  </div>
            </div>
            <div>
                <h1 class="text-x1 font-bold text-gray-700">
                    {{$producto->Nombre_producto}}
                </h1>
                <div class="flex">
                    <p class="text-gray-700">Categoria: <a class="underline capitalize hover:text-pink-500" href="">{{$producto->Categoria->Nombre_categoria}}</a></p>
                    
                    <p class="text-gray-700 mx-6">5 <i class="fas fa-star text-sm text-yellow-400"></i></p>
                    <a class="text-pink-500 hover:text-pink-600 underline" href="">39 reseñas</a>
                </div>

                <div class="flex">
                    <p class="text-gray-700">Presentacion: <a class="underline capitalize hover:text-pink-500" href="">{{$producto->presentacion_id}}</a></p>
                </div>
                <div class="flex">
                    <p class="text-gray-700">Sabor de masa: <a class="underline capitalize hover:text-pink-500" href="">{{$producto->Sabor_masa->Nombre_sabor_masas}}</a></p>

                </div >
                <div class="flex">
                    <p class="text-gray-700">Sabor de relleno: <a class="underline capitalize hover:text-pink-500" href="">{{$producto->relleno_sabor_id}}</a></p>

                </div >
                <div class="flex">
                    <p class="text-gray-700">Decoracion: <a class="underline capitalize hover:text-pink-500" href="">{{$producto->decoracion_id}}</a></p>

                </div>
                <p class="text-2x1 font-semibold text-gray-700 my-4">$ {{$producto->precio}}</p>
            
                <div class="bg-white rounded-lg shadow-lg mb-6">
                    <div class="p-4 flex items-center">
                        <span class="flex items-center justify-center h-10 w-10 rounded-full bg-green-600">
                            <i class="fas fa-truck text-sm text-white"></i>
                        </span>
                        <div class="ml-4">
                            <p class="text-lg font-semibold text-green-600">Se hace envios en todo corrientes capital</p>
                                {{-- Esto es para mostrar en cuantos dias desde la fecha que ingreso va a recibir --}}
                            <p>Recibelo el {{ Date::now()->addDay(2)->locale('es')->format('l j F')}} </p>
                        </div>
                    </div>
                </div>
                @livewire('add-cart-item', ['producto' => $producto])
            </div>
        </div>
    </div>
    @push('script')
        <script>
            $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
            });
        </script>
    @endpush
</x-app-layout>
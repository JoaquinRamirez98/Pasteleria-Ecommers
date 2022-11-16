<div>
    <div class="bg-white rounded-lg shadow-lg mb-4">
        <div class="px-6 py-2 flex justify-between items-center">
            <h1 class="font-semibold text-gray-700 uppercase">
              {{$categoria->Nombre_categoria}}  
            </h1>

            <div class="grid grid-cols-2 border border-gray-200 divide-x divide-gray-200 text-gray-500">
                <i class="fas fa-th-list  p-3 cursor-pointer {{ $view == 'grid' ? 'text-pink-500' : ''}}" wire:click="$set('view', 'grid')"></i>
                <i class="fas fa-border-all p-3 cursor-pointer {{ $view == 'list' ? 'text-pink-500' : ''}}" wire:click="$set('view', 'list')"></i>
            </div>

        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">

        <aside>
            <h2 class="font-semibold text-center mb-2">Mas cositas (sec 8)</h2>
        </aside>

        <div class="md:col-spam-2 lg:col-span-4">
            @if ($view == 'list')
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($productos as $producto)
                <li class="bg-white rounded-lg shadow ">
                    <article>  
                      <figure>
                            <img class="h-48 w-full object-cover object-center" src="{{ Storage::url($producto ->images->first()->url)}}" alt="">
                        </figure>
      
      
                        <div class="py-4 px-6">
                          <h1 class="text-lg font - font-semibold">
                            <a href="{{route('productos.show', $producto)}}">
                              {{Str::limit($producto->Nombre_producto, 20)}}
                            </a>
                          </h1>
      
                          <p class="font-bold text-gray-700">$ {{$producto->precio}}</p>
                        </div>
                    </article>
                  </li>
                @endforeach
            </ul>

            @else
                <ul>
                    @foreach ($productos as $producto)
                        <x-product-list :producto="$producto"/>
                    @endforeach
                </ul>
            @endif
          
        
            <div class="mt-4">
                {{$productos->links()}}
            </div>
        </div>

    </div>

</div>

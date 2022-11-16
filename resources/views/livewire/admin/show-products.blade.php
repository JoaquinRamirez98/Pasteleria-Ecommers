<div>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
                Lista de Productos
            </h2>

            <x-button-enlace class="ml-auto" href="{{route('admin.productos.create')}}">
                Agregar producto
            </x-button-enlace>
        </div>
    </x-slot>

    <div class="container py-112">

        <x-table-responsive>

            <div class="px-6 py-4">
                <x-jet-input type="text"
                        wire:model=search
                        class="w-full" 
                        placeholder="Ingrese el nombre del producto que quiere buscar"/>
            </div>

            @if ($productos->count())
                
                <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nombre
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Categoria
                                        </th>
                                        
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Precio
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Editar</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($productos as $producto)
                                        
                                    
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full object-cover"
                                                            src="{{ Storage::url($producto->images->first()->url) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$producto->Nombre_producto}}
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">

                                                <div class="text-sm text-gray-900">
                                                    {{$producto->Categoria->Nombre_categoria}}
                                                </div>
                                                
                                            </td>
                                            
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            $ {{$producto->precio}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="{{ route('admin.productos.edit', $producto )}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                </table>
            @else
                <div class="px-6 py-4">
                    No hay ningun registro coincidente
                </div>
            @endif
            
            @if ($productos->hasPages())
                
            <div class="px-6 py-4">
                {{$productos->links()}}
            </div>
                
            @endif
            
        </x-table-responsive>



    </div>
</div>

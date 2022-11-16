<x-app-layout>
    <ul>
        <div class="container py-8">
            @forelse ($productos as $producto)
            <x-product-list :producto="$producto"/>
            
            @empty
                <li class="bg-white rounded-lg shadow-2xl">
                    <div class="p-4">
                        <p class="text-lg font-semibold text-gray-700">Ningún producto coincide con los parametros ingresados</p>
                    </div>
                </li>
            @endforelse
        </div>
    </ul>
    <div class="mt-4">
        {{$productos->links()}}
    </div>

</x-app-layout>
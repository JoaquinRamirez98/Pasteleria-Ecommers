<x-app-layout>

    <div class="container py-8">
        <figure class="mb-4">
            <img class="w-full h-80 object-cover object-center" src="{{Storage::url($categoria->image)}}" alt="">
        </figure>

        @livewire('categoria-filtro', ['categoria' => $categoria])

    </div>

</x-app-layout>
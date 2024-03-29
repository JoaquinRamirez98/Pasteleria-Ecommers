<x-app-layout>

    <div class="container py-8">
        @foreach ($categorias as $categoria)
            
       
            <section class="mb-6">
                <div class="flex items-center mb-2">
                    <h1 class="text-lg uppercase front-semibold text-gray-700">
                        {{$categoria ->Nombre_categoria}}
                    </h1>

                    <a href="{{route('categorias.show', $categoria)}}" class="text-pink-500 hover:text-pink-400 hover:underline ml-2 font-semibold">Ver más</a>
                 </div>

                @livewire('categoria-productos', ['categoria' => $categoria])
            </section>
        @endforeach   
    </div>


    @push('script')
    

        <script>

            Livewire.on('glider', function(id){
                
                new Glider(document.querySelector('.glider-' + id), {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: true,
                    dots: '.glider-' + id + '~ .dots',
                    arrows: {
                        prev: '.glider-' + id + '~ .glider-prev',
                        next: '.glider-' + id + '~ .glider-next'
                    },
                    responsive: [
                        {
                            breakpoint: 640,
                            settings:{
                                slidesToShow:2.5,
                                slidesToScroll:2,

                            },

                            breakpoint: 768,
                            settings:{
                                slidesToShow:3.5,
                                slidesToScroll:3,

                            },
                            breakpoint: 1024,
                            settings:{
                                slidesToShow:4.5,
                                slidesToScroll:4,

                            },
                            breakpoint: 1280,
                            settings:{
                                slidesToShow:5.5,
                                slidesToScroll:5,

                            },
                        }
                    ]
                });
            });

        </script>
    @endpush

</x-app-layout>
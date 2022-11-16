
        @php
            // SDK de Mercado Pago
            require base_path('/vendor/autoload.php');
            // Agrega credenciales
            MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

            // Crea un objeto de preferencia
            $preference = new MercadoPago\Preference();

            // Crea un ítem en la preferencia
            $item = new MercadoPago\Item();
            $item->title = 'Mi producto';
            $item->quantity = 1;
            $item->unit_price = 75.56;


            $preference->back_urls = array(
                "success" => "http://pasteleria.test/",
                "failure" => "https://www.tu-sitio/failure",
                "pending" => "https://www.tu-sitio/pending",
            );

            $preference->auto_return = "approved";
            $preference->items = array($item);
            $preference->save();
        @endphp

    <div class="container py-8">
        <section class="bg-white rounded-lg shadow-lg p-6 text-gray-700">
            <h1 class="text-lg font-semibold mb-6">CARRITO DE COMPRAS</h1>

            @if (Cart::count())
            <table class="table-auto w-full">
                <Thead>
                    <tr>
                        <th></th>
                        <th>Precio</th>
                        <th>Cant</th>
                        <th>Total</th>
                    </tr>
                </Thead>

                <tbody>
                @foreach (Cart::content() as $item)
                        
                    <tr>
                        <td>
                            <div class="flex">
                                <img class="h-15 w-20 object-cover mr-4" src="{{ $item->options->image }}" alt="">
                                <div>
                                    <p class="font-bold">{{$item->name}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <span>$ {{$item->price}}</span>
                            <a class="ml-6 cursor-pointer hover:text-red-600"
                                wire:click="delete('{{$item->rowId}}')"
                                wire:loading.class="text-red-600 opacity-25"
                                wire:target="delete('{{$item->rowId}}')">
                                
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                @livewire('update-cart-item', ['rowId' => $item->rowId], key($item->rowId))

                            </div>
                        </td>
                        <td class="text-center">
                            $ {{$item->price * $item->qty}}
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>

            <a class="text-sm cursor-pointer hover:underline mt-3 inline-block" 
                wire:click="destroy">
                <i class="fas fa-trash"></i>
                Borrar carrito de compras
            </a>
            @else
                <div class="flex flex-col items-center">
                    <x-cart />
                    <p class="text-lg text-gray-700 mt-4">El carrito de compras está vacio</p>
                
                    <x-button-enlace href="/" class="mt-4 px-16">
                        Ir al inicio
                    </x-button-enlace>
                </div>
            @endif
        
        </section>

        @if (Cart::count())
            
            <div class="bg-white rounded-lg shadow-lg px-6 py-4 mt-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-700">
                            <span class="font-bold text-lg">Total:</span>
                            $ {{Cart::subTotal()}}
                        </p>
                    </div>
                    <div>
                        <x-button-enlace >
                            <div class="cho-container"></div>
                        </x-button-enlace>
                    </div>
                </div>
            </div>

        @endif

    </div>


    <script src="https://sdk.mercadopago.com/js/v2"></script>

    
    <script>
        const mp = new MercadoPago("{{config('services.mercadopago.key')}}", {
            locale: 'es-AR'
        });

        mp.checkout({
            preference: {
            id: '{{ $preference->id }}'
            },
            render: {
            container: '.cho-container',    
            label: 'PAGAR',
            }
        });

        

    </script>

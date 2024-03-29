
<header class="bg-pink-500 sticky top-0 z-50" x-data="dropdown()">
    <div class="container flex items-center h-16 justify-between md:justify-start">
        <a ::class="{'bg-opacity-100 text-orange-500' : open}"
             x-on:click="show()"
            class="flex flex-col items-center justify-center order-last md:order-first px-6 md:px-4 bg-white bg-opacity-25 text-white cursor-pointer front-semibold h-full">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>

            <span class="text-sm hidden md:block">Categorias</span>
        </a>

        <a href="/" class="mx-6">
            <x-jet-application-mark class="block h-9 w-auto" />

        </a>

        <div class="flex-1 hidden md:block">
            @livewire('search')
        </div>
        
        

        <div class="mx-6 relative hidden md:block">
            @Auth
               <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">
                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                 
                </x-slot>

                <x-slot name="content">
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Account') }}
                    </div>


                    <x-jet-dropdown-link href="{{ route('admin.index') }}">
                        Administrador
                    </x-jet-dropdown-link>

                    
                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-jet-dropdown-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-jet-dropdown-link>
                    @endif

                    <div class="border-t border-gray-100"></div>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                 @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-jet-dropdown-link>
                    </form>
                </x-slot>
               </x-jet-dropdown>

            @else
            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <i class="fa-regular fa-user text-white text-3xl cursor-pointer"></i>
                </x-slot>
                <x-slot name="content">
                    <x-jet-dropdown-link href="{{ route('login') }}">
                        {{ __('Login') }}
                    </x-jet-dropdown-link>

                    

                    <x-jet-dropdown-link href="{{ route('register') }}">
                        {{ __('Register') }}
                    </x-jet-dropdown-link>
                </x-slot>
            </x-jet-dropdown>
            @endAuth

        </div>

        <div class="hidden md:block">
            @livewire('dropdown-cart')

        </div>
    </div>
    <nav id="navigation-menu"
        x-show="open"
        :class="{'block': open, 'hidden': !open}"
        class="bg-gray-700 bg-opacity-25 w-full absolute hidden">
        {{-- menu computadora --}}
        <div class="container h-full hidden md:block">
            <div 
                x-on:click.away=" close()"
                class="grid grid-cols-4 h-full relative">
                <ul class="bg-white">
                    @foreach ($categorias as $categoria)
                        <li class="text-gray-500 hover:bg-pink-300 hover:text-white">
                            <a href="{{route('categorias.show', $categoria)}}" class="py-2 px-4 text-sm flex items-center">
                                <span class="flex justify-center w-9">
                                    {!!$categoria->Icon!!}

                                </span>
                            
                                {{$categoria ->Nombre_categoria}}
                            
                            </a>
                            
                            <div class="bg-red-400 absolute w-3/4 h-full top-0 right-0">

                            </div>

                        </li>
                    @endforeach

                </ul>
                <div class="col-span-3 bg-gray-100">

                </div>

            </div>

        </div>
        {{-- menu mobil --}}
        <div class="bg-white h-full overflow-y-auto">

            <div class="container bg-gray-200 py-3 mb-2">
                @livewire('search')

            </div>

            <ul>
                @foreach ($categorias as $categoria)
                <li class="text-gray-500 hover:bg-pink-300 hover:text-white">
                    <a href="{{route('categorias.show', $categoria)}}" class="py-2 px-4 text-sm flex items-center">

                        <span class="flex justify-center w-9">
                            {!!$categoria->Icon!!}

                        </span>
                    
                        {{$categoria ->Nombre_categoria}}
                    
                    </a>
                @endforeach
            </ul>

            <p class="text-gray-500 px-6 my-2">USUARIOS</p>

            @livewire('cart-mobil')

            @auth
            <a href="{{ route('profile.show') }}" class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-pink-300 hover:text-white">

                <span class="flex justify-center w-9">
                    <i class="fa-solid fa-address-card"></i>

                </span>
            
                Perfil
            
            </a>
            <a href="" 
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit()"
                class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-pink-300 hover:text-white">

                <span class="flex justify-center w-9">
                    <i class="fa-solid fa-right-from-bracket"></i>

                </span>
            
                Cerrar sesión
            
            </a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" class="hidden">
                @csrf
            </form>

            @else
            <a href="{{ route('login') }}" class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-pink-300 hover:text-white">

                <span class="flex justify-center w-9">
                    <i class="fa-solid fa-user"></i>

                </span>
            
                Iniciar Sesión
            
            </a>

            <a href="{{ route('register') }}" class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-pink-300 hover:text-white">

                <span class="flex justify-center w-9">
                    <i class="fa-solid fa-fingerprint"></i>

                </span>
            
                Registrarse
            
            </a>

            @endauth
        </div>
    </nav>
</header>


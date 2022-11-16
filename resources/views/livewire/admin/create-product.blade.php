
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 text-gray-700">

    <h1 class="text-3xl text-center font-semibold mb-8">Complete esta informacion para crear un producto</h1>
    

    <div class="grid grid-cols-2 gap-6 mb-4">

        {{-- Categoria --}}

        <div>
            <x-jet-label value="Categorias" />
            <select class="w-full form-control" wire:model="categorias_id" >
                <option value="" selected disabled>Seleccione una categoria</option>
            
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->Nombre_categoria}}</option>
                @endforeach
            </select>
            <x-jet-input-error for = "categorias_id"/>
        </div>
        
        <div>
            <x-jet-label value="Presentacion"/>
            <select class="w-full form-control" 
                    wire:model=presentaciones_id>
                <option value="" selected disabled>Seleccione una Presentacion</option>
            
                @foreach ($presentaciones as $presentacion)
                    <option value="{{$presentacion->id}}">{{$presentacion->Nombre_presentacion}}</option>
                @endforeach
            </select>
            <x-jet-input-error for = "presentaciones_id"/>
        </div>
        <div>
            <x-jet-label value="Sabor de masa"/>
            <select class="w-full form-control" 
                    wire:model="sabor_masas_id">
                <option value="" selected disabled>Seleccione el sabor de la masa</option>
            
                @foreach ($sabor_masas as $sabor_masa)
                    <option value="{{$sabor_masa->id}}">{{$sabor_masa->Nombre_sabor_masas}}</option>
                @endforeach
            </select>
            <x-jet-input-error for = "sabor_masas_id"/>
        </div>
        <div>
            <x-jet-label value="Relleno sabor"/>
            <select class="w-full form-control" 
                    wire:model="relleno_sabores_id">
                <option value="" selected disabled>Seleccione el Sabor del relleno</option>
            
                @foreach ($relleno_sabores as $relleno_sabor)
                    <option value="{{$relleno_sabor->id}}">{{$relleno_sabor->Nombre_relleno_sabor}}</option>
                @endforeach
            </select>
            <x-jet-input-error for = "relleno_sabores_id"/>
        </div>
        <div>
            <x-jet-label value="Decoracion"/>
            <select class="w-full form-control" 
                    wire:model="decoraciones_id">
                <option value="" selected disabled>Seleccione una Decoracion</option>
            
                @foreach ($decoraciones as $decoracion)
                    <option value="{{$decoracion->id}}">{{$decoracion->Nombre_decoracion}}</option>
                @endforeach
            </select>
            <x-jet-input-error for = "decoraciones_id"/>
        </div>
    </div>

    {{-- Nombre --}}

    <div class="mb-4">
        <x-jet-label value="Nombre" />
        <x-jet-input type="text" 
                class="w-full"
                wire:model="name" 
                placeholder="Ingrese el nombre del producto" />
    </div>


    {{-- slug --}}
    <div class="mb-4">
        <x-jet-label value="Slug" />
        <x-jet-input type="text"
                disabled 
                wire:model="slug" 
                class="w-full bg-gray-400" 
                placeholder="Ingrese el slug del producto" />
    </div>

    <div>

        <x-jet-label value="Precio" />
        <x-jet-input
                wire:model="price" 
                type="text" 
                class="w-full" 
                step=".01" />
            <x-jet-input-error for = "price"/>
    </div>

    <div>

        <x-jet-label value="Stock" />
        <x-jet-input
                wire:model="Stock" 
                type="text" 
                class="w-full" 
                step=".01" />
            <x-jet-input-error for = "Stock"/>
    </div>

    <div class="flex mt-4">
        <x-jet-button
            wire:loading.attr="disabled"
            wire:target="save"
            wire:click="save"
            wire:model="producto"
            class="ml-auto">
            Crear Producto
        </x-jet-button>
    </div>
</div>

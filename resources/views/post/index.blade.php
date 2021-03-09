<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('includes.search')
            <h3>Os desafios criados por você:</h3>
            <div class="mr-2">
                @include('post')
            </div>
        </div>
        
    </div>
</x-app-layout>

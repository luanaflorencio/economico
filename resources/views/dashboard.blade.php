<x-app-layout>
    
    
    <x-slot name="header">
       
        
    </x-slot>

    <div class="py-0,5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h4>Veja os desafios de seus amigos:</h4>

                    @foreach($post as $posts)
                    <p>{{ $posts->challenge }}</p>
                    @endforeach
                </div>
            </div>
        </div>
        
    </div>
</x-app-layout>

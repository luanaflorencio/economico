<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        @foreach($post as $posts)
            <div class="p-3 border mt-4">
                {{ $posts->challenge }}
            </div>
        @endforeach
        
    </div>

   
</div>
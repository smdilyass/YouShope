<div>
    <!-- Slider Container -->
    <div class="relative">
        <!-- Current Image -->
        <img src="{{ asset($product->images[$currentIndex]->path) }}" alt="Product Image" class="w-full h-48 object-cover">

        <!-- Featured Badge -->
        @if ($product->images[$currentIndex]->featured)
            <span class="absolute top-2 right-2 bg-yellow-500 text-white px-2 py-1 text-xs rounded">Featured</span>
        @endif

        <!-- Navigation Buttons -->
        <button class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-white bg-opacity-75 p-2 rounded-full shadow-md" wire:click="previous">
            &larr;
        </button>
        <button class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-white bg-opacity-75 p-2 rounded-full shadow-md" wire:click="next">
            &rarr;
        </button>
    </div>

    <!-- Pagination Dots -->
    <div class="flex justify-center mt-2 space-x-2">
        @foreach ($product->images as $index => $image)
            <button class="w-2 h-2 rounded-full {{ $index === $currentIndex ? 'bg-blue-500' : 'bg-gray-300' }}" wire:click="$set('currentIndex', {{ $index }})"></button>
        @endforeach
    </div>
</div>
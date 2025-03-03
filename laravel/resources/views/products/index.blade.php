<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">Product List</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($products as $product)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <!-- Product Images Slider -->
                    @livewire('product-slider', ['product' => $product], key($product->id))

                    <!-- Product Details -->
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                        <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                        <p class="text-lg font-bold text-blue-600">${{ number_format($product->price / 100, 2) }}</p>

                        <!-- Variants -->
                        <div class="mt-4">
                            <h3 class="text-lg font-semibold mb-2">Variants</h3>

                            <!-- Color Dropdown -->
                            <div class="mb-3">
                                <label for="color-{{ $product->id }}" class="block text-sm font-medium text-gray-700">Color</label>
                                <select id="color-{{ $product->id }}" name="color" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                    <option value="">Select Color</option>
                                    @foreach ($product->variants->unique('color') as $variant)
                                        <option value="{{ $variant->color }}">{{ $variant->color }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Size Dropdown -->
                            <div class="mb-4">
                                <label for="size-{{ $product->id }}" class="block text-sm font-medium text-gray-700">Size</label>
                                <select id="size-{{ $product->id }}" name="size" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                    <option value="">Select Size</option>
                                    @foreach ($product->variants->unique('size') as $variant)
                                        <option value="{{ $variant->size }}">{{ $variant->size }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @livewireScripts
</body>
</html>
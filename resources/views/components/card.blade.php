<li class="max-h-[500px] h-[500px] flex flex-col relative hover:scale-[1.02] rounded-xl transition duration-300">
    <a href="{{ route('products.detail', ['id' => $product->id]) }}" class="flex flex-col">
        <img src="{{ url('storage', $product->image) }}" alt="" class="h-[100%] max-h-[300px] rounded-t-xl">
        <div class="absolute left-[15px] top-[15px] flex gap-2">
            <span class="px-[20px] py-[5px] border border-[#000] rounded-full bg-white">{{ $product->category->name }}</span>
            @if ($product->is_new == true)
                <span class="px-[20px] py-[5px] text-white rounded-full bg-red-600">Новинка</span>
            @endif
        </div>
        <div class="p-[15px] max-h-[200px] h-[200px] justify-between flex flex-col rounded-b-xl">
            <div class="mb-[10px]">
                <h3 class="text-[20px] font-semibold mb-[10px]">{{ $product->name }}</h3>
                <p class="font-normal text-[16px]">{{ Str::limit($product->description, '60') }}</p>
            </div>
            @auth
                <button class="bg-[#FF6767] text-[#fff] py-[15px] w-full rounded-2xl text-2xl">
                    {{ $product->price }} ₽
                </button>
                @else
                <a href="{{ route('login') }}" class="flex justify-center align-center bg-[#FF6767] text-[#fff] py-[15px] w-full rounded-2xl">
                    Добавить в корзину
                </a>
            @endauth
        </div>
    </a>
</li>

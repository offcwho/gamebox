<x-app-layout>
    <x-container>
        <div class="grid grid-cols-2 py-[50px] gap-[50px]">
            <img src="{{ url('storage', $product->image) }}" alt="" class="w-full max-h-[750px] rounded-3xl">
            <div class="">
                <div class="flex flex-col gap-6">
                    <div class="">
                        <h2 class="text-4xl font-semibold mb-[30px]">{{ $product->name }}</h2>
                        <p class="py-[20px] px-[15px] bg-[#f7f7f7] rounded-2xl font-medium">{{ $product->description }}</p>
                    </div>
                    <div class="flex gap-5">
                        <span class="w-full text-2xl font-semibold py-[20px] px-[15px] bg-[#f7f7f7] rounded-2xl">{{ $product->price }} ₽</span>
                        @auth
                            <livewire:components.cart-button :id="$product->id"/>
                            @else
                            <a href="{{ route('login') }}" class="flex items-center justify-center py-[15px] px-[15px] w-[150px] text-xl bg-[#FF6767] text-white rounded-2xl">Купить</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</x-app-layout>

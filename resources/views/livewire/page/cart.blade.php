<div class="py-[50px]">
    @if($orders->isNotEmpty())
        <div class="mt-[20px]">
            <h2 class="text-3xl mb-[10px]">Заказы</h2>
            <div class="swiper mySwiper">
                <ul class="swiper-wrapper">
                    @foreach ($orders as $order)
                        <li class='p-4 bg-slate-200 rounded-xl swiper-slide'>
                            <img src="{{ url('storage', $order->product->image) }}" alt="" class="h-[300px] rounded-xl mb-[20px]">
                            <div class="">
                                <h3 class="text-2xl font-medium">{{ $order->product->name }}</h3>
                                <p class="text-md">{{ $order->product->description }}</p>
                                <span class="text-lg">{{ $order->product->price }}₽</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="flex gap-4 items-start mt-[20px]">
        <ul class="flex w-full flex-col gap-4">
            @foreach ($carts as $cart)
                <li class="w-full flex rounded-xl px-[16px] py-[12px] hover:bg-slate-50 transition duration-300">
                    <a href="{{ route('products.detail', ['id' => $cart->product->id]) }}" class="flex w-full justify-between items-center">
                        <div class="flex gap-[20px] w-full ">
                            <img src="{{ url('storage', $cart->product->image) }}" class="w-[150px] h-full rounded-[12px]" alt="">
                            <div class="flex flex-col justify-between">
                                <h3 class="text-3xl font-semibold">{{$cart->product->name}}</h3>
                                <p class="text-xl text-[#59595A] mb-[15px]">{{ $cart->product->description}}</p>
                                <span class="text-2xl mb-3">{{ $cart->product->price }}₽</span>
                                <livewire:components.delete-button :id="$cart->id"/>
                            </div>
                        </div>

                    </a>
                </li>
            @endforeach
        </ul>
        <div class="w-[400px] p-[25px] bg-slate-50 rounded-md">
            <h2 class="text-gray-700 text-[20px] mb-[12px]">Общая стоимость: {{ $sum }}₽</h2>
            <livewire:components.button :sum="$sum"/>
        </div>
    </div>
</div>

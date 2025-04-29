<header>
    <x-container>
        <div class="flex w-full py-[25px] items-center">
            <img src="{{ url('img/logo.png') }}" alt="" class="h-[50px]">
            <ul class="mx-auto flex gap-[50px]">
                <li>
                    <a href="/">
                        Главная
                    </a>
                </li>
                <li>
                    <a href="{{ route('catalog') }}">
                        Каталог
                    </a>
                </li>
            </ul>
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/cart') }}"
                            class="inline-block py-[12px] text-[#1b1b18] rounded-sm text-sm leading-normal"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                <circle cx="8" cy="21" r="1"/>
                                <circle cx="19" cy="21" r="1"/>
                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/>
                            </svg>
                        </a>
                    @else
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-[50px] py-[14px] border border-black rounded-full">
                                Зарегистрироваться
                            </a>
                        @endif
                        <a href="{{ route('login') }}" class="px-[50px] py-[14px] border border-black rounded-full">
                            Войти
                        </a>
                    @endauth
                </nav>
            @endif
        </div>
    </x-container>
</header>

<x-container>
    <div class="py-[50px] flex flex-col">
        <h1 class="text-center text-[42px] font-semibold mb-[50px]">Каталог</h1>
        <livewire:card-list :limit="4"/>
        <a href="{{ route('catalog') }}" class="py-[20px] px-[50px] bg-black w-fit mx-auto text-white rounded-2xl mt-[30px]">Показать еще..</a>
    </div>
</x-container>

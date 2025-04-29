<div class="flex flex-col">
    <ul class="grid grid-cols-4 gap-x-[40px] gap-y-[50px]">
        @if ($products->isNotEmpty())
            @foreach ($products as $product)
                <x-card :product="$product"/>
            @endforeach
        @endif
    </ul>
</div>

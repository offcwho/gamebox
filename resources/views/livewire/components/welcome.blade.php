<div class="h-[calc(100vh-100px)]">
    <x-container>
        <div class="flex w-full items-center gap-[20px]">
            <div class="max-w-[600px] flex flex-col h-full justify-center">
                <h1 class="text-4xl font-semibold mb-10">{{ $data->title }}</h1>
                <div class="text-lg flex flex-col gap-4 mb-12">
                    {!! $data->description !!}
                </div>
                <button class="w-full bg-[#FF6767] py-[14px] text-white rounded-xl">{{ $data->buttonText }}</button>
            </div>
            <img src="{{ url('storage', $data->image) }}" alt="" class="max-w-[820px] w-full">
        </div>
    </x-container>
</div>

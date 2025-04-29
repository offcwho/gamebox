<form wire:submit='buy' >
    <div class="grid grid-cols-3 gap-4 mt-12">
        <div class="flex flex-col">
            <label for="surname" class="ml-[5px]">Фамилия</label>
            <input type="text" wire:model.defer='form.surname' id="surname" placeholder="Иванов" class="rounded-xl ">
            @error('form.surname')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="name" class="ml-[5px]">Имя</label>
            <input type="text" wire:model.defer='form.name' id="name" placeholder="Иван" class="rounded-xl ">
            @error('form.name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="lastname" class="ml-[5px]">Отчество</label>
            <input type="text" wire:model.defer='form.lastname' id="lastname" placeholder="Иванович" class="rounded-xl ">
            @error('form.lastname')
                <span>{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="grid grid-cols-2 gap-8 mt-8">
        <div class="flex flex-col">
            <label for="phone">Телефон</label>
            <input type="text" wire:model.defer='form.phone' id="phone" placeholder="+7(999)-999-99-99" class="rounded-xl">
            @error('form.phone')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="index">Индекс</label>
            <input type="text" wire:model.defer='form.index' id="index" placeholder="Индекс" class="rounded-xl">
            @error('form.index')
                <span>{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mt-5">
        <div class="flex gap-2">
            <input type="checkbox" id="pay">
            <label for="pay">Оплата при получении</label>
        </div>
        <button type='submit' class="mt-7 w-full py-[12px] bg-[#FF6767] text-white rounded-xl">
            Оформить
        </button>
    </div>
</form>

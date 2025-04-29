<div class="">
    <button id="button" {{ $type }} class="w-full rounded-lg bg-[#FF6767] py-[12px] text-white">
        Оформить заказ
    </button>
    <div class="absolute flex justify-center items-center w-[100%] h-[100%] left-0 top-0 z-[9999] invisible" id="modal">
        <div class="bg-black opacity-50 w-full h-full absolute" id="click"></div>
        <div class="w-[50%] h-[75%] bg-white z-[9999] rounded-xl flex flex-col">
            <div class="p-[20px] py-[25px] flex justify-between">
                <h2 class="text-2xl font-semibold">Оформление заказа</h2>
                <button class="text-black" id='close'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x-icon lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
            </div>
            <div class="w-full h-full px-[20px]">
                <livewire:components.modal />
            </div>
        </div>
    </div>
</div>

<script>
    const button = document.getElementById('button')
    const modal = document.getElementById('modal')
    const close = document.getElementById('close')
    const click = document.getElementById('click')

    button.addEventListener('click', () => {
        modal.classList.toggle('invisible')
    })

    close.addEventListener('click', () => {
        modal.classList.toggle('invisible')
    })

    click.addEventListener('click', () => {
        modal.classList.toggle('invisible')
    })
</script>

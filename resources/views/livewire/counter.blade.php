<div class="p-6">
    <div>
        <p class="text-3xl">{{ $count }}</p>
        <button
            wire:click="increment"
            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mt-2">
            Button
        </button>
    </div>
    <hr class="my-8">
    <div>    
        <input type="text" wire:model.live="username">
        <p class="text-3xl">{{ $username }}</p>
    </div>
</div>

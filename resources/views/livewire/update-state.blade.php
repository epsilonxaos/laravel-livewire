<div>
    <button
        class="{{ $status == 1 ? 'bg-blue-500' : 'bg-green-500 hover:bg-green-700' }} text-white font-bold p-2 rounded m-1"
        wire:click="changestatus(1)">Dispo</button>
    <button
        class="{{ $status == 2 ? 'bg-blue-500' : 'bg-yellow-500 hover:bg-yellow-700' }} text-white font-bold p-2 rounded m-1"
        wire:click="changestatus(2)">Apart</button>
    <button class="bg-red-500 hover:bg-red-700 text-white font-bold p-2 rounded m-1"
        wire:click="changestatus(3)">Vendi</button>
</div>

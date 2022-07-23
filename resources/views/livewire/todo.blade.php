<div class="flex justify-center">
    <div class="bg-white w-1/2 mt-16 p-5 rounded-lg border border-gray-300">
        <div class="grid grid-cols-12 gap-4">
            
            <div class="col-span-10">
                <input type="text" id="task" class="w-full text-lg p-2 border border-gray-300" wire:model="task">
            </div>
            <div class="col-span-2">
                <button id="submit" class="bg-green-600 hover:bg-green-300 hover:text-black w-full text-white font-semibold text-lg p-2 rounded" wire:click="submit">Submit</submit>
            </div>

            @if(count($tasks) > 0)
                @foreach($tasks as $key => $task)
                    <div class="col-span-12 border border-gray-300 p-2 rounded grid grid-cols-12">
                        <div class="col-span-11">{{ $task['title']; }}<br><small><i>{{ $task['time']; }}</i></small></div>
                        <div class="col-span-1 text-center">
                            <button wire:click="done('{{ $key }}')" class="bg-green-600 hover:bg-green-300 text-white hover:text-black font-semibold rounded px-2 py-1 border border-gray-300">x</button>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
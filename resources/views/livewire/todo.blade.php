<div class="flex justify-center">
    <div class="bg-white w-1/2 mt-16 p-5 rounded-lg border border-gray-300 shadow-lg">
        <form wire:submit.prevent="save">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-11">
                    <input type="text" id="title" class="w-full text-lg p-2 border border-gray-300" wire:model="title">
                    @error('title') <span class="text-sm text-red-700">{{ $message }}</span> @enderror
                </div>
                <div class="col-span-1 text-right">
                    <button id="submit" type="submit" class="bg-blue-400 hover:bg-blue-600 w-full text-white font-semibold text-lg p-2 rounded-full w-11 h-11">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                    </submit>
                </div>

                @if(count($tasks) > 0)
                    @foreach($tasks as $key => $task)
                        <div class="col-span-12 border border-gray-300 p-2 rounded grid grid-cols-12 shadow-md">
                            <div class="col-span-11 text-xl">{{ $task['title']; }}<br><small class="text-xs"><i>{{ $task['created_at']; }}</i></small></div>
                            <div class="col-span-1 text-right">
                                <button type="button" wire:click="delete('{{ $task['id'] }}')" class="bg-green-300 hover:bg-green-600 w-full text-white font-semibold text-lg p-2 rounded-full w-8 h-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </form>
    </div>
</div>
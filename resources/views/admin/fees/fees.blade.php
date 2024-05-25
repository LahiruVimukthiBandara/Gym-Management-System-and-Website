<x-admin-layout>
    <div class="px-[8%] py-[1%] flex flex-col">
        {{-- Create user links --}}
        <div class=" mb-5">
            <button wire:navigate href="{{ route('fees.create') }}"
                class="flex gap-3 px-6 py-3 capitalize text-white font-semibold rounded-full bg-green-500 hover:bg-green-400 transition-all ease-in-out duration-100">
                 Member fees
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24">
                    <path d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z"
                        fill="currentColor"></path>
                </svg>
            </button>
        </div>

        {{-- Fes table --}}
        <livewire:fees-table>
    </div>
</x-admin-layout>

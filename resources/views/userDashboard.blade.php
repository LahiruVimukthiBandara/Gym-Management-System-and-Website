<x-user-layout>
    <div class="px-[8%] py-[1%] w-full">
        {{-- Buttons and links --}}
        <div class="flex w-full justify-end items-center gap-6">
            <button wire:navigate href="{{ route('profile.edit') }}"
                class="px-10 py-3 flex gap-4 capitalize text-white font-semibold rounded-full bg-blue-700 hover:bg-blue-600 transition-all ease-in-out duration-100">
                Edit Profile
            </button>
        </div>

        {{-- Content --}}
        <div class="flex flex-col py-[5%] gap-3">
            This is the dashboard
        </div>

    </div>
</x-user-layout>

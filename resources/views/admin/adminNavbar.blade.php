<div class="w-full">
    <div class="px-[8%] pt-[1%] flex justify-between items-center">
        {{-- Logo --}}
        <div class="flex items-center">
            <a wire:navigate href="{{ route('admin.dashboard') }}">
                <h1 class="text-3xl font-sans font-bold uppercase text-blue-700"> Gym </h1>
            </a>
        </div>

        {{-- Navigations --}}
        <div>
            <ul class="flex gap-6 items-center">
                <a wire:navigate href="{{ route('admin.dashboard') }}" class="">
                    <li class="capitalize"> dashboard </li>
                </a>
                <a wire:navigate href="{{ route('user.index') }}" class="">
                    <li class="capitalize"> members </li>
                </a>
                <a wire:navigate href="{{ route('shadule.index') }}">
                    <li class="capitalize"> shadules </li>
                </a>
                <a wire:navigate href="{{ route('fees.index') }}">
                    <li class="capitalize"> fees </li>
                </a>
            </ul>
        </div>

        {{-- Logout --}}
        <div>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit"
                    class="px-6 py-3 capitalize text-white font-semibold rounded-full bg-blue-700 hover:bg-blue-600 transition-all ease-in-out duration-100"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    logout
                </button>
            </form>
        </div>
    </div>
    <div class="divider px-[8%]"></div>
</div>

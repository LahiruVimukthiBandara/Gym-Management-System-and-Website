<div class="w-full">
    <div class="md:px-[8%] px-[8%] pt-[1%] flex justify-between items-center">
        {{-- Logo --}}
        <div class="flex items-center">
            <a wire:navigate href="/">
                <h1 class="md:text-3xl font-sans font-bold uppercase text-blue-700"> Gym </h1>
            </a>
        </div>

        {{-- Navigations --}}
        <div
            class="navLinks duration-150 transition-all md:static absolute md:min-h-fit min-h-[60vh] md:w-auto w-full top-[-100%] bg-white dark:bg-[#111111] bg-transparent left-0">
            <ul class="flex flex-col md:flex-row md:gap-6 gap-3 items-center dark:text-white text-[#202020] bg-transparent text-sm">
                <a wire:navigate href="/">
                    <li> Home </li>
                </a>
                <hr class="md:hidden h-[1px] w-[80%]" />
                <a wire:navigate href="/about">
                    <li> About </li>
                </a>
                <hr class="md:hidden h-[1px] w-[80%]" />
                <a wire:navigate href="/service">
                    <li> Services </li>
                </a>
                <hr class="md:hidden h-[1px] w-[80%]" />
                <a wire:navigate href="/contact">
                    <li> Contact </li>
                </a>
                <hr class="md:hidden h-[1px] w-[80%]" />
            </ul>
        </div>

        {{-- Profile and logout btn --}}
        <div class="flex gap-3 items-center">

            <input type="checkbox" value="synthwave"
                class="toggle theme-controller bg-blue-700 border-gray-700 [--tglbg:theme(colors.gray.50)] checked:bg-white checked:border-blue-700 checked:[--tglbg:theme(colors.blue.700)] row-start-1 col-start-1 col-span-2 theme-switch" />

            {{-- Login --}}
            @guest
                <div>
                    <button wire:navigate href="login"
                        class="py-2 md:px-6 px-4 md:text-sm text-xs text-white font-semibold rounded-full bg-blue-700 hover:bg-blue-600 transition-all ease-in-out duration-100">
                        Login </button>
                </div>
            @endguest
            {{-- Profile --}}
            @auth

                <div class="dropdown">
                    <div tabindex="0" role="button" class="flex items-center gap-3">

                        <div class="avatar online">
                            <div class="w-12 rounded-full">
                                <img class="object-cover object-top" src="{{ Auth::user()->image ?? '1.jpg' }}" />
                            </div>
                        </div>
                        <div class=" capitalize text-lg">{{ Auth::user()->name }}</div>

                    </div>
                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a wire:navigate href="/dashboard"> Profile </a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    onclick="event.preventDefault();
                            this.closest('form').submit();">logout</button>

                            </form>
                        </li>
                    </ul>
                </div>
            @endauth

            {{-- Toggel icons --}}
            <ion-icon class="w-8 h-8 md:hidden" onclick="onToggleMenu(this)" name="menu-outline"></ion-icon>
        </div>

    </div>
    <div class="divider px-[8%]"></div>
</div>

<script>
    const themeSwitch = () => {
        if (document.documentElement.classList.contains('light')) {
            document.documentElement.classList.remove('light');
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            document.documentElement.classList.add('light');
            localStorage.setItem('theme', 'light');
        }
    }

    const themeSwitchInput = document.querySelector('.theme-switch');
    themeSwitchInput.addEventListener("change", () => {
        themeSwitch();
    });

    window.addEventListener('DOMContentLoaded', () => {
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            document.documentElement.classList.add(savedTheme);
        }
    });


    // Navbar toggel
    function onToggleMenu(e) {
        const navLinks = document.querySelector('.navLinks');
        e.name = e.name === "menu-outline" ? "close-outline" : "menu-outline";
        navLinks.classList.toggle('top-[10%]');
    }
</script>

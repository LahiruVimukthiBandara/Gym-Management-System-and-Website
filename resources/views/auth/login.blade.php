<x-user-layout>

    <div class="px-[8%] py-[8%] flex flex-col items-center justify-center relative">

        {{-- Login form --}}
        <form method="POST" action="{{ route('login') }}" class="p-8 rounded-xl shadow-lg w-[450px] bg-white">
            @csrf

            {{-- Form heading --}}
            <div class="flex flex-col items-center justify-center mb-8">
                <h1 class="text-3xl text-blue-700 font-bold font-poppins">GYM</h1>
                <h1 class="text-lg text-gray-600">Login to your account</h1>
            </div>


            <div class="grid grid-rows-3 w-full">
                {{-- Row one --}}
                <div class="grid grid-cols-1 gap-3 w-full">
                    {{-- Email --}}
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text capitalize"> your email </span>
                        </div>
                        <input type="email" name="email" id="email" placeholder="Type here"
                            class="input input-bordered w-full" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </label>
                </div>

                {{-- Row two --}}
                <div class="grid grid-cols-1 w-full">
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text capitalize"> your password </span>
                        </div>
                        <input type="password" name="password" id="password" placeholder="Type here"
                            class="input input-bordered w-full" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </label>
                </div>

                {{-- Row three --}}
                <div class="grid grid-cols-1 w-full">
                    {{-- Submit button --}}
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <input type="checkbox" name="remember_me" id="remember_me" class="rounded h-8"> Rember me
                        </div>

                        <div>
                            <button type="submit"
                                class="px-10 py-3 flex gap-4 capitalize text-white font-semibold rounded-full bg-blue-700 hover:bg-blue-600 transition-all ease-in-out duration-100">
                                Log In
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 1024 1024">
                                    <defs></defs>
                                    <path
                                        d="M521.7 82c-152.5-.4-286.7 78.5-363.4 197.7c-3.4 5.3.4 12.3 6.7 12.3h70.3c4.8 0 9.3-2.1 12.3-5.8c7-8.5 14.5-16.7 22.4-24.5c32.6-32.5 70.5-58.1 112.7-75.9c43.6-18.4 90-27.8 137.9-27.8c47.9 0 94.3 9.3 137.9 27.8c42.2 17.8 80.1 43.4 112.7 75.9c32.6 32.5 58.1 70.4 76 112.5C865.7 417.8 875 464.1 875 512c0 47.9-9.4 94.2-27.8 137.8c-17.8 42.1-43.4 80-76 112.5s-70.5 58.1-112.7 75.9A352.8 352.8 0 0 1 520.6 866c-47.9 0-94.3-9.4-137.9-27.8A353.84 353.84 0 0 1 270 762.3c-7.9-7.9-15.3-16.1-22.4-24.5c-3-3.7-7.6-5.8-12.3-5.8H165c-6.3 0-10.2 7-6.7 12.3C234.9 863.2 368.5 942 520.6 942c236.2 0 428-190.1 430.4-425.6C953.4 277.1 761.3 82.6 521.7 82zM395.02 624v-76h-314c-4.4 0-8-3.6-8-8v-56c0-4.4 3.6-8 8-8h314v-76c0-6.7 7.8-10.5 13-6.3l141.9 112a8 8 0 0 1 0 12.6l-141.9 112c-5.2 4.1-13 .4-13-6.3z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </form>

        <div class="w-[500px] h-[500px] rounded-full bg-blue-500 absolute -z-10 opacity-35 blur-3xl"></div>
    </div>
</x-user-layout>

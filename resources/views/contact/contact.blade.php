<x-app-layout>
    <div class="md:px-[8%] px-[3%] py-[1%] flex flex-col">

        {{-- Heading --}}
        <div class=" flex flex-col w-full items-center justify-center">
            <h3 class="text-base font-semibold text-gray-500 dark:text-gray-300 capitalize"> contact anytime </h3>
            <h1 class="md:text-4xl text-4xl font-extrabold capitalize text-[#202020] dark:text-white"> Contact us </h1>
            <div class="h-[5px] w-[100px] rounded-full bg-yellow-500 mt-3"></div>
        </div>

        {{-- map --}}
        <div class="flex py-[5%] justify-center items-center md:relative ">
            <iframe class="w-full h-[350px] border-none"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15275.119315232501!2d80.43802138651425!3d7.2493023699320185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae314a847d98a41%3A0x4b8862fe2194f28b!2sMawanella!5e1!3m2!1sen!2slk!4v1714652655352!5m2!1sen!2slk"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        {{-- Heading --}}
        <div class=" flex flex-col w-full items-center justify-center mt-8 md:mt-0">
            <h3 class="text-base font-semibold text-gray-500 dark:text-gray-300 capitalize"> you are important </h3>
            <h1 class="md:text-4xl text-3xl font-extrabold capitalize text-[#202020] dark:text-white"> send your message
            </h1>
            <div class="h-[5px] w-[100px] rounded-full bg-yellow-500 mt-3"></div>
        </div>

        <div class="grid md:grid-cols-2 grid-cols-1 gap-6 py-[5%] items-center">
            {{-- Col 01 --}}
            <div class="flex flex-col gap-3">
                {{-- Address --}}
                <div>
                    <div class="flex gap-3 items-center">
                        <svg class="h-6 w-6 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                            <path
                                d="M16 18a5 5 0 1 1 5-5a5.006 5.006 0 0 1-5 5zm0-8a3 3 0 1 0 3 3a3.003 3.003 0 0 0-3-3z"
                                fill="currentColor"></path>
                            <path
                                d="M16 30l-8.436-9.949a35.076 35.076 0 0 1-.348-.451A10.889 10.889 0 0 1 5 13a11 11 0 0 1 22 0a10.884 10.884 0 0 1-2.215 6.597l-.001.003s-.3.394-.345.447zM8.812 18.395c.002 0 .234.308.287.374L16 26.908l6.91-8.15c.044-.055.278-.365.279-.366A8.901 8.901 0 0 0 25 13a9 9 0 1 0-18 0a8.905 8.905 0 0 0 1.813 5.395z"
                                fill="currentColor"></path>
                        </svg>
                        <h1 class="text-xl font-bold text-[#202020] dark:text-white"> Address </h1>
                    </div>
                    <div class="pl-10 text-gray-500 dark:text-gray-300">
                        <p> H/191/1, Udayamawatha, Mawela, Hingula, Mawanella. </p>
                    </div>
                </div>
                {{-- email --}}
                <div>
                    <div class="flex gap-3 items-center">
                        <svg class="h-6 w-6 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                            <path
                                d="M28 6H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2zm-2.2 2L16 14.78L6.2 8zM4 24V8.91l11.43 7.91a1 1 0 0 0 1.14 0L28 8.91V24z"
                                fill="currentColor"></path>
                        </svg>

                        <h1 class="text-xl font-bold text-[#202020] dark:text-white"> Email </h1>
                    </div>
                    <div class="pl-10 text-gray-500 dark:text-gray-300">
                        <p> lahiruv85@gmail.com </p>
                    </div>
                </div>
                {{-- Contact no --}}
                <div>
                    <div class="flex gap-3 items-center">
                        <svg class="h-6 w-6 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                            <path
                                d="M26 29h-.17C6.18 27.87 3.39 11.29 3 6.23A3 3 0 0 1 5.76 3h5.51a2 2 0 0 1 1.86 1.26L14.65 8a2 2 0 0 1-.44 2.16l-2.13 2.15a9.37 9.37 0 0 0 7.58 7.6l2.17-2.15a2 2 0 0 1 2.17-.41l3.77 1.51A2 2 0 0 1 29 20.72V26a3 3 0 0 1-3 3zM6 5a1 1 0 0 0-1 1v.08C5.46 12 8.41 26 25.94 27a1 1 0 0 0 1.06-.94v-5.34l-3.77-1.51l-2.87 2.85l-.48-.06c-8.7-1.09-9.88-9.79-9.88-9.88l-.06-.48l2.84-2.87L11.28 5z"
                                fill="currentColor"></path>
                        </svg>

                        <h1 class="text-xl font-bold text-[#202020] dark:text-white"> Contact Number </h1>
                    </div>
                    <div class="pl-10 text-gray-500 dark:text-gray-300">
                        <p> 077 0458 067 </p>
                    </div>
                </div>

                {{-- Contact no --}}
                <div>
                    <div class="flex gap-3 items-center">
                        <svg class="h-6 w-6 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24">
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8s8 3.58 8 8s-3.58 8-8 8z"
                                fill="currentColor"></path>
                            <path d="M12.5 7H11v6l5.25 3.15l.75-1.23l-4.5-2.67z" fill="currentColor"></path>
                        </svg>

                        <h1 class="text-xl font-bold text-[#202020] dark:text-white"> opening hours </h1>
                    </div>
                    <div class="pl-10 text-gray-500 dark:text-gray-300">
                        <p> Mon - Sun 6.00 am to 12.00 am </p>
                    </div>
                </div>
                <div class="flex gap-5 mt-5 pl-10 items-center">
                    {{-- Facebook --}}
                    <a href="#">
                        <svg class="w-6 h-6 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
                            <path
                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48c27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
                                fill="currentColor"></path>
                        </svg>
                    </a>

                    {{-- Youtube --}}
                    <a href="#">
                        <svg class="w-6 h-6 text-red-600 dark:text-red-700" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1024 1024">
                            <path
                                d="M941.3 296.1a112.3 112.3 0 0 0-79.2-79.3C792.2 198 512 198 512 198s-280.2 0-350.1 18.7A112.12 112.12 0 0 0 82.7 296C64 366 64 512 64 512s0 146 18.7 215.9c10.3 38.6 40.7 69 79.2 79.3C231.8 826 512 826 512 826s280.2 0 350.1-18.8c38.6-10.3 68.9-40.7 79.2-79.3C960 658 960 512 960 512s0-146-18.7-215.9zM423 646V378l232 133l-232 135z"
                                fill="currentColor"></path>
                        </svg>
                    </a>

                    {{-- Instergrame --}}
                    <a href="#">
                        <svg class="w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1024 1024">
                            <path
                                d="M512 378.7c-73.4 0-133.3 59.9-133.3 133.3S438.6 645.3 512 645.3S645.3 585.4 645.3 512S585.4 378.7 512 378.7zM911.8 512c0-55.2.5-109.9-2.6-165c-3.1-64-17.7-120.8-64.5-167.6c-46.9-46.9-103.6-61.4-167.6-64.5c-55.2-3.1-109.9-2.6-165-2.6c-55.2 0-109.9-.5-165 2.6c-64 3.1-120.8 17.7-167.6 64.5C132.6 226.3 118.1 283 115 347c-3.1 55.2-2.6 109.9-2.6 165s-.5 109.9 2.6 165c3.1 64 17.7 120.8 64.5 167.6c46.9 46.9 103.6 61.4 167.6 64.5c55.2 3.1 109.9 2.6 165 2.6c55.2 0 109.9.5 165-2.6c64-3.1 120.8-17.7 167.6-64.5c46.9-46.9 61.4-103.6 64.5-167.6c3.2-55.1 2.6-109.8 2.6-165zM512 717.1c-113.5 0-205.1-91.6-205.1-205.1S398.5 306.9 512 306.9S717.1 398.5 717.1 512S625.5 717.1 512 717.1zm213.5-370.7c-26.5 0-47.9-21.4-47.9-47.9s21.4-47.9 47.9-47.9s47.9 21.4 47.9 47.9a47.84 47.84 0 0 1-47.9 47.9z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                    {{-- Tiktok --}}
                    <a href="#">
                        <svg class="w-6 h-6 text-black dark:text-white" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
                            <path
                                d="M412.19 118.66a109.27 109.27 0 0 1-9.45-5.5a132.87 132.87 0 0 1-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14 23.9 350 16 350.13 16h-82.44v318.78c0 4.28 0 8.51-.18 12.69c0 .52-.05 1-.08 1.56c0 .23 0 .47-.05.71v.18a70 70 0 0 1-35.22 55.56a68.8 68.8 0 0 1-34.11 9c-38.41 0-69.54-31.32-69.54-70s31.13-70 69.54-70a68.9 68.9 0 0 1 21.41 3.39l.1-83.94a153.14 153.14 0 0 0-118 34.52a161.79 161.79 0 0 0-35.3 43.53c-3.48 6-16.61 30.11-18.2 69.24c-1 22.21 5.67 45.22 8.85 54.73v.2c2 5.6 9.75 24.71 22.38 40.82A167.53 167.53 0 0 0 115 470.66v-.2l.2.2c39.91 27.12 84.16 25.34 84.16 25.34c7.66-.31 33.32 0 62.46-13.81c32.32-15.31 50.72-38.12 50.72-38.12a158.46 158.46 0 0 0 27.64-45.93c7.46-19.61 9.95-43.13 9.95-52.53V176.49c1 .6 14.32 9.41 14.32 9.41s19.19 12.3 49.13 20.31c21.48 5.7 50.42 6.9 50.42 6.9v-81.84c-10.14 1.1-30.73-2.1-51.81-12.61z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Col 02 --}}
            <div class="relative flex justify-center items-center">
                <form action="" method="POST" class="w-full flex flex-col gap-3 md:p-10 p-3 rounded-xl">

                    @csrf

                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text capitalize text-[#202020] dark:text-white"> your name </span>
                        </div>
                        <input type="text" name="name" id="name" placeholder="Type here"
                            class="input input-bordered w-full bg-transparent text-[#202020] dark:text-white" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </label>

                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text capitalize text-[#202020] dark:text-white"> your email </span>
                        </div>
                        <input type="email" name="email" id="email" placeholder="Type here"
                            class="input input-bordered w-full bg-transparent text-[#202020] dark:text-white" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </label>

                    <label class="form-control">
                        <div class="label">
                            <span class="label-text capitalize text-[#202020] dark:text-white">Your message</span>
                        </div>
                        <textarea class="textarea textarea-bordered h-24 bg-transparent text-[#202020] dark:text-white"
                            placeholder="Your message here..."></textarea>
                    </label>
                    <div class="flex justify-end">
                        <button type="submit"
                            class=" mt-3 px-10 py-3 flex gap-4 capitalize text-white font-semibold rounded-full bg-blue-700 hover:bg-blue-600 transition-all ease-in-out duration-100">
                            Send
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                                <path
                                    d="M27.71 4.29a1 1 0 0 0-1.05-.23l-22 8a1 1 0 0 0 0 1.87l9.6 3.84l3.84 9.6a1 1 0 0 0 .9.63a1 1 0 0 0 .92-.66l8-22a1 1 0 0 0-.21-1.05zM19 24.2l-2.79-7L21 12.41L19.59 11l-4.83 4.83L7.8 13l17.53-6.33z"
                                    fill="currentColor"></path>
                            </svg>
                            </svg>
                        </button>
                    </div>
                </form>

                <div class="w-[500px] h-[500px] rounded-full bg-blue-200 absolute -z-10 opacity-30 blur-3xl"></div>
            </div>
        </div>
    </div>
</x-app-layout>

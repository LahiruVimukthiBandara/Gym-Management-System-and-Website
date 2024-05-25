<x-app-layout>
    <div class=" flex flex-col gap-10">

        {{-- Heading --}}
        <div class=" flex flex-col w-full items-center justify-center">
            <h3 class="text-base font-semibold text-gray-500 dark:text-gray-300 capitalize"> we are special </h3>
            <h1 class="md:text-4xl text-4xl font-extrabold capitalize text-[#202020] dark:text-white"> about the gym
            </h1>
            <div class="h-[5px] w-[100px] rounded-full bg-yellow-500 mt-3"></div>
        </div>

        {{-- Describe about us --}}
        <div class=" md:px-[8%] px-[3%] py-[5%] mb-10 md:mb-0 h-[500px] grid md:grid-cols-2 grid-cols-1 md:gap-6 gap-3 text-[#202020]">
            {{-- Col 01 --}}
            <div class="px-3">
                <h1 class="text-lg mb-5 font-bold font-poppins dark:text-white"> About The Gym </h1>
                <p class="text-gray-600 text-sm dark:text-gray-300">
                    Welcome to The Gym, where fitness meets passion. At The Gym, we are dedicated to helping you achieve
                    your fitness goals and unleash your full potential.

                    With state-of-the-art facilities, expert trainers, and a supportive community, we provide the
                    perfect environment for you to thrive. Whether you're a seasoned athlete or just starting your
                    fitness journey, we have everything you need to succeed.<br /><br />

                    Our mission is simple: to inspire and empower individuals to lead healthier, happier lives. We
                    believe that fitness is not just about physical strength, but also about mental well-being and
                    personal growth. That's why we offer a variety of classes, programs, and amenities to cater to your
                    unique needs and preferences.

                    Join us at The Gym and experience the difference. Let's embark on this journey together and make
                    every workout count. Your best self starts here.
                </p>
                <button
                    class="px-16 md:px-10 py-3 text-white font-semibold rounded-full bg-blue-700 hover:bg-blue-600 transition-all ease-in-out duration-100 mt-5">
                    Join today
                </button>
            </div>

            {{-- Col 02 --}}
            <div class="p-5">
                <div class="relative md:flex hidden">
                    <div class="w-full h-[350px] z-20">
                        <iframe class="w-full h-full rounded-xl"
                            src="https://www.youtube.com/embed/eAlNvWgTDZQ?si=ic7jQbafVg1rsQgk"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="h-[150px] w-[150px] bg-blue-700 rounded-full absolute z-10 top-0 blur-3xl"></div>
                    <div class="h-[150px] w-[150px] bg-red-700 rounded-full absolute z-10 bottom-0 right-0 blur-3xl">
                    </div>
                </div>
            </div>
        </div>

        {{-- Image galary --}}
        <div class="px-[8%] py-[5%] bg-gray-50 dark:bg-[#141516]">

            {{-- Heading --}}
            <div class=" flex flex-col w-full items-center justify-center">
                <h1 class="md:text-4xl text-4xl font-extrabold capitalize text-[#202020] dark:text-white"> galary </h1>
                <div class="h-[5px] w-[100px] rounded-full bg-yellow-500 mt-3 mb-10"></div>
            </div>

            <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg object-cover object-center"
                            src="https://images.unsplash.com/photo-1432462770865-65b70566d673?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                            alt="gallery-photo" />
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg object-cover object-center "
                            src="https://images.unsplash.com/photo-1629367494173-c78a56567877?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=927&amp;q=80"
                            alt="gallery-photo" />
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg object-cover object-center"
                            src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2940&amp;q=80"
                            alt="gallery-photo" />
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg object-cover object-center"
                            src="https://images.unsplash.com/photo-1552960562-daf630e9278b?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=687&amp;q=80"
                            alt="gallery-photo" />
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg object-cover object-center"
                            src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                            alt="gallery-photo" />
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg object-cover object-center "
                            src="https://docs.material-tailwind.com/img/team-3.jpg" alt="gallery-photo" />
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg object-cover object-center"
                            src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2940&amp;q=80"
                            alt="gallery-photo" />
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg object-cover object-center "
                            src="https://docs.material-tailwind.com/img/team-3.jpg" alt="gallery-photo" />
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg object-cover object-center"
                            src="https://images.unsplash.com/photo-1552960562-daf630e9278b?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=687&amp;q=80"
                            alt="gallery-photo" />
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg object-cover object-center"
                            src="https://images.unsplash.com/photo-1552960562-daf630e9278b?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=687&amp;q=80"
                            alt="gallery-photo" />
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg object-cover object-center"
                            src="https://images.unsplash.com/photo-1629367494173-c78a56567877?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=927&amp;q=80"
                            alt="gallery-photo" />
                    </div>
                </div>
            </div>
        </div>

        {{-- Our cotches --}}

        {{-- Heading --}}
        <div class=" flex flex-col w-full items-center justify-center mt-5">
            <h3 class="text-base font-semibold text-gray-500 dark:text-gray-300 capitalize"> we have the best trainers
            </h3>
            <h1 class="md:text-4xl text-4xl font-extrabold capitalize text-[#202020] dark:text-white"> our trainers
            </h1>
            <div class="h-[5px] w-[100px] rounded-full bg-yellow-500 mt-3"></div>
        </div>
        <div class="py-[5%] grid md:grid-cols-4 grid-cols-1 md:gap-3 gap-2">
            {{-- Col 01 --}}
            <div class="flex flex-col justify-center items-center gap-3 py-10">
                <div class="avatar relative flex justify-center items-center">
                    <div class=" w-32 rounded-full">
                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                    <div class="absolute w-24 h-24 bg-blue-500 rounded-full -z-10 blur-3xl"></div>
                </div>

                <div class="w-full flex flex-col items-center justify-center">
                    <h1 class="capitalize text-xl font-bold text-[#202020] dark:text-white"> adem coplen</h1>
                    <p class="capitalize text-gray-500 dark:text-gray-300"> fitness / cardio trainer </p>
                </div>

                <div class="flex gap-5 items-center">
                    {{-- Facebook --}}
                    <a href="#">
                        <svg class="w-6 h-6 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
                            <path
                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48c27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
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
                        <svg class="w-6 h-6 text-black dark:text-white " xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
                            <path
                                d="M412.19 118.66a109.27 109.27 0 0 1-9.45-5.5a132.87 132.87 0 0 1-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14 23.9 350 16 350.13 16h-82.44v318.78c0 4.28 0 8.51-.18 12.69c0 .52-.05 1-.08 1.56c0 .23 0 .47-.05.71v.18a70 70 0 0 1-35.22 55.56a68.8 68.8 0 0 1-34.11 9c-38.41 0-69.54-31.32-69.54-70s31.13-70 69.54-70a68.9 68.9 0 0 1 21.41 3.39l.1-83.94a153.14 153.14 0 0 0-118 34.52a161.79 161.79 0 0 0-35.3 43.53c-3.48 6-16.61 30.11-18.2 69.24c-1 22.21 5.67 45.22 8.85 54.73v.2c2 5.6 9.75 24.71 22.38 40.82A167.53 167.53 0 0 0 115 470.66v-.2l.2.2c39.91 27.12 84.16 25.34 84.16 25.34c7.66-.31 33.32 0 62.46-13.81c32.32-15.31 50.72-38.12 50.72-38.12a158.46 158.46 0 0 0 27.64-45.93c7.46-19.61 9.95-43.13 9.95-52.53V176.49c1 .6 14.32 9.41 14.32 9.41s19.19 12.3 49.13 20.31c21.48 5.7 50.42 6.9 50.42 6.9v-81.84c-10.14 1.1-30.73-2.1-51.81-12.61z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
            </div>
            {{-- Col 02 --}}
            <div class="flex flex-col justify-center items-center gap-3 py-10">
                <div class="avatar relative flex justify-center items-center">
                    <div class=" w-32 rounded-full">
                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                    <div class="absolute w-24 h-24 bg-blue-500 rounded-full -z-10 blur-3xl"></div>
                </div>

                <div class="w-full flex flex-col items-center justify-center">
                    <h1 class="capitalize text-xl font-bold text-[#202020] dark:text-white"> paul walker </h1>
                    <p class="capitalize text-gray-500 dark:text-gray-300"> fitness / cardio trainer </p>
                </div>

                <div class="flex gap-5 items-center">
                    {{-- Facebook --}}
                    <a href="#">
                        <svg class="w-6 h-6 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
                            <path
                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48c27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
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
                        <svg class="w-6 h-6 text-black dark:text-white " xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
                            <path
                                d="M412.19 118.66a109.27 109.27 0 0 1-9.45-5.5a132.87 132.87 0 0 1-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14 23.9 350 16 350.13 16h-82.44v318.78c0 4.28 0 8.51-.18 12.69c0 .52-.05 1-.08 1.56c0 .23 0 .47-.05.71v.18a70 70 0 0 1-35.22 55.56a68.8 68.8 0 0 1-34.11 9c-38.41 0-69.54-31.32-69.54-70s31.13-70 69.54-70a68.9 68.9 0 0 1 21.41 3.39l.1-83.94a153.14 153.14 0 0 0-118 34.52a161.79 161.79 0 0 0-35.3 43.53c-3.48 6-16.61 30.11-18.2 69.24c-1 22.21 5.67 45.22 8.85 54.73v.2c2 5.6 9.75 24.71 22.38 40.82A167.53 167.53 0 0 0 115 470.66v-.2l.2.2c39.91 27.12 84.16 25.34 84.16 25.34c7.66-.31 33.32 0 62.46-13.81c32.32-15.31 50.72-38.12 50.72-38.12a158.46 158.46 0 0 0 27.64-45.93c7.46-19.61 9.95-43.13 9.95-52.53V176.49c1 .6 14.32 9.41 14.32 9.41s19.19 12.3 49.13 20.31c21.48 5.7 50.42 6.9 50.42 6.9v-81.84c-10.14 1.1-30.73-2.1-51.81-12.61z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
            </div>
            {{-- Col 03 --}}
            <div class="flex flex-col justify-center items-center gap-3 py-10">
                <div class="avatar relative flex justify-center items-center">
                    <div class=" w-32 rounded-full">
                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                    <div class="absolute w-24 h-24 bg-blue-500 rounded-full -z-10 blur-3xl"></div>
                </div>

                <div class="w-full flex flex-col items-center justify-center">
                    <h1 class="capitalize text-xl font-bold text-[#202020] dark:text-white"> larry wheel </h1>
                    <p class="capitalize text-gray-500 dark:text-gray-300"> fitness / cardio trainer </p>
                </div>

                <div class="flex gap-5 items-center">
                    {{-- Facebook --}}
                    <a href="#">
                        <svg class="w-6 h-6 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
                            <path
                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48c27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
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
                        <svg class="w-6 h-6 text-black dark:text-white " xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
                            <path
                                d="M412.19 118.66a109.27 109.27 0 0 1-9.45-5.5a132.87 132.87 0 0 1-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14 23.9 350 16 350.13 16h-82.44v318.78c0 4.28 0 8.51-.18 12.69c0 .52-.05 1-.08 1.56c0 .23 0 .47-.05.71v.18a70 70 0 0 1-35.22 55.56a68.8 68.8 0 0 1-34.11 9c-38.41 0-69.54-31.32-69.54-70s31.13-70 69.54-70a68.9 68.9 0 0 1 21.41 3.39l.1-83.94a153.14 153.14 0 0 0-118 34.52a161.79 161.79 0 0 0-35.3 43.53c-3.48 6-16.61 30.11-18.2 69.24c-1 22.21 5.67 45.22 8.85 54.73v.2c2 5.6 9.75 24.71 22.38 40.82A167.53 167.53 0 0 0 115 470.66v-.2l.2.2c39.91 27.12 84.16 25.34 84.16 25.34c7.66-.31 33.32 0 62.46-13.81c32.32-15.31 50.72-38.12 50.72-38.12a158.46 158.46 0 0 0 27.64-45.93c7.46-19.61 9.95-43.13 9.95-52.53V176.49c1 .6 14.32 9.41 14.32 9.41s19.19 12.3 49.13 20.31c21.48 5.7 50.42 6.9 50.42 6.9v-81.84c-10.14 1.1-30.73-2.1-51.81-12.61z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
            </div>
            {{-- Col 04 --}}
            <div class="flex flex-col justify-center items-center gap-3 py-10">
                <div class="avatar relative flex justify-center items-center">
                    <div class=" w-32 rounded-full">
                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                    <div class="absolute w-24 h-24 bg-blue-500 rounded-full -z-10 blur-3xl"></div>
                </div>

                <div class="w-full flex flex-col items-center justify-center">
                    <h1 class="capitalize text-xl font-bold text-[#202020] dark:text-white"> anatoly </h1>
                    <p class="capitalize text-gray-500 dark:text-gray-300"> fitness / cardio trainer </p>
                </div>

                <div class="flex gap-5 items-center">
                    {{-- Facebook --}}
                    <a href="#">
                        <svg class="w-6 h-6 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
                            <path
                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48c27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
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
                        <svg class="w-6 h-6 text-black dark:text-white " xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
                            <path
                                d="M412.19 118.66a109.27 109.27 0 0 1-9.45-5.5a132.87 132.87 0 0 1-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14 23.9 350 16 350.13 16h-82.44v318.78c0 4.28 0 8.51-.18 12.69c0 .52-.05 1-.08 1.56c0 .23 0 .47-.05.71v.18a70 70 0 0 1-35.22 55.56a68.8 68.8 0 0 1-34.11 9c-38.41 0-69.54-31.32-69.54-70s31.13-70 69.54-70a68.9 68.9 0 0 1 21.41 3.39l.1-83.94a153.14 153.14 0 0 0-118 34.52a161.79 161.79 0 0 0-35.3 43.53c-3.48 6-16.61 30.11-18.2 69.24c-1 22.21 5.67 45.22 8.85 54.73v.2c2 5.6 9.75 24.71 22.38 40.82A167.53 167.53 0 0 0 115 470.66v-.2l.2.2c39.91 27.12 84.16 25.34 84.16 25.34c7.66-.31 33.32 0 62.46-13.81c32.32-15.31 50.72-38.12 50.72-38.12a158.46 158.46 0 0 0 27.64-45.93c7.46-19.61 9.95-43.13 9.95-52.53V176.49c1 .6 14.32 9.41 14.32 9.41s19.19 12.3 49.13 20.31c21.48 5.7 50.42 6.9 50.42 6.9v-81.84c-10.14 1.1-30.73-2.1-51.81-12.61z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- contact --}}

    </div>
    <div>
        <x-contact />
    </div>
</x-app-layout>

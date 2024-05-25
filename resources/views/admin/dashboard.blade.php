<x-admin-layout>
    <div class="px-[8%] py-[1%] flex flex-col">
        {{-- Count --}}
        <div class="grid grid-cols-3 gap-10 mt-10">
            {{-- Col 01 --}}
            <div class="flex justify-between items-center bg-white drop-shadow-lg py-10 px-16 rounded-lg">
                <svg class="w-8 h-8 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1024 1024">
                    <path
                        d="M824.2 699.9a301.55 301.55 0 0 0-86.4-60.4C783.1 602.8 812 546.8 812 484c0-110.8-92.4-201.7-203.2-200c-109.1 1.7-197 90.6-197 200c0 62.8 29 118.8 74.2 155.5a300.95 300.95 0 0 0-86.4 60.4C345 754.6 314 826.8 312 903.8a8 8 0 0 0 8 8.2h56c4.3 0 7.9-3.4 8-7.7c1.9-58 25.4-112.3 66.7-153.5A226.62 226.62 0 0 1 612 684c60.9 0 118.2 23.7 161.3 66.8C814.5 792 838 846.3 840 904.3c.1 4.3 3.7 7.7 8 7.7h56a8 8 0 0 0 8-8.2c-2-77-33-149.2-87.8-203.9zM612 612c-34.2 0-66.4-13.3-90.5-37.5a126.86 126.86 0 0 1-37.5-91.8c.3-32.8 13.4-64.5 36.3-88c24-24.6 56.1-38.3 90.4-38.7c33.9-.3 66.8 12.9 91 36.6c24.8 24.3 38.4 56.8 38.4 91.4c0 34.2-13.3 66.3-37.5 90.5A127.3 127.3 0 0 1 612 612zM361.5 510.4c-.9-8.7-1.4-17.5-1.4-26.4c0-15.9 1.5-31.4 4.3-46.5c.7-3.6-1.2-7.3-4.5-8.8c-13.6-6.1-26.1-14.5-36.9-25.1a127.54 127.54 0 0 1-38.7-95.4c.9-32.1 13.8-62.6 36.3-85.6c24.7-25.3 57.9-39.1 93.2-38.7c31.9.3 62.7 12.6 86 34.4c7.9 7.4 14.7 15.6 20.4 24.4c2 3.1 5.9 4.4 9.3 3.2c17.6-6.1 36.2-10.4 55.3-12.4c5.6-.6 8.8-6.6 6.3-11.6c-32.5-64.3-98.9-108.7-175.7-109.9c-110.9-1.7-203.3 89.2-203.3 199.9c0 62.8 28.9 118.8 74.2 155.5c-31.8 14.7-61.1 35-86.5 60.4c-54.8 54.7-85.8 126.9-87.8 204a8 8 0 0 0 8 8.2h56.1c4.3 0 7.9-3.4 8-7.7c1.9-58 25.4-112.3 66.7-153.5c29.4-29.4 65.4-49.8 104.7-59.7c3.9-1 6.5-4.7 6-8.7z"
                        fill="currentColor"></path>
                </svg>
                <div>
                    <h1 class="text-2xl text-[#202020] font-semibold"> Members </h1>
                    <p class="text-gray-500 text-sm capitalize"> all members in your gym </p>
                </div>

                <h1 class="text-4xl text-blue-700"> {{ $memberCount }} </h1>
            </div>

            {{-- Col 02 --}}
            <div class="flex justify-between items-center bg-white drop-shadow-lg py-10 px-16 rounded-lg">
                <svg class="w-8 h-8 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16 16">
                    <g fill="none">
                        <path
                            d="M8 5a.75.75 0 1 0 0-1.5A.75.75 0 0 0 8 5zm.736-3.545a1.167 1.167 0 0 0-1.472 0L2.262 5.52C1.654 6.016 2.004 7 2.788 7H3v4.2c-.594.303-1 .92-1 1.633v.667a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-.667c0-.712-.406-1.33-1-1.633V7h.212c.784 0 1.134-.985.525-1.48l-5-4.066zm-.84.776a.167.167 0 0 1 .21 0L12.741 6H3.258l4.638-3.77zM12 11h-1V7h1v4zm-2 0H8.5V7H10v4zm-2.5 0H6V7h1.5v4zm4.667 1c.46 0 .833.373.833.833v.167H3v-.167c0-.46.373-.833.833-.833h8.334zM5 11H4V7h1v4z"
                            fill="currentColor"></path>
                    </g>
                </svg>
                <div>
                    <h1 class="text-2xl text-[#202020] font-semibold"> payments </h1>
                    <p class="text-gray-500 text-sm capitalize"> all payments by members </p>
                </div>

                <h1 class="text-4xl text-blue-700"> {{ $feesCount }} </h1>
            </div>

            {{-- Col 03 --}}
            <div class="flex justify-between items-center bg-white drop-shadow-lg py-10 px-16 rounded-lg">
                <svg class="w-8 h-8 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                    <path
                        d="M7.667 27.503L2 22.448l1.331-1.492l5.641 5.031l7.69-7.445a1.928 1.928 0 0 1 2.674-.008l3.624 3.464l5.58-5.973L30 17.39l-5.581 5.975a1.996 1.996 0 0 1-2.838.08l-3.577-3.419l-7.666 7.42a1.963 1.963 0 0 1-2.671.056z"
                        fill="currentColor"></path>
                    <path d="M30 11h-4l2-3l2 3z" fill="currentColor"></path>
                    <path d="M22 4h-4v2h4v2h-3v2h3v2h-4v2h4a2.003 2.003 0 0 0 2-2V6a2.002 2.002 0 0 0-2-2z"
                        fill="currentColor"></path>
                    <path
                        d="M16 14h-6v-4a2.002 2.002 0 0 1 2-2h2V6h-4V4h4a2.002 2.002 0 0 1 2 2v2a2.002 2.002 0 0 1-2 2h-2v2h4z"
                        fill="currentColor"></path>
                    <path d="M6 12V4H4v1H2v2h2v5H2v2h6v-2H6z" fill="currentColor"></path>
                </svg>
                <div>
                    <h1 class="text-2xl text-[#202020] font-semibold"> Total </h1>
                    <p class="text-gray-500 text-sm capitalize"> earning </p>
                </div>

                <h1 class="text-xl text-green-600 bg-yellow-100 rounded-full px-2 py-1"> Rs: {{ $totalEarn }} /= </h1>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-10 mt-10">
            {{-- Col 01 --}}
            <div class="flex justify-between items-center bg-white drop-shadow-lg py-10 px-6 rounded-lg">
                <div class="collapse border">
                    <input type="checkbox" id="collapse-toggle" />
                    <div class="collapse-title capitalize flex justify-between items-center">
                        <span class=" font-semibold"> monthly Earning </span>
                        <svg class="w-8 h-8 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16 16">
                            <g fill="none">
                                <path
                                    d="M2.984 8.625v.003a.5.5 0 0 1-.612.355c-.431-.114-.355-.611-.355-.611l.018-.062s.026-.084.047-.145a6.7 6.7 0 0 1 1.117-1.982C4.096 5.089 5.605 4 8 4s3.904 1.089 4.802 2.183a6.7 6.7 0 0 1 1.117 1.982a4.077 4.077 0 0 1 .06.187l.003.013v.004l.001.002a.5.5 0 0 1-.966.258l-.001-.004l-.008-.025a4.872 4.872 0 0 0-.2-.52a5.696 5.696 0 0 0-.78-1.263C11.286 5.912 10.044 5 8 5c-2.044 0-3.285.912-4.028 1.817a5.7 5.7 0 0 0-.945 1.674a3.018 3.018 0 0 0-.035.109l-.008.025zM8 7a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5zM6.5 9.5a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0z"
                                    fill="currentColor"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="collapse-content">
                        @foreach ($totalEarnByMonth->sortBy('month') as $earnings)
                        <div class="flex justify-between mb-1">
                            <p class="flex justify-between">{{ date('F', mktime(0, 0, 0, $earnings->month, 1)) . ' - ' . $earnings->year }}</p>
                            ->
                            <p class="text-green-700 bg-yellow-100 rounded-full px-2 py-1"> Rs: {{ $earnings->total_earn }} /= </p>
                        </div>
                        <hr class="mb-1" />
                            
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-admin-layout>

<div class="flex flex-col md:px-[8%] px-[5%] py-[5%] w-full md:my-[3%]">

    {{-- Heading --}}
    <div class=" flex flex-col w-full items-center justify-center mt-10 md:mt-0">
        <h3 class="text-base font-semibold text-gray-500 dark:text-gray-300 capitalize"> services we giving</h3>
        <h1 class="md:text-4xl text-3xl font-extrabold capitalize text-[#202020] dark:text-white"> calculate your <span
                class="uppercase">bmi</span>
        </h1>
        <div class="divider w-20 h-1 rounded-full bg-yellow-500 mx-auto"></div>
    </div>

    <div class="w-[100%] py-[3%] flex flex-col md:flex-row items-center md:gap-6">
        {{-- Left side --}}
        <div class="md:w-[50%] w-full flex flex-col p-5">
            {{-- Calculate form --}}
            <form class="">
                <div class="grid grid-rows-3 md:gap-6 gap-3 text-[#202020]">

                    {{-- Row one --}}
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                        {{-- Height --}}
                        <div class="flex flex-col">
                            <label class="form-control w-full max-w-s">
                                <div class="label">
                                    <span class="label-text text-[#202020] dark:text-gray-200 text-sm " for="height">What is your Height ?</span>
                                </div>
                                <input wire:model.live="height" type="text" name="height" id="height"
                                    placeholder="cm" class="input input-bordered w-full max-w-xs bg-transparent text-sm  text-[#202020] dark:text-gray-200" />
                            </label>
                        </div>
                        {{-- Wieight --}}
                        <div>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span  class="label-text text-sm text-[#202020] dark:text-gray-200">What is your weight ?</span>
                                </div>
                                <input wire:model.live="weight" type="text" name="weight" id="weight"
                                    placeholder="kg " class="input input-bordered w-full max-w-xs bg-transparent text-sm text-[#202020] dark:text-gray-200" />
                            </label>
                        </div>
                    </div>

                    {{-- Row two --}}
                    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-6 gap-3">
                        {{-- Age --}}
                        <div>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text text-sm text-[#202020] dark:text-gray-200 ">What is your age ?</span>
                                </div>
                                <input wire:model.live="age" type="text" name="age" id="age"
                                    placeholder="Years " class="input input-bordered w-full max-w-xs bg-transparent text-sm text-[#202020] dark:text-gray-200" />
                            </label>
                        </div>

                        {{-- Gender --}}
                        <div>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text text-sm text-[#202020] dark:text-gray-200 ">What is your gender ?</span>
                                </div>
                                <select wire:model="gender" class="select select-bordered bg-transparent text-sm text-[#202020] dark:text-gray-200" name="gender">
                                    <option disabled selected>Pick one</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </label>
                        </div>
                    </div>

                    {{-- Row three --}}
                    <div class="grid md:grid-cols-1 md:pr-10 pr-0 grid-cols-1 md:gap-6">
                        {{-- Submit button --}}
                        <div class="flex w-full justify-between items-center -mt-24 md:mt-0">
                            <div>
                                <button wire:click.prevent="calculate"
                                    class="px-10 py-3 flex gap-4 capitalize md:text-sm text-white font-semibold rounded-full bg-blue-700 hover:bg-blue-600 transition-all ease-in-out duration-100">
                                    calculate
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20">
                                        <g fill="none">
                                            <path
                                                d="M7 12a1 1 0 1 0 0-2a1 1 0 0 0 0 2zm0 3a1 1 0 1 0 0-2a1 1 0 0 0 0 2zm2.627-3.072a5.521 5.521 0 0 1 1.178-1.522A.998.998 0 0 0 9 11a1 1 0 0 0 .627.928zM6.5 17h3.11c.185.358.408.693.663 1H6.5A2.5 2.5 0 0 1 4 15.5v-11A2.5 2.5 0 0 1 6.5 2h7A2.5 2.5 0 0 1 16 4.5v4.688a5.482 5.482 0 0 0-1-.185V4.5A1.5 1.5 0 0 0 13.5 3h-7A1.5 1.5 0 0 0 5 4.5v11A1.5 1.5 0 0 0 6.5 17zM6 5.5A1.5 1.5 0 0 1 7.5 4h5A1.5 1.5 0 0 1 14 5.5v1A1.5 1.5 0 0 1 12.5 8h-5A1.5 1.5 0 0 1 6 6.5v-1zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-5zm10 7.48a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-1 0v.758a4.5 4.5 0 1 0 2 3.742a.5.5 0 1 0-1 0a3.5 3.5 0 1 1-1.696-3H15.5a.5.5 0 1 0 0 1h2z"
                                                fill="currentColor"></path>
                                        </g>
                                    </svg> </button>
                            </div>

                            {{-- Display bmi --}}
                            <div class="flex flex-col">
                                @php
                                    if ($bmi <= 17) {
                                        $color = 'text-yellow-600';
                                        $text = '';
                                    } elseif ($bmi >= 18.5 && $bmi <= 25) {
                                        $color = 'text-green-600';
                                        $text = ' Normal ';
                                    } elseif ($bmi >= 25 && $bmi <= 30) {
                                        $color = 'text-red-600';
                                        $text = ' Overweight ';
                                    } else {
                                        $color = '';
                                        $text = '';
                                    }
                                @endphp
                                <span class="{{ $color }}">{{ number_format($bmi, 2) }}</span>
                                <span class="text-sm dark:text-gray-200 text-[#202020]">{{ $text }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        {{-- Right side --}}
        <div class="md:w-[50%] w-[90%] flex justify-center items-center flex-col md:p-8 relative md:mt-0 -mt-20">
            <img src="bmi5.png" alt="" class=" z-20">
            <div class="md:w-[450px] w-[50px] md:h-[450px] h-[50px] rounded-full top-0 md:top-10 md:right-16 absolute bg-white md:bg-blue-700 opacity-35 blur-3xl ">
            </div>

        </div>
    </div>
</div>

<x-admin-layout>
    <div class="px-[8%] py-[1%] flex flex-col">

        {{-- Heading --}}
        <div class="mb-5">
            <h1 class="capitalize text-3xl font-bold font-poppins"> Member details </h1>
            <div class="w-20 h-1 rounded-full bg-blue-700 mt-2"></div>
        </div>

        <div class="grid grid-cols-2 gap-6 mt-8">
            {{-- Member details --}}
            <div class="flex flex-col gap-2">
                <div class="avatar mb-5">
                    <div class="w-32 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                      <img class="object-cover object-top" src="{{ asset($user->image) }}" />
                    </div>
                  </div>

                <div class="flex gap-5">
                    <svg class="w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28 28">
                        <g fill="none">
                            <path
                                d="M12.701 3.908c.532-1.078 2.069-1.078 2.6 0l2.692 5.452l6.017.875c1.19.173 1.664 1.634.804 2.473l-4.355 4.244l1.028 5.993c.204 1.185-1.04 2.088-2.103 1.529L14 21.644l-5.381 2.83c-1.064.559-2.307-.344-2.104-1.529l1.028-5.993l-4.355-4.244c-.86-.839-.385-2.3.804-2.473l6.017-.875l2.691-5.452zm1.3.755l-2.657 5.385a1.45 1.45 0 0 1-1.092.793l-5.943.864l4.3 4.191c.342.334.498.813.417 1.284l-1.015 5.919l5.316-2.795a1.45 1.45 0 0 1 1.35 0l5.315 2.795l-1.015-5.92c-.081-.47.075-.95.417-1.283l4.3-4.191l-5.943-.864a1.45 1.45 0 0 1-1.092-.793l-2.657-5.385z"
                                fill="currentColor"></path>
                        </g>
                    </svg>
                    <h1 class="text-[#202020] capitalize font-semibold"> name : </h1>
                    <h1> {{ $user->name }} </h1>
                </div>
                <hr class="w-[500px]" />
                <div class="flex gap-5">
                    <svg class="w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28 28">
                        <g fill="none">
                            <path
                                d="M12.701 3.908c.532-1.078 2.069-1.078 2.6 0l2.692 5.452l6.017.875c1.19.173 1.664 1.634.804 2.473l-4.355 4.244l1.028 5.993c.204 1.185-1.04 2.088-2.103 1.529L14 21.644l-5.381 2.83c-1.064.559-2.307-.344-2.104-1.529l1.028-5.993l-4.355-4.244c-.86-.839-.385-2.3.804-2.473l6.017-.875l2.691-5.452zm1.3.755l-2.657 5.385a1.45 1.45 0 0 1-1.092.793l-5.943.864l4.3 4.191c.342.334.498.813.417 1.284l-1.015 5.919l5.316-2.795a1.45 1.45 0 0 1 1.35 0l5.315 2.795l-1.015-5.92c-.081-.47.075-.95.417-1.283l4.3-4.191l-5.943-.864a1.45 1.45 0 0 1-1.092-.793l-2.657-5.385z"
                                fill="currentColor"></path>
                        </g>
                    </svg>
                    <h1 class="text-[#202020] uppercase font-semibold"> nic : </h1>
                    <h1> {{ $user->nic }} </h1>
                </div>
                <hr class="w-[500px]" />
                <div class="flex gap-5">
                    <svg class="w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28 28">
                        <g fill="none">
                            <path
                                d="M12.701 3.908c.532-1.078 2.069-1.078 2.6 0l2.692 5.452l6.017.875c1.19.173 1.664 1.634.804 2.473l-4.355 4.244l1.028 5.993c.204 1.185-1.04 2.088-2.103 1.529L14 21.644l-5.381 2.83c-1.064.559-2.307-.344-2.104-1.529l1.028-5.993l-4.355-4.244c-.86-.839-.385-2.3.804-2.473l6.017-.875l2.691-5.452zm1.3.755l-2.657 5.385a1.45 1.45 0 0 1-1.092.793l-5.943.864l4.3 4.191c.342.334.498.813.417 1.284l-1.015 5.919l5.316-2.795a1.45 1.45 0 0 1 1.35 0l5.315 2.795l-1.015-5.92c-.081-.47.075-.95.417-1.283l4.3-4.191l-5.943-.864a1.45 1.45 0 0 1-1.092-.793l-2.657-5.385z"
                                fill="currentColor"></path>
                        </g>
                    </svg>
                    <h1 class="text-[#202020] capitalize font-semibold"> email : </h1>
                    <h1> {{ $user->email }} </h1>
                </div>
                <hr class="w-[500px]" />
                <div class="flex gap-5">
                    <svg class="w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28 28">
                        <g fill="none">
                            <path
                                d="M12.701 3.908c.532-1.078 2.069-1.078 2.6 0l2.692 5.452l6.017.875c1.19.173 1.664 1.634.804 2.473l-4.355 4.244l1.028 5.993c.204 1.185-1.04 2.088-2.103 1.529L14 21.644l-5.381 2.83c-1.064.559-2.307-.344-2.104-1.529l1.028-5.993l-4.355-4.244c-.86-.839-.385-2.3.804-2.473l6.017-.875l2.691-5.452zm1.3.755l-2.657 5.385a1.45 1.45 0 0 1-1.092.793l-5.943.864l4.3 4.191c.342.334.498.813.417 1.284l-1.015 5.919l5.316-2.795a1.45 1.45 0 0 1 1.35 0l5.315 2.795l-1.015-5.92c-.081-.47.075-.95.417-1.283l4.3-4.191l-5.943-.864a1.45 1.45 0 0 1-1.092-.793l-2.657-5.385z"
                                fill="currentColor"></path>
                        </g>
                    </svg>
                    <h1 class="text-[#202020] capitalize font-semibold"> address : </h1>
                    <h1> {{ $user->address }} </h1>
                </div>
                <hr class="w-[500px]" />
                <div class="flex gap-5">
                    <svg class="w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28 28">
                        <g fill="none">
                            <path
                                d="M12.701 3.908c.532-1.078 2.069-1.078 2.6 0l2.692 5.452l6.017.875c1.19.173 1.664 1.634.804 2.473l-4.355 4.244l1.028 5.993c.204 1.185-1.04 2.088-2.103 1.529L14 21.644l-5.381 2.83c-1.064.559-2.307-.344-2.104-1.529l1.028-5.993l-4.355-4.244c-.86-.839-.385-2.3.804-2.473l6.017-.875l2.691-5.452zm1.3.755l-2.657 5.385a1.45 1.45 0 0 1-1.092.793l-5.943.864l4.3 4.191c.342.334.498.813.417 1.284l-1.015 5.919l5.316-2.795a1.45 1.45 0 0 1 1.35 0l5.315 2.795l-1.015-5.92c-.081-.47.075-.95.417-1.283l4.3-4.191l-5.943-.864a1.45 1.45 0 0 1-1.092-.793l-2.657-5.385z"
                                fill="currentColor"></path>
                        </g>
                    </svg>
                    <h1 class="text-[#202020] capitalize font-semibold"> phone number : </h1>
                    <h1> {{ $user->phone_no }} </h1>
                </div>
                <hr class="w-[500px]" />
                <div class="flex gap-5">
                    <svg class="w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28 28">
                        <g fill="none">
                            <path
                                d="M12.701 3.908c.532-1.078 2.069-1.078 2.6 0l2.692 5.452l6.017.875c1.19.173 1.664 1.634.804 2.473l-4.355 4.244l1.028 5.993c.204 1.185-1.04 2.088-2.103 1.529L14 21.644l-5.381 2.83c-1.064.559-2.307-.344-2.104-1.529l1.028-5.993l-4.355-4.244c-.86-.839-.385-2.3.804-2.473l6.017-.875l2.691-5.452zm1.3.755l-2.657 5.385a1.45 1.45 0 0 1-1.092.793l-5.943.864l4.3 4.191c.342.334.498.813.417 1.284l-1.015 5.919l5.316-2.795a1.45 1.45 0 0 1 1.35 0l5.315 2.795l-1.015-5.92c-.081-.47.075-.95.417-1.283l4.3-4.191l-5.943-.864a1.45 1.45 0 0 1-1.092-.793l-2.657-5.385z"
                                fill="currentColor"></path>
                        </g>
                    </svg>
                    <h1 class="text-[#202020] capitalize font-semibold"> height : </h1>
                    <h1> {{ $user->height }} cm </h1>
                </div>
                <hr class="w-[500px]" />
                <div class="flex gap-5">
                    <svg class="w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28 28">
                        <g fill="none">
                            <path
                                d="M12.701 3.908c.532-1.078 2.069-1.078 2.6 0l2.692 5.452l6.017.875c1.19.173 1.664 1.634.804 2.473l-4.355 4.244l1.028 5.993c.204 1.185-1.04 2.088-2.103 1.529L14 21.644l-5.381 2.83c-1.064.559-2.307-.344-2.104-1.529l1.028-5.993l-4.355-4.244c-.86-.839-.385-2.3.804-2.473l6.017-.875l2.691-5.452zm1.3.755l-2.657 5.385a1.45 1.45 0 0 1-1.092.793l-5.943.864l4.3 4.191c.342.334.498.813.417 1.284l-1.015 5.919l5.316-2.795a1.45 1.45 0 0 1 1.35 0l5.315 2.795l-1.015-5.92c-.081-.47.075-.95.417-1.283l4.3-4.191l-5.943-.864a1.45 1.45 0 0 1-1.092-.793l-2.657-5.385z"
                                fill="currentColor"></path>
                        </g>
                    </svg>
                    <h1 class="text-[#202020] capitalize font-semibold"> weight : </h1>
                    <h1> {{ $user->weight }} kg </h1>
                </div>
                <hr class="w-[500px]" />
                <div class="flex gap-5">
                    <svg class="w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28 28">
                        <g fill="none">
                            <path
                                d="M12.701 3.908c.532-1.078 2.069-1.078 2.6 0l2.692 5.452l6.017.875c1.19.173 1.664 1.634.804 2.473l-4.355 4.244l1.028 5.993c.204 1.185-1.04 2.088-2.103 1.529L14 21.644l-5.381 2.83c-1.064.559-2.307-.344-2.104-1.529l1.028-5.993l-4.355-4.244c-.86-.839-.385-2.3.804-2.473l6.017-.875l2.691-5.452zm1.3.755l-2.657 5.385a1.45 1.45 0 0 1-1.092.793l-5.943.864l4.3 4.191c.342.334.498.813.417 1.284l-1.015 5.919l5.316-2.795a1.45 1.45 0 0 1 1.35 0l5.315 2.795l-1.015-5.92c-.081-.47.075-.95.417-1.283l4.3-4.191l-5.943-.864a1.45 1.45 0 0 1-1.092-.793l-2.657-5.385z"
                                fill="currentColor"></path>
                        </g>
                    </svg>
                    <h1 class="text-[#202020] capitalize font-semibold"> joined date : </h1>
                    <h1> {{ date('Y , M, d', strtotime($user->created_at)) }} </h1>
                </div>
            </div>

            {{-- Paayment history --}}
            <div class="flex flex-col gap-3">
                <div>
                    <h1 class="text-[#202020] font-bold text-2xl capitalize"> payment histroy </h1>
                    <div class="h-1 w-16 bg-blue-700 mt-3 rounded-full"></div>
                </div>
                <div class="mt-5">
                    <ul>
                        @if ($fees->isEmpty())
                            <li>
                                <h1 class=" text-2xl capitalize"> no payment yet ! </h1>
                            </li>
                        @else
                            @foreach ($fees as $date => $amount)
                                <li>
                                    <div class="flex flex-col mb-3">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 mr-3 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16 16">
                                                <g fill="none">
                                                    <path
                                                        d="M8 2a6 6 0 1 1 0 12A6 6 0 0 1 8 2zm2.12 4.164L7.25 9.042L5.854 7.646a.5.5 0 1 0-.708.708l1.75 1.75a.5.5 0 0 0 .708 0l3.224-3.234a.5.5 0 0 0-.708-.706z"
                                                        fill="currentColor"></path>
                                                </g>
                                            </svg>
                                            <div class="flex gap-3">
                                                <h1 class="capitalize font-semibold"> payment date </h1>
                                                <h1>{{ date('Y , F , d', strtotime($date)) }}</h1>
                                                / <h1 class="capitalize font-semibold"> payment amount </h1>
                                                <h1> Rs: {{ $amount }} /=</h1>
                                            </div>
                                        </div>
                                        <hr class="w-[500px] my-1" />
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>

        </div>

    </div>
</x-admin-layout>

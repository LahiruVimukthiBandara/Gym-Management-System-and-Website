<x-admin-layout>
    <div class="px-[8%] py-[1%] flex flex-col">

        {{-- Heading --}}
        <div class="mb-5">
            <h1 class="capitalize text-3xl font-bold font-poppins"> Create member </h1>
            <div class="w-20 h-1 rounded-full bg-blue-700 mt-2"></div>
        </div>

        {{-- Create user form --}}
        <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md p-5 rounded-lg">
            @csrf
            @method('PATCH')
            <div class="grid grid-rows-2 gap-6">
                {{-- Row 01 --}}
                <div class="grid grid-cols-3 gap-6">
                    {{-- Col 01 --}}
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text capitalize"> Full Name </span>
                            </div>
                            <input type="text" name="name" id="name" value="{{ $user->name }}"
                                class="input input-bordered w-full" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </label>
                    </div>

                    {{-- Col 02 --}}
                    <div>
                        <div>
                            <label class="form-control w-full">
                                <div class="label">
                                    <span class="label-text capitalize"> email </span>
                                </div>
                                <input type="email" name="email" id="email" value="{{ $user->email }}"
                                    class="input input-bordered w-full" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </label>
                        </div>
                    </div>

                    {{-- Col 03 --}}
                    <div>
                        <div>
                            <label class="form-control w-full">
                                <div class="label">
                                    <span class="label-text capitalize"> nic number </span>
                                </div>
                                <input type="text" name="nic" id="nic" value="{{ $user->nic }}"
                                    class="input input-bordered w-full" />
                                <x-input-error :messages="$errors->get('nic')" class="mt-2" />
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Row 02 --}}
                <div class="grid grid-cols-3 gap-6">
                    {{-- Col 01 --}}
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text capitalize"> address </span>
                            </div>
                            <input type="text" name="address" id="address" value="{{ $user->address }}"
                                class="input input-bordered w-full" />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </label>
                    </div>

                    {{-- Col 02 --}}
                    <div>
                        <div>
                            <label class="form-control w-full">
                                <div class="label">
                                    <span class="label-text capitalize"> phone number </span>
                                </div>
                                <input type="text" name="phone_no" id="phone_no" value="{{ $user->phone_no }}"
                                    class="input input-bordered w-full" />
                                <x-input-error :messages="$errors->get('phone_no')" class="mt-2" />
                            </label>
                        </div>
                    </div>

                    {{-- Col 03 --}}
                    <div>
                        <div>
                            <label class="form-control w-full">
                                <div class="label">
                                    <span class="label-text capitalize"> Weight </span>
                                </div>
                                <input type="text" name="weight" id="weight" value="{{ $user->weight }}"
                                    class="input input-bordered w-full" />
                                <x-input-error :messages="$errors->get('weight')" class="mt-2" />
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Row 03 --}}
                <div class="grid grid-cols-3 gap-6">
                    {{-- Col 01 --}}
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text capitalize"> height </span>
                            </div>
                            <input type="text" name="height" id="height" value="{{ $user->height }}"
                                class="input input-bordered w-full" />
                            <x-input-error :messages="$errors->get('height')" class="mt-2" />
                        </label>
                    </div>

                    {{-- Col 02 --}}
                    <div>
                        <div>
                            <label class="form-control w-full">
                                <div class="label">
                                    <span class="label-text capitalize"> password </span>
                                </div>
                                <input type="password" name="password" id="password" value="{{ $user->password }}"
                                    class="input input-bordered w-full" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </label>
                        </div>
                    </div>

                    {{-- Col 03 --}}
                    <div>
                        <input type="hidden" name="current_image" value="{{ $user->image }}">
                        <div>
                            <label class="form-control w-full">
                                <div class="label">
                                    <span class="label-text capitalize"> profile image </span>
                                </div>
                                <input type="file" name="image" id="image"
                                    class=" w-full" />
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Submit button --}}
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-10 py-3 flex gap-4 capitalize text-white font-semibold rounded-full bg-blue-700 hover:bg-blue-600 transition-all ease-in-out duration-100">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-admin-layout>

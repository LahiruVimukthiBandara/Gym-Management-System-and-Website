<section>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}"  enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="flex items-center gap-8 mb-8 mt-5">
            <div>
                <img src="{{ asset($user->image) }}" alt="profile" class="w-[150px] h-[150px] rounded-full border-[3px] border-blue-700 object-cover object-top">
            </div>
            <div>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text capitalize"> update your profile </span>
                    </div>
                    <input type="file" name="image" id="image" class=" w-full file:bg-blue-700 file:px-6 file:py-2 file:rounded-full file:border-none file:text-white bg-gray-200 rounded-full" />
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </label>
            </div>

        </div>
        <div class="grid grid-rows-3 gap-6">
            {{-- Row 01 --}}
            <div class="grid grid-cols-3 gap-6">
                {{-- Col 01 --}}
                <div>
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text capitalize"> Name </span>
                            </div>
                            <input type="text" name="name" id="name" value="{{ $user->name }}"
                                class="input input-bordered w-full" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </label>
                    </div>
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
                                <span class="label-text capitalize"> weight </span>
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
                </div>
            </div>

            {{-- Submit button --}}
            <div class="flex justify-end">
                <button type="submit"
                    class="px-10 py-3 flex gap-4 capitalize text-white font-semibold rounded-full bg-blue-700 hover:bg-blue-600 transition-all ease-in-out duration-100">
                    Update
                </button>
            </div>
        </div>

        @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600">{{ __('Saved.') }}</p>
        @endif
        </div>
    </form>
</section>

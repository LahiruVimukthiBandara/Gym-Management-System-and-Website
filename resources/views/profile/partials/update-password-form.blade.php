<section class="px-[8%] py-[2%]">
    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="grid grid-cols-3 gap-6">
            {{-- Old password --}}
            <div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text capitalize"> Current password </span>
                        </div>
                        <input type="password" name="current_password" id="update_password_current_password" placeholder="Current Password"
                            class="input input-bordered w-full" />
                        <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
                    </label>
                </div>
            </div>
            {{-- New password --}}
            <div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text capitalize"> new password </span>
                        </div>
                        <input type="password" name="password" id="update_password_password" placeholder="New Password"
                            class="input input-bordered w-full" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </label>
                </div>
            </div>
            {{-- Confirm password --}}
            <div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text capitalize"> Confirm password </span>
                        </div>
                        <input type="password" name="password_confirmation" id="update_password_password_confirmation" placeholder="Current Password"
                            class="input input-bordered w-full" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </label>
                </div>
            </div>

        </div>
        {{-- Submit button --}}
        <div class="flex justify-end mt-6">
            <button type="submit"
                class="px-10 py-3 flex gap-4 capitalize text-white font-semibold rounded-full bg-blue-700 hover:bg-blue-600 transition-all ease-in-out duration-100">
                Update
            </button>
            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

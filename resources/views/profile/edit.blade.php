<x-user-layout>
    <div class="px-[8%] py-[2%] flex flex-col">

        {{-- Heading --}}
        <div class="mb-5">
            <h1 class="capitalize text-3xl font-bold font-poppins"> Edit profile </h1>
            <div class="w-20 h-1 rounded-full bg-blue-700 mt-2"></div>
        </div>

        @include('profile.partials.update-profile-information-form')

        @include('profile.partials.update-password-form')

        <div class="divider px-[8%]"></div>

    </div>

</x-user-layout>

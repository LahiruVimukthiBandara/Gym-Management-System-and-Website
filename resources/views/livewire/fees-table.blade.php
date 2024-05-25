<div>

    <div>
        <label class="input input-bordered flex max-w-xs items-center gap-2">
            <input wire:model.live.debounce.300ms ="search" type="text" class="grow" placeholder="Search" />
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                <path fill-rule="evenodd"
                    d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                    clip-rule="evenodd" />
            </svg>
        </label>
    </div>

    {{-- Fees table --}}
    <table class="mt-5 table">
        <div class="my-2">
            {{-- Success message --}}
            @if (session()->has('success'))
                <p class="flex w-full py-2 px-5 bg-green-300 text-white rounded-md" role="alert">
                    {{ session()->get('success') }}
                </p>
            @endif

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="flex flex-col bg-red-400 text-white py-2 px-5 gap-2">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <thead>
            <tr class="bg-blue-700 text-white capitalize">
                <th> Profile </th>
                <th> Name </th>
                <th> Email </th>
                <th> Nic </th>
                <th> Phone Number </th>
                <th> Month </th>
                <th> Payment date </th>
                <th> amount </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($fees as $fee)
                <tr wire:key ="{{ $fee->id }}" class=" hover:bg-blue-50 duration-150 ease-in-out transition-all">
                    <td class="px-2 py-2">
                        <img src="{{ asset($fee->user->image) ?? '1.jpg' }}" alt="profile image"
                            class="h-10 w-10 rounded-full object-cover object-top" />
                    </td>

                    <td class="px-2 py-2"> {{ $fee->user->name }} </td>
                    <td class="px-2 py-2"> {{ $fee->user->email }} </td>
                    <td class="px-2 py-2"> {{ $fee->user->nic }} </td>
                    <td class="px-2 py-2"> {{ $fee->user->phone_no }} </td>
                    <td class="px-2 py-2"> {{ date('M', strtotime($fee->date)) }} </td>
                    <td class="px-2 py-2"> {{ date('Y-F-d', strtotime($fee->date)) }} </td>
                    <td class="px-2 py-2"> Rs: {{ $fee->amount }} /= </td>

                    <td class="px-2 py-4 h-full flex gap-2 items-center">

                        {{-- Edit button --}}
                        <a wire:navigate href="{{ route('fees.edit', $fee->id) }}"
                            class="text-green-600 hover:text-green-500 transition-all ease-in-out duration-150 underline mr-2">
                            Edit </a>

                        {{-- Delete button --}}
                        <form method="POST" action="{{ route('fees.destroy', $fee->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-red-600 hover:text-red-500 transition-all ease-in-out duration-150 underline">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9">
                        <div class="flex flex-col gap-3 py-8 justify-center items-center">
                            <svg class="w-12 h-12 text-yellow-400" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 496 512">
                                <path
                                    d="M248 8C111 8 0 119 0 256s111 248 248 248s248-111 248-248S385 8 248 8zm80 168c17.7 0 32 14.3 32 32s-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32zM152 416c-26.5 0-48-21-48-47c0-20 28.5-60.4 41.6-77.8c3.2-4.3 9.6-4.3 12.8 0C171.5 308.6 200 349 200 369c0 26-21.5 47-48 47zm16-176c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32zm170.2 154.2C315.8 367.4 282.9 352 248 352c-21.2 0-21.2-32 0-32c44.4 0 86.3 19.6 114.7 53.8c13.8 16.4-11.2 36.5-24.5 20.4z"
                                    fill="currentColor"></path>
                            </svg>
                            <h1 class="text-lg font-bold"> No payments found ! </h1>
                        </div>
                    </td>
                </tr>
            @endforelse

        </tbody>

    </table>

    {{-- Pagination --}}
    <div class="flex justify-between mt-4">

        <div class="flex items-center gap-3">
            <div>
                <h1 class=" text-sm text-wrap">Per Page</h1>
            </div>
            <div>
                <select wire:model.live = 'perPage' class="select select-bordered w-full max-w-xs">
                    <option value="10" selected>10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>

        <div>{{ $fees->links() }}</div>
    </div>
</div>

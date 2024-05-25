<x-admin-layout>
    <div class="px-[8%] py-[1%] flex flex-col">

        {{-- Heading --}}
        <div class="mb-5">
            <h1 class="capitalize text-3xl font-bold font-poppins"> Add member fees </h1>
            <div class="w-20 h-1 rounded-full bg-blue-700 mt-2"></div>
        </div>

        {{-- Create user form --}}
        <form action="{{ route('fees.store') }}" method="POST" class="mt-5">
            @csrf
            <div class="grid grid-cols-3 gap-6">
                {{-- Col 01 --}}
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text"> Select member </span>
                        </div>
                        <select class="select select-bordered" name='user_id' id='user_id'>
                            <option disabled selected>Select member</option>
                            @foreach ($members as $key=> $member)
                                <option value="{{ $key }}"> {{ $member }} </option>
                            @endforeach
                        </select>
                    </label>
                </div>

                {{-- Col 01 --}}
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                          <span class="label-text"> Date </span>
                        </div>
                        <input type="date" placeholder="Type here" name="date" id="date" class="input input-bordered w-full" />
                      </label>
                </div>

                {{-- Col 01 --}}
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                          <span class="label-text">Monthly fee</span>
                        </div>
                        <input type="text" placeholder="Monthly fee" name="amount" id="amount" class="input input-bordered w-full" />
                      </label>
                </div>
            </div>

            {{-- Submit button --}}
            <div class="flex justify-end mt-6">
                <button type="submit"
                    class="px-10 py-3 flex gap-4 capitalize text-white font-semibold rounded-full bg-blue-700 hover:bg-blue-600 transition-all ease-in-out duration-100">
                    Save
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>

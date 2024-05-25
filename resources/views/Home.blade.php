<x-app-layout>

    {{-- title changing --}}
    <x-slot:title>
        home page
    </x-slot:title>
    {{-- content start --}}
    <div class="md:px-[8%] px-[2%] pt-[1%]">
        {{-- Hero component --}}
        <x-hero />    
    </div>

    <x-about />
    <x-service />
    <x-pricing />
    <livewire:bmi-calculator />
   <x-contact />
</x-app-layout>

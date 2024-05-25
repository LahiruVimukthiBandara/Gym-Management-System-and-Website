<div class="flex md:flex-row flex-col md:px-[8%] px-[2%] py-[5%] w-full md:my-[3%] items-center bg-gray-100 dark:bg-[#141516]">
    {{-- Left side --}}
    <div class="flex flex-col md:justify-start justify-center items-center md:items-start md:w-[50%] w-full px-3 md:px-0 md:pr-5 h-full mt-10 md:mt-0">

        <h3 class="text-base font-semibold text-gray-500 dark:text-gray-300 capitalize"> about the gym</h3>
        <h1 class="md:text4xl text-4xl font-extrabold capitalize text-[#202020] dark:text-white"> Welcome to us</h1>
        <div class="divider w-20 h-1 rounded-full bg-yellow-500 md:mx-0 mx-auto"></div>
        <h4 class="text-[#202020] dark:text-gray-200 font-semibold capitalize mb-2 md:text-lg"> the finnest and most famous gym in the town </h4>
        <p class=" text-sm mt-3 md:mt-0 text-gray-800 dark:text-gray-300">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos deserunt eum optio? Veritatis, ratione.
            Dignissimos et eum maxime consequuntur aut fugit quae. Saepe voluptate corporis, facilis dolores odio
            labore. Mollitia
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos deserunt eum optio? Veritatis,
            ratione.
            Dignissimos et eum maxime consequuntur aut fugit quae. Saepe voluptate corporis, facilis dolores odio
            labore. Mollitia</p>

        <div class="mt-6">
            <button wire:navigate href="/about" class="md:px-6 px-10 md:py-2 py-4 capitalize text-white font-semibold rounded-full bg-blue-700 hover:bg-blue-600 transition-all ease-in-out duration-100"> read more</button>
        </div>
    </div>

    {{-- Right side --}}
    <div class="flex flex-col items-center md:w-[50%] w-full h-[100%] px-3 md:px-5 mt-5 md:mt-0 relative">
        <img class="rounded-xl w-[500px] z-10" src="7.png" alt="">
        <div class="md:h-[350px] h-[50%] md:w-[50%] w-[200px] top-12 rounded-full bg-blue-700 opacity-35 blur-3xl absolute"></div>
    </div>
</div>

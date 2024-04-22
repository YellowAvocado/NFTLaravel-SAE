<x-app-layout>
{{--<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
</x-slot>--}}

    {{--container--}}
    <div class="container mx-auto rounded-xl backdrop-blur w-[250px] m-6">

        <div class="flex flex-col mt-52  mx-auto">
            <div class="bg-[url('/public/sources/group_4_3x.webp')] mx-auto bg-contain bg-no-repeat bg-cover w-[222px] h-[162px] m-6"></div>
            <a href="/generate"><div class="bg-[url('/public/sources/group_11_2x.webp')] mx-auto mt-8 bg-contain bg-no-repeat w-[106px] h-[90px] m-6"></div></a>
        </div>
    </div>

    {{--generate NFT link--}}
    <div class="mt-48 pb-8 text-center">
        <a class="border-4 border-t-0 border-r-0 border-yellowy rounded-2xl bg-transparent font-cambay text-xl font-medium bg-black/20 focus:bg-black/50 hover:border-yellow-200 hover:font-medium text-yellowy mx-12 px-[30px] py-[15px] mb-[20px] transition ease-in-out duration-300 mr-5" href="/generate">generate</a>
    </div>

</x-app-layout>



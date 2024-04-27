<x-app-layout>
{{--<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
</x-slot>--}}

    {{--container--}}
    <div class="max-w-container mx-auto bg-fixed bg-[url('/public/sources/GridPatternBackground.webp')] bg-contain bg-no-repeat bg-cover">
        <div class="backdrop-blur-lg hover:backdrop-blur-2xl transition ease-in-out duration-700">
            <div class="container mx-auto backdrop-blur-lg rounded-xl backdrop-blur-0">

                {{--LOGO--}}
                <div class="ml-12 flex flex-row justify-between h-16">
                    <div class="shrink-0 items-center mt-8 h-[50px] w-[50px]">
                        <a class="" href="{{ route('dashboard') }}">
                            <div class="bg-[url('/public/sources/kargonft_2x.webp')] h-[61px] w-[136px] bg-contain bg-no-repeat"></div>
                        </a>
                    </div>
                </div>
            </div>
            {{--central text--}}
            <div class="flex flex-col pt-52 mx-auto pb-28">
                <div class="bg-[url('/public/sources/group_4_3x.webp')] mx-auto bg-contain bg-no-repeat bg-cover w-[222px] h-[162px] m-6"></div>
                <a href="/generate"><div class="bg-[url('/public/sources/group_11_2x.webp')] mx-auto mt-8 bg-contain bg-no-repeat w-[106px] h-[90px] m-6"></div></a>
            </div>
        </div>
    </div>

            <div class="flex justify-between bg-[#FFF5E7]">
                <div class="bg-[url('/public/sources/imagination_ai_nft_2x.webp')] bg-contain bg-no-repeat w-[170px] h-[120px] m-12"></div>
                <div class="hidden md:block bg-[url('/public/sources/group_8_2x.webp')] bg-cover bg-contain bg-no-repeat w-[200px] h-[55px] my-auto m-12"></div>
            </div>

            {{--abstract image container--}}
            <div class="max-w-container mx-auto bg-fixed bg-[url('/public/sources/img-RHmI6pGco1asofSO42gt.png')] bg-contain bg-no-repeat bg-cover">
                <div class="backdrop-blur-md p-2 sm:p-9 hover:backdrop-blur-xl transition ease-in-out duration-700 sm:px-[50px]">
                    <div class="bg-[url('/public/sources/group_7_2x.webp')] mt-4 animate-pulse h-[100px] w-[100px] bg-contain bg-no-repeat mx-auto"></div>
                    {{--nft card--}}
                    <div class="mx-60% block lg:flex flex-row justify-center m-6">
                        <a href="/generate"><div class="mx-auto m-6 w-[90%] sm:w-[400px] h-[300px] lg:mx-4 bg-[url('/public/sources/img-LA00zKwdW8wwma2p80Jn.png')] bg-cover bg-center bg-no-repeat rounded-xl"></div></a>
                        {{--text--}}
                            <div class="relative mx-auto lg:mx-4 w-[90%] sm:w-[400px] sm:h-[300px] bg-white m-6 p-6 rounded-xl">
                                <a href="generate"><h1 class="text-[36px]">Create NFT</h1></a>
                                <a href="/generate"><p class="pb-14">with kargo NFT create trendy NFT's in few seconds. Express your whishes in prompt and automaticaly transfet token to the wallet</p></a>
                                <a href="/generate"><div class="absolute bg-[url('/public/sources/digital-wallet.png')] w-[40px] h-[40px] bg-cover bg-center bg-no-repeat bottom-8 right-6 sm:right-12"></div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>



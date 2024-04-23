<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
</x-slot>

    {{--container--}}
    <div class="max-w-container mx-auto bg-fixed bg-[url('/public/sources/AbstractPatternBackground.webp')] bg-contain bg-no-repeat bg-cover">
        <div class="backdrop-blur-lg hover:backdrop-blur-2xl transition ease-in-out duration-700">
            <div class="container mx-auto backdrop-blur-lg rounded-xl backdrop-blur-0">

                <div class="flex flex-row justify-between h-16">
                    @include('layouts.navigation')

                    <!-- Page Heading -->
                    {{--@if (isset($header))
                        <header class="dark:bg-gray-800 shadow">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif--}}
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
                <div class="backdrop-blur-md hover:backdrop-blur-xl transition ease-in-out duration-700 px-[50px] p-9">
                    <div class="bg-[url('/public/sources/group_7_2x.webp')] animate-pulse h-[100px] w-[100px] bg-contain bg-no-repeat mx-auto"></div>
                    {{--nft card--}}
                    <div class="mx-60% flex flex-row justify-center m-6">
                        <div class="bg-[url('/public/sources/img-LA00zKwdW8wwma2p80Jn.png')] w-[400px] h-[300px] bg-cover bg-center bg-no-repeat rounded-xl m-6"></div>
                        {{--text--}}
                            <div class="relative w-[400px] h-[300px] bg-white m-6 p-6 rounded-xl">
                                <h1 class="text-[36px]">Create NFT</h1>
                                <p>with kargo NFT create trendy NFT's in few seconds. Express your whishes in prompt and automaticaly transfet token to the wallet</p>
                                <div class="absolute bg-[url('/public/sources/digital-wallet.png')] w-[40px] h-[40px] bg-cover bg-center bg-no-repeat bottom-8 right-12"></div>
                            </div>
                        </div>
                    </div>
                </div>


                {{--generate NFT link--}}
                <div class="mt-48 pb-8 text-center">
                    <a class="border-4 border-t-0 border-r-0 border-yellowy rounded-2xl bg-transparent font-cambay text-xl font-medium bg-black/20 focus:bg-black/50 hover:border-yellow-200 hover:font-medium text-yellowy mx-12 px-[30px] py-[15px] mb-[20px] transition ease-in-out duration-300 mr-5 after:content-['_↗']" href="/generate">generate</a>
                </div>
            </div>
</x-app-layout>



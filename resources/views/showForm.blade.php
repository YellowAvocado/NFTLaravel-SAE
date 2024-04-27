<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mx-auto shrink-0 items-center h-[50px]">
        <a class="mx-auto" href="{{ route('dashboard') }}">
            <div class="mx-auto mt-[100px] bg-[url('/public/sources/kargo_nft_3x.webp')] h-[150px] sm:w-[300px] w-[150px] bg-contain bg-no-repeat"></div>
        </a>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                <div class="max-w-container rounded-xl mt-6 px-6 py-4 overflow-hidden sm:rounded-lg justify-center w-90">

                    <form wire:submit.prevent="submitForm" class="relative mx-auto mt-12 sm:mt-48 flex flex-col sm:w-[60%]" action="/generate" method="post" enctype="multipart/form-data">
                        @csrf
                        <input wire:model.defer="title"  class="mt-4 text-yellowy block w-full placeholder:text-yellowy border-4 border-t-0 border-r-0 border-yellowy rounded-xl bg-transparent focus:bg-black/50 focus:ring-0 focus:border-yellowy transition ease-in-out duration-300" type="text" name="title" placeholder="enter title">
                        @error('title') <span class="text-red-500">{{ $message }}</span> @enderror

                        <input wire:model.defer="prompt" class="mt-4 text-yellowy block w-full placeholder:text-yellowy border-4 border-t-0 border-r-0 border-yellowy rounded-xl bg-transparent focus:bg-black/50 focus:ring-0 focus:border-yellowy transition ease-in-out duration-300" placeholder="insert prompt" type="text" name="prompt">
                        @error('prompt') <span class="text-red-500">{{ $message }}</span> @enderror

                        <input wire:model.defer="address" class="mt-4 text-yellowy block w-full placeholder:text-yellowy border-4 border-t-0 border-r-0 border-yellowy rounded-xl bg-transparent focus:bg-black/50 focus:ring-0 focus:border-yellowy transition ease-in-out duration-300" placeholder="insert wallet" type="text" name="address">
                        @error('address') <span class="text-red-500">{{ $message }}</span> @enderror

                        <button class="text-[17px] text-[#FFF5E7] bg-yellowy text-[#4b5563] sm:w-[90%] rounded-lg mt-8 h-[45px] hover:bg-yellow-300 focus:bg-yellow-500 transition ease-in-out duration-300">generate</button>
                        <div class="hidden md:block absolute bg-[url('/public/sources/digital-wallet-brown.png')] w-[40px] h-[40px] bg-cover bg-center bg-no-repeat bottom-[5px] right-0"></div>
                    </form>

                </div>

                <div class="mt-20 sm:mt-48 block sm:grid grid-cols-2 gap-4">
                    @foreach($nfts as $nft)
                        {{--@foreach($types as $type)--}}
                        <div class="relative rounded-lg m-4 bg-white bg-clip-border text-gray-700">
                            <div class="rounded-lg m-4 overflow-hidden bg-transparent bg-clip-border text-gray-700 shadow-none">
                                <img class="rounded-2xl mt-6 sm:mt-0" src="{{ asset('storage/assets/' . $nft->image_path) }}" alt="project image">
                            </div>
                            <div class="p-2 sm:p-4 ml-2 sm:ml-0">
                                <h4 class="block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-700 antialiased">
                                    <span class="text-gray-700 text-[16px] sm:text-[20px]">{{ $nft->title }}</span>
                                </h4>
                            </div>

                            <form class="text-red-700" action="{{route('generate.destroy', $nft->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="submit absolute bottom-4 right-4 bg-[url('/public/sources/delete_icon.png')] w-[30px] h-[30px] bg-cover bg-center bg-no-repeat bottom-[5px]" onclick="return confirm('Do you want to delete {{$nft->title}} NFT? Keep in mind you are not deleting NFT from the wallet!');"></button>
                            </form>

                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

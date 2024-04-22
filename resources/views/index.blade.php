<x-app-layout>
    {{--<x-slot name="header">
        <h2 class="font-semibold text-xl text-amber-600 dark:text-gray-200 leading-tight">
            <p class="text-amber-600">Generated NFTS</p>
        </h2>
    </x-slot>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid">
                <div class="grid gap-10 justify-center w-90">
                    <div class="bg-[url('storage/assets/img-KdTbSv6rwhAA3dDGMqGZ.png')] h-[50px]  border-2 border-red-700 bg-contain"></div>


                    <form action="/generate" method="post" enctype="multipart/form-data">
                        @csrf

                        <label class="">Title of NFT</label>
                        <input type="text" name="title" placeholder="Enter title">

                        <label>Insert prompt</label>
                        <input type="text" name="prompt">

                        <label>Insert wallet address</label>
                        <input type="text" name="address">

                        <button>Send</button>

                    </form>
                </div>
                @foreach($nfts as $nft)
                    {{--@foreach($types as $type)--}}
                    <div class="bg-white bg-clip-border text-gray-700" >
                        <div class="m-6 overflow-hidden bg-transparent bg-clip-border text-gray-700 shadow-none">
                            <img src="{{ asset('storage/assets/' . $nft->image_path) }}" alt="project image">
                        </div>
                        <div class="p-6">
                            <h4 class="block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-700 antialiased">
                                <span class="text-blue-gray-500">{{ $nft->title }}</span>
                            </h4>
                        </div>
                        {{--<div class="flex items-center justify-between p-6">
                            <a href="{{ route('nfts.show', $nft->id ) }}">Show this project</a>
                        </div>--}}
                    </div>
                    {{--@endforeach--}}
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

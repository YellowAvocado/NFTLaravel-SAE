<x-app-layout>
    <div class="py-12">
        <div class="grid justify-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-300 overflow-hidden shadow-sm w-96">
                <div class="grid justify-center p-6">

                    @if (session()->has('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <h2>Create project </h2>

                        <form action="/generate" method="post">
                            @csrf

                            <label>Insert prompt</label>
                            <input type="text" name="prompt">

                            <label>Insert wallet address</label>
                            <input type="text" name="address">

                            <button>Send</button>

                        </form>


                        @foreach ($nfts as $nft)
                            <div>
                                <img src="{{ asset('storage/app/assets/' . $nft->image_path) }}" alt="NFT Image">
                                <p>Title: {{ $nft->title }}</p>
                                <!-- Other NFT details -->
                            </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>


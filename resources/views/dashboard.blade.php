<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
</x-slot>


    <div class="py-12">
        <a href="/generate">Generate NFT</a>
        <a href="/image">NFT list</a>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="ml-12 flex flex-row justify-between h-16">
        <div class="shrink-0 items-center mt-8 h-[50px] w-[50px]">
            <a class="" href="{{ route('dashboard') }}">
                <div class="bg-[url('/public/sources/kargo_nft_3x.webp')] h-[61px] w-[136px] bg-contain bg-no-repeat"></div>
            </a>
        </div>
    </div>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="p-6 text-gray-900 dark:text-gray-100">Users table</div>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-left text-sm font-light">
                                    <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">#</th>
                                        <th scope="col" class="px-6 py-4">name</th>
                                        <th scope="col" class="px-6 py-4">email</th>
                                        <th scope="col" class="px-6 py-4">delete</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $user->id }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $user->name}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $user->email }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <form class="text-red-700" action="{{route('admin.destroy', $user->id)}}" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit" onclick="return confirm('Do you want to delete {{$user->name}} user');">Delete</button>
                                                </form>
                                            </td>
                                        </tr>

                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>


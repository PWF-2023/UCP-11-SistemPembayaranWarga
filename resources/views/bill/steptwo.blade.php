<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Bill') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <ol class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white  shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4">
                    <li class="flex items-center">
                        <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                            1
                        </span>
                        Bill <span class="hidden sm:inline-flex sm:ml-2">Info</span>
                        <svg class="w-3 h-3 ml-2 sm:ml-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>
                    </li>
                    <li class="flex items-center text-blue-600 dark:text-blue-500">
                        <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500 ">
                            2
                        </span>
                        Account <span class="hidden sm:inline-flex sm:ml-2">Info</span>

                    </li>
                </ol>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('bill.steptwo')}}">
                        @csrf
                        @method('post')
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            <input type="checkbox" name="" id="select_all_ids">
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            NIK
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        <th scope="col" class="hidden px-6 py-3 md:block">
                                            Address
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Contact
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $index => $user)
                                    <tr class="odd:bg-white odd:dark:bg-gray-800 even:bg-gray-50 even:dark:bg-gray-700">
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <input type="checkbox" name="ids[]" class="checkbox_ids" value="{{ $user->id }}">
                                        </td>
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <p>{{ $index +1 }}</p>
                                        </td>
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <p>{{ $user->nik }}</p>
                                        </td>
                                        <td class="px-6 py-4 font-medium text-gray-900 md:whitespace-nowrap dark:text-white">
                                            <p>{{ $user->name }}</p>
                                        </td>
                                        <td class="hidden px-6 py-4 md:block">
                                            <p>{{ $user->address }}</p>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <p>{{ $user->contact }}</p>
                                        </td>

                                    </tr>
                                    @empty
                                    <tr class="bg-white dark:bg-gray-800">
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            Empty
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="flex items-center gap-4 mt-5">
                            <x-primary-button>{{ __('Submit') }}</x-primary-button>
                            <x-back-button href="{{ route('bill.stepone') }}"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

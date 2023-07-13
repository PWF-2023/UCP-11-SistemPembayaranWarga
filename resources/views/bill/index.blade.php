<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tagihan') }}
        </h2>
    </x-slot>

    <div class="w-full">

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="p-6 text-xl text-gray-900 dark:text-gray-100">
                        <div class="flex items-center justify-between">
                            <div>
                                <x-button href="" />
                            </div>
                            <div>
                                @if (session('success'))
                                <p x-data="{ show: true }" x-show="show" x-transition
                                    x-init="setTimeout(() => show = false, 5000)"
                                    class="text-sm text-green-600 dark:text-green-400">{{ session('success') }}
                                </p>
                                @endif
                                @if (session('danger'))
                                <p x-data="{ show: true }" x-show="show" x-transition
                                    x-init="setTimeout(() => show = false, 5000)"
                                    class="text-sm text-red-600 dark:text-red-400">{{ session('danger') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="relative overflow-x-auto">

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tipe
                                    </th>
                                    <th scope="col" class="hidden px-6 py-3 md:block">
                                        Panggal Tagihan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nominal
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($bills as $bill)
                                <tr class="odd:bg-white odd:dark:bg-gray-800 even:bg-gray-50 even:dark:bg-gray-700">
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <p></p>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 md:whitespace-nowrap dark:text-white">
                                        <p>{{ $bill->type }}</p>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 md:whitespace-nowrap dark:text-white">
                                        <p>{{ $bill->date_bill }}</p>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 md:whitespace-nowrap dark:text-white">
                                        <p>{{ $bill->nominal }}</p>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 md:whitespace-nowrap dark:text-white">
                                        <p></p>
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

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ID Tagihan
                                    </th>
                                    <th scope="col" class="hidden px-6 py-3 md:block">
                                        Nama Warga
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Tagihan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal Tagihan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nominal
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Keterangan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($status_bills as $status_bill)
                                <tr class="odd:bg-white odd:dark:bg-gray-800 even:bg-gray-50 even:dark:bg-gray-700">
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <p></p>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 md:whitespace-nowrap dark:text-white">
                                        <p></p>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 md:whitespace-nowrap dark:text-white">
                                        <p></p>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 md:whitespace-nowrap dark:text-white">
                                        <p></p>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 md:whitespace-nowrap dark:text-white">
                                        <p></p>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 md:whitespace-nowrap dark:text-white">
                                        <p></p>
                                    </td>
                                    <td class="hidden px-6 py-4 md:block">
                                        <p></p>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <p></p>
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

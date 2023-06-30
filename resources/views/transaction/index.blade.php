<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pembayaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="relative overflow-x-auto">
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
                            Tanggal Pembayaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nominal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
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
                        <td class="hidden px-6 py-4 md:block">
                            <p></p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

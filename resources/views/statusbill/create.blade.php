<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('StatusBill') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('statusbill.create', $bill)}}">
                        @csrf
                        @method('patch')
                        <div class="mb-6">
                            <x-input-label for="type" :value="__('Type')" />
                            <x-text-input id="type" name="type" type="text" class="block w-full mt-1" :value="old('type', $bill->type)"
                                autofocus autocomplete="type" disabled />
                            <x-input-error class="mt-2" :messages="$errors->get('type')" />
                        </div>
                        <div class="mb-6">
                            <x-input-label class="mb-2" for="date_bill" :value="__('Tanggal tenggang (YYYY-MM-DD)')" />
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                  <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                  </svg>
                                </div>
                                <input datepicker id="date_bill" name="date_bill" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required
                                autofocus autocomplete="date_bill" :value="old('date_bill')" datepicker-format="yyyy-mm-dd" placeholder="Select date">
                              </div>
                        </div>
                        <div class="mb-6">
                            <x-input-label for="nominal" :value="__('Nominal')" />
                            <x-text-input id="nominal" name="nominal" type="text" class="block w-full mt-1" required
                                autofocus autocomplete="nominal"  />
                            <x-input-error class="mt-2" :messages="$errors->get('nominal')" :value="old('nominal', $bill->nominal)"/>
                        </div>

                        <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">

                            <div class="px-6 text-xl text-gray-900 dark:text-gray-100">
                                <div class="flex items-center justify-between">
                                    <div></div>
                                    <div>
                                        @if (session('success'))
                                        <p x-data="{ show: true }" x-show="show" x-transition
                                            x-init="setTimeout(() => show = false, 5000)"
                                            class="pb-3 text-sm text-green-600 dark:text-green-400">{{ session('success') }}
                                        </p>
                                        @endif
                                        @if (session('danger'))
                                        <p x-data="{ show: true }" x-show="show" x-transition
                                            x-init="setTimeout(() => show = false, 5000)"
                                            class="pb-3 text-sm text-red-600 dark:text-red-400">{{ session('danger') }}
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
                                                <input type="checkbox" name="ids" class="checkbox_ids" id="" value="{{ $user->id }}">
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
                            {{-- @if ($users->hasPages())
                            <div class="p-6">
                                {{ $users->links() }}
                            </div>
                            @endif --}}
                        </div>
                        <div class="flex items-center gap-4 mt-5">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                            <x-cancel-button href="" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

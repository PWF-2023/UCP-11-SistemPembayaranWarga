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
                    <li class="flex items-center text-blue-600 dark:text-blue-500">
                        <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                            1
                        </span>
                        Bill <span class="hidden sm:inline-flex sm:ml-2">Info</span>
                        <svg class="w-3 h-3 ml-2 sm:ml-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                            2
                        </span>
                        Account <span class="hidden sm:inline-flex sm:ml-2">Info</span>
                        <svg class="w-3 h-3 ml-2 sm:ml-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>
                    </li>
                </ol>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('bill.store')}}">
                        @csrf
                        @method('post')
                        <div class="mb-6">
                            <x-input-label for="type" :value="__('Type')" />
                            <x-text-input id="type" name="type" type="text" class="block w-full mt-1" required
                                autofocus autocomplete="type" :value="old('type')" />
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
                            <x-text-input id="nominal" name="nominal" type="number" class="form-control w-full mt-1" required
                                autofocus autocomplete="nominal" :value="old('nominal')" />
                            <x-input-error class="mt-2" :messages="$errors->get('nominal')" />
                        </div>
                        <div class="flex items-center gap-4 mt-5">
                            {{-- <x-primary-button>{{ __('Save') }}</x-primary-button> --}}
                            <x-primary-button href="{{ route('bill.steptwo') }}">{{ __('Save and Next') }}</x-primary-button>
                            <x-cancel-button href="{{ route('bill.index') }}" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

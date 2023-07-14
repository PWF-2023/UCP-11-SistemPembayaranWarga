<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Bill') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
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
                            <x-input-label for="date_bill" :value="__('Tanggal tenggang (YYYY-MM-DD)')" />
                            <x-text-input id="date_bill" name="date_bill" type="text" class="form-control datepicker" required
                                autofocus autocomplete="date_bill" :value="old('date_bill')" />
                            <x-input-error class="mt-2" :messages="$errors->get('date_bill')" />
                        </div>
                        <div class="mb-6">
                            <x-input-label for="nominal" :value="__('Nominal')" />
                            <x-text-input id="nominal" name="nominal" type="text" class="block w-full mt-1" required
                                autofocus autocomplete="nominal" :value="old('nominal')" />
                            <x-input-error class="mt-2" :messages="$errors->get('nominal')" />
                        </div>
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                            <x-cancel-button href="{{ route('bill.index') }}" />
                        </div>
                    </form>
                    {{-- <form method="post" action="{{ route('todo.store') }}" class="">
                        @csrf
                        @method('post')
                        <div class="mb-6">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" name="title" type="text" class="block w-full mt-1" required
                                autofocus autocomplete="title" :value="old('title')" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div class="mb-6">
                            <x-input-label for="category_id" :value="__('Category')" />
                            <x-select id="category_id" name="category_id" class="block w-full mt-1">
                                <option value="">Empty</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id')==$category->id ?
                                    'selected' : '' }}>
                                    {{ $category->title }}
                                </option>
                                @endforeach
                            </x-select>
                            <x-input-error class="mt-2" :messages="$errors->get('category_id')" />
                        </div>
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                            <x-cancel-button href="{{ route('todo.index') }}" />
                        </div>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

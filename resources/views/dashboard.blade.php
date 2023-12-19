<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Currency Converter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Input Field for Base Currency and Convert-to Currency -->
                    <form action="{{ route('dashboard') }}" method="post">
                        @csrf

                        <div class="mb-4">
                            <label for="currency" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Currency</label>
                            <div class="relative">
                                <input type="text" name="currency" id="currency" placeholder="Select a country and enter amount" class="block appearance-none w-full bg-white border border-gray-300 p-2 rounded-md">
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <!-- SVG or other indicator for the dropdown arrow -->
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Convert</button>
                    </form>

                    <!-- Result Display Section (You can customize this based on your logic) -->
                    @isset($result)
                        <div class="mt-4">
                            <p class="text-lg font-semibold">Conversion Result:</p>
                            <p>{{ $result }}</p>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

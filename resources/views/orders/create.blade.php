<x-app-layout :title="'Create Order'">
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('New Order') }}
        </h2>
        <a href="{{ route('orders.all') }}" class="inline-flex space-x-2 items-center px-4 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-indigo-100 text-sm font-medium hover:text-white hover:shadow-md rounded">
            <svg data-slot="icon" class="w-4 h-4" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"></path>
</svg>

            <span>View all orders</span>
        </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-3 text-gray-900 sm:p-0">

                    @if ($errors->any())
                    <div class="p-4 bg-red-100 rounded-lg">
                        @foreach ($errors->all() as $error)
                            <p class="text-red-900">🙅 {{ $error }}</p>
                        @endforeach
                    </div>
                    @endif

                    <form action="{{ route('orders.store') }}" method="POST" class="flex flex-col w-full p-6 space-y-4 bg-gray-100 rounded-lg md:w-9/12 lg:w-6/12">
                        <div class="flex flex-col space-y-2">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" id="name" class="px-3 py-2 border border-gray-300 rounded-lg focus:shadow-lg">
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" value="{{ old('phone') }}" id="phone" class="px-3 py-2 border border-gray-300 rounded-lg focus:shadow-lg">
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="weight">Weight (kg)</label>
                            <input type="number" value="0" step=".1" value="{{ old('weight') }}" name="weight" id="weight" class="px-3 py-2 border border-gray-300 rounded-lg focus:shadow-lg">
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="details">Details</label>
                            <textarea name="details" id="details"  value="{{ old('details') }}" class="px-3 py-2 border border-gray-300 rounded-lg focus:shadow-lg" placeholder="Details about the order, any relevant info."></textarea>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="pickup_date">Pickup Time</label>
                            <input type="datetime-local" name="pickup_date"  value="{{ old('pickup_date') }}" id="pickup_date" class="px-3 py-2 border border-gray-300 rounded-lg focus:shadow-lg">
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="advance_payment_amount">Advance Payment (lei)</label>
                            <input type="number" name="advance_payment_amount" value="0" id="advance_payment_amount"  value="{{ old('advance_payment_amount') }}" class="px-3 py-2 border border-gray-300 rounded-lg focus:shadow-lg">
                            <input type="hidden" name="rest_payment_amount" value="0" />
                            <input type="hidden" name="notes" value="0" />
                        </div>
                        @csrf

                         <div class="flex flex-col space-y-2">
                            <button type="submit" class="bg-indigo-600 px-4 py-2.5 font-medium text-white hover:bg-indigo-500 rounded hover:shadow">Create Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

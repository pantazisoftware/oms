<x-app-layout :title="'Upcoming Orders'">
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Upcoming Orders') }}
        </h2>
        <a href="{{ route('orders.create')}}" class="inline-flex space-x-2 items-center px-4 py-2.5 bg-indigo-600 hover:bg-indigo-500 text-indigo-100 text-sm font-medium hover:text-white hover:shadow rounded">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 stroke-2">
  <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
</svg>

            <span>New Order</span>
        </a>
        </div>
    </x-slot>

    <div class="py-8" x-data="{ showModal: false, order: [] }">
        <div class="mx-auto max-w-7xl">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-3 text-gray-900 sm:p-0">
                    @if($orders->isEmpty())
                    <div class="p-4 my-3 rounded bg-sky-200 text-sky-800">
                        <p>No orders for today.</p>
                    </div>
                    @endif

                    @if(session()->has('success'))
                        <div class="p-4 my-3 rounded-lg bg-emerald-100 text-emerald-800">
                            <p>{{ session()->get('success') }}</p>
                        </div>
                    @endif

                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                        @foreach ($orders as $order)
                        <div class="flex flex-col overflow-hidden bg-white border border-gray-200 rounded-md">
                            <div class="flex flex-row items-center justify-between w-full p-3 bg-gray-100 border-b-4 border-gray-200">
                                <p class="text-lg font-medium">{{ $order->name }}</p>
                                <a href="tel://{{ $order->phone }}" class="inline-flex space-x-2 text-sm items-center bg-indigo-600 hover:shadow-indigo-900 hover:bg-indigo-500 text-white rounded px-3 py-1.5 font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                                            </svg>
                                            <span>{{$order->phone}}</span>
                                        </a>
                            </div>
                            <div class="flex flex-col p-4 space-y-3 text-gray-500 bg-white">
                                <div id="field" class="inline-flex items-center space-x-1">
                                    <div class="p-2 rounded bg-slate-200 text-slate-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M11.097 1.515a.75.75 0 0 1 .589.882L10.666 7.5h4.47l1.079-5.397a.75.75 0 1 1 1.47.294L16.665 7.5h3.585a.75.75 0 0 1 0 1.5h-3.885l-1.2 6h3.585a.75.75 0 0 1 0 1.5h-3.885l-1.08 5.397a.75.75 0 1 1-1.47-.294l1.02-5.103h-4.47l-1.08 5.397a.75.75 0 1 1-1.47-.294l1.02-5.103H3.75a.75.75 0 0 1 0-1.5h3.885l1.2-6H5.25a.75.75 0 0 1 0-1.5h3.885l1.08-5.397a.75.75 0 0 1 .882-.588ZM10.365 9l-1.2 6h4.47l1.2-6h-4.47Z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p>Order ID:</p>
                                    <span class="font-medium text-black">{{ $order->id }}</span>
                                </div>
                                <div id="field" class="inline-flex items-center space-x-1">
                                    <div class="p-2 rounded bg-slate-200 text-slate-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M12 2.25a.75.75 0 0 1 .75.75v.756a49.106 49.106 0 0 1 9.152 1 .75.75 0 0 1-.152 1.485h-1.918l2.474 10.124a.75.75 0 0 1-.375.84A6.723 6.723 0 0 1 18.75 18a6.723 6.723 0 0 1-3.181-.795.75.75 0 0 1-.375-.84l2.474-10.124H12.75v13.28c1.293.076 2.534.343 3.697.776a.75.75 0 0 1-.262 1.453h-8.37a.75.75 0 0 1-.262-1.453c1.162-.433 2.404-.7 3.697-.775V6.24H6.332l2.474 10.124a.75.75 0 0 1-.375.84A6.723 6.723 0 0 1 5.25 18a6.723 6.723 0 0 1-3.181-.795.75.75 0 0 1-.375-.84L4.168 6.241H2.25a.75.75 0 0 1-.152-1.485 49.105 49.105 0 0 1 9.152-1V3a.75.75 0 0 1 .75-.75Zm4.878 13.543 1.872-7.662 1.872 7.662h-3.744Zm-9.756 0L5.25 8.131l-1.872 7.662h3.744Z" clip-rule="evenodd" />
                                        </svg>

                                    </div>
                                    <p>Weight:</p>
                                    <span class="font-medium text-black">{{ $order->weight }} kg</span>
                                </div>
                                <div id="field" class="inline-flex items-center space-x-1">
                                    <div class="p-2 rounded bg-slate-200 text-slate-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p>Pickup at:</p>
                                    <span class="font-medium text-black">{{ $order->pickup_date->format('d M Y H:i') }}</span>
                                </div>
                                <div id="field" class="inline-flex items-center space-x-1">
                                    <div class="p-2 rounded bg-slate-200 text-slate-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                        <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                        <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z" clip-rule="evenodd" />
                                        <path d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                                        </svg>

                                    </div>
                                    <p>Advance Payment:</p>
                                    <span class="font-medium text-black">{{ $order->advance_payment_amount }} lei</span>
                                </div>
                                <div id="field" class="inline-flex items-center space-x-1">
                                    <div class="p-2 rounded bg-slate-200 text-slate-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                        <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                        <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z" clip-rule="evenodd" />
                                        <path d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                                        </svg>

                                    </div>
                                    <p>Rest Payment:</p>
                                    <span class="font-medium text-black">{{ $order->rest_payment_amount }} lei</span>
                                </div>
                                <div id="field" class="inline-flex items-center space-x-1">
                                    <div class="p-2 rounded bg-slate-200 text-slate-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z" clip-rule="evenodd" />
                                        <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                                        </svg>

                                    </div>
                                    <p>Details:</p>

                                </div>
                                <div id="field" class="inline-flex items-center px-1 space-x-1">
                                    <span class="font-medium text-black">{{ $order->details }}</span>
                                </div>
                                {{-- @if ($order->notes !== "0")
                                <div class="flex flex-col p-2 space-y-2 bg-gray-100 rounded">
                                    <div id="field" class="inline-flex items-center space-x-1">
                                    <div class="p-2 rounded bg-slate-300 text-slate-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z" clip-rule="evenodd" />
                                        </svg>


                                    </div>
                                    <p>Notes:</p>

                                </div>
                                <div id="field" class="inline-flex items-center px-1 space-x-1">
                                    <span class="font-medium text-black">{{ $order->notes }}</span>
                                </div>
                                </div>
                                 @endif --}}

                                <div class="relative flex flex-row w-full gap-2 overflow-hidden rounded-lg justify-evenly">

                                    <button
        x-on:click.prevent="$dispatch('open-modal', 'notes{{$order->id}}');" class="inline-flex items-center justify-center w-full py-2 space-x-2 overflow-hidden text-sm font-medium text-gray-800 border border-gray-200 rounded-l-lg hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                                        </svg>
                                        {{-- @dd($order->note) --}}
                                        @if(count($order->note))
                                        <span class="absolute left-0 w-3 h-3 rotate-45 bg-indigo-500 rounded-full top-3 animate-pulse"></span>
                                        @endif
                                        <span>Notes</span>
                                    </button>

                                    <button x-on:click.prevent="$dispatch('open-modal', 'payment{{$order->id}}');" class="inline-flex items-center justify-center w-full py-2 space-x-2 text-sm font-medium text-white border border-transparent bg-emerald-600 hover:bg-emerald-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                        <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                        <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z" clip-rule="evenodd" />
                                        <path d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                                        </svg>


                                        <span>Payment</span>
                                    </button>

                                </div>

                            </div>
                        </div>
                        <!-- display notes modal -->
                        <x-modal name="notes{{$order->id}}" focusable>
                        <form method="post" x-model="notes" action="{{ route('notes.store') }}" class="p-6">
                            @csrf
                            @method('post')

                            <h2 class="text-lg font-medium text-gray-900">
                                Notes for #{{$order->id}} / {{$order->name}}
                            </h2>

                            <div class="flex flex-col my-2 space-y-2 rounded-lg">

                                @forelse($order->note as $note)
                                    <p class="inline-flex items-center p-2 space-x-2 bg-white border border-gray-200 rounded">
                                        <span class="px-3 py-1.5 text-xs text-gray-500 rounded-full bg-sky-100">{{$note->created_at->format('d.m.Y H:i')}}</span>
                                        <span class="font-medium">
                                            {{$note->content}}
                                        </span>
                                    </p>
                                @empty
                                    <p class="p-4 text-red-800 bg-red-100 rounded-lg">😌 I can't find any notes attached to this order.</p>
                                @endforelse
                            </div>

                            <div class="mt-6">
                                <x-input-label for="note" value="{{ __('Note') }}" class="sr-only" />
                                <input type="hidden" name="order_id" value="{{$order->id}}">
                                <x-text-input
                                    id="note"
                                    name="content"
                                    type="text"
                                    class="block w-full mt-1"
                                    placeholder="{{ __('Write down the note') }}"
                                />
                            </div>

                            <div class="flex justify-start mt-6">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-secondary-button>

                                <x-primary-button class="ms-3">
                                    {{ __('Add Note') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </x-modal>
                    <!-- end of modal -->

                    <!-- display payment modal -->
                        <x-modal name="payment{{$order->id}}" focusable>
                        <form method="post" x-model="payment" action="{{ route('orders.storePayments') }}" class="p-6">
                            @csrf
                            @method('post')
                            @if($order->rest_payment_amount > 0)
                            <p class="inline-flex items-center space-x-4 text-lg font-medium text-gray-900"><span class="text-5xl">🙈</span> <span>Edit Final Payment</span></p>
                            @else
                            <h2 class="text-lg font-medium text-gray-900">
                                Payment Details for #{{$order->id}} / {{$order->name}}
                            </h2>
                            @endif

                            <div class="flex flex-row my-4 space-x-4 rounded-lg justify-evenly">
                                <div class="w-full p-4 bg-gray-100 rounded-lg">
                                    <p class="text-sm text-gray-500">Advance Payment</p>
                                    <p class="inline-flex items-center space-x-2 text-2xl font-bold"><span>{{$order->advance_payment_amount}}</span> <span class="text-sm text-gray-500">lei</span></p>
                                </div>
                                <div class="w-full p-4 bg-gray-100 rounded-lg">
                                    <p class="text-sm text-gray-500">Rest/final Payment</p>
                                    <p class="inline-flex items-center space-x-2 text-2xl font-bold"><span>{{$order->rest_payment_amount}}</span> <span class="text-sm text-gray-500">lei</span></p>
                                </div>
                            </div>

                            <div class="mt-6">
                                <x-input-label for="advance_payment" value="{{ __('Advance Payment (lei)') }}" />
                                <input type="number" name="advance_payment_amount" placeholder="Fill in the advance payment received (lei)" id="advance_payment" class="block w-full mt-1 mb-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                @if($order->advance_payment_amount > 0)
                                    value="{{$order->advance_payment_amount}}"
                                    @endif
                                />
                                <x-input-label for="payment" value="{{ __('Rest Payment (lei)') }}" />
                                <input type="hidden" name="order_id" value="{{$order->id}}" />
                                <input type="hidden" name="order_advance" value="{{$order->advance_payment_amount}}" />
                                <input type="hidden" name="order_rest" value="{{$order->rest_payment_amount}}" />
                                <input type="number" name="rest_payment_amount" placeholder="Fill in the rest payment received (lei)" id="payment" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                @if($order->rest_payment_amount > 0)
                                    value="{{$order->rest_payment_amount}}"
                                    @endif
                                />
                                @if($order->rest_payment_amount > 0)
                                <p class="p-4 my-2 text-sm font-medium text-red-800 bg-red-100 rounded-lg">You are editing the "final payment".</p>
                                    @endif
                            </div>

                            <div class="flex justify-start mt-6">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-secondary-button>

                                <x-primary-button class="ms-3">
                                    @if($order->rest_payment_amount > 0)
                                    {{ __('Edit Payment') }}
                                    @else
                                    {{ __('Add Payment') }}
                                    @endif
                                </x-primary-button>
                            </div>
                        </form>
                    </x-modal>
                    <!-- end of modal -->
                        @endforeach
                    </div>
                    <div class="my-3">
                        {{ $orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

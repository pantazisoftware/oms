<x-app-layout :title="'Dashboard'">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-3 text-gray-900 sm:p-0">
                    <h2 class="my-3 text-lg font-bold">Quick Overview</h2>
                   <div class="grid grid-cols-1 bg-gray-100 divide-y divide-gray-200 rounded-lg md:p-6 md:divide-y-0 md:gap-6 md:grid-cols-3">
                    <div class="p-3">
                        <p class="text-xs text-gray-500">Today's Orders</p>
                        <p class="py-2 text-4xl font-medium text-black">4</p>
                        <a href="#" class="inline-flex items-center space-x-1 text-sm text-indigo-500 hover:underline hover:text-black">
                            <span>View Today's Orders</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M15.75 2.25H21a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-1.5 0V4.81L8.03 17.03a.75.75 0 0 1-1.06-1.06L19.19 3.75h-3.44a.75.75 0 0 1 0-1.5Zm-10.5 4.5a1.5 1.5 0 0 0-1.5 1.5v10.5a1.5 1.5 0 0 0 1.5 1.5h10.5a1.5 1.5 0 0 0 1.5-1.5V10.5a.75.75 0 0 1 1.5 0v8.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V8.25a3 3 0 0 1 3-3h8.25a.75.75 0 0 1 0 1.5H5.25Z" clip-rule="evenodd" />
                            </svg>

                        </a>
                    </div>
                    <div class="p-3">
                        <p class="text-xs text-gray-500">New Orders, Last 7 Days</p>
                        <p class="py-2 text-4xl font-medium text-black">14</p>
                        <a href="#" class="inline-flex items-center space-x-1 text-sm text-indigo-500 hover:underline hover:text-black">
                            <span>View Orders</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M15.75 2.25H21a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-1.5 0V4.81L8.03 17.03a.75.75 0 0 1-1.06-1.06L19.19 3.75h-3.44a.75.75 0 0 1 0-1.5Zm-10.5 4.5a1.5 1.5 0 0 0-1.5 1.5v10.5a1.5 1.5 0 0 0 1.5 1.5h10.5a1.5 1.5 0 0 0 1.5-1.5V10.5a.75.75 0 0 1 1.5 0v8.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V8.25a3 3 0 0 1 3-3h8.25a.75.75 0 0 1 0 1.5H5.25Z" clip-rule="evenodd" />
                            </svg>

                        </a>
                    </div>
                    <div class="p-3">
                        <p class="text-xs text-gray-500">Income, Last 7 Days</p>
                        <p class="py-2 text-4xl font-medium text-black">1.350 lei</p>
                        <a href="#" class="inline-flex items-center space-x-1 text-sm text-indigo-500 hover:underline hover:text-black">
                            <span>View Orders</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M15.75 2.25H21a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-1.5 0V4.81L8.03 17.03a.75.75 0 0 1-1.06-1.06L19.19 3.75h-3.44a.75.75 0 0 1 0-1.5Zm-10.5 4.5a1.5 1.5 0 0 0-1.5 1.5v10.5a1.5 1.5 0 0 0 1.5 1.5h10.5a1.5 1.5 0 0 0 1.5-1.5V10.5a.75.75 0 0 1 1.5 0v8.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V8.25a3 3 0 0 1 3-3h8.25a.75.75 0 0 1 0 1.5H5.25Z" clip-rule="evenodd" />
                            </svg>

                        </a>
                    </div>

                    <div class="p-3">
                        <p class="text-xs text-gray-500"><span class="inline-block w-2 h-2 mr-2 bg-lime-500"></span>Upcoming Orders, In 7 Days</p>
                        <p class="py-2 text-4xl font-medium text-black">11</p>
                        <a href="#" class="inline-flex items-center space-x-1 text-sm text-indigo-500 hover:underline hover:text-black">
                            <span>View Upcoming Orders</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M15.75 2.25H21a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-1.5 0V4.81L8.03 17.03a.75.75 0 0 1-1.06-1.06L19.19 3.75h-3.44a.75.75 0 0 1 0-1.5Zm-10.5 4.5a1.5 1.5 0 0 0-1.5 1.5v10.5a1.5 1.5 0 0 0 1.5 1.5h10.5a1.5 1.5 0 0 0 1.5-1.5V10.5a.75.75 0 0 1 1.5 0v8.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V8.25a3 3 0 0 1 3-3h8.25a.75.75 0 0 1 0 1.5H5.25Z" clip-rule="evenodd" />
                            </svg>

                        </a>
                    </div>
                    <div class="p-3">
                        <p class="text-xs text-gray-500"><span class="inline-block w-2 h-2 mr-2 bg-lime-500"></span>Upcoming Orders Weight, In 7 Days</p>
                        <p class="py-2 text-4xl font-medium text-black">69 kg</p>
                        <a href="#" class="inline-flex items-center space-x-1 text-sm text-indigo-500 hover:underline hover:text-black">
                            <span>View Upcoming Orders</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M15.75 2.25H21a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-1.5 0V4.81L8.03 17.03a.75.75 0 0 1-1.06-1.06L19.19 3.75h-3.44a.75.75 0 0 1 0-1.5Zm-10.5 4.5a1.5 1.5 0 0 0-1.5 1.5v10.5a1.5 1.5 0 0 0 1.5 1.5h10.5a1.5 1.5 0 0 0 1.5-1.5V10.5a.75.75 0 0 1 1.5 0v8.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V8.25a3 3 0 0 1 3-3h8.25a.75.75 0 0 1 0 1.5H5.25Z" clip-rule="evenodd" />
                            </svg>

                        </a>
                    </div>
                    <div class="p-3">
                        <p class="text-xs text-gray-500"><span class="inline-block w-2 h-2 mr-2 bg-lime-500"></span>Upcoming Orders</p>
                        <p class="py-2 text-4xl font-medium text-black">28</p>
                        <a href="#" class="inline-flex items-center space-x-1 text-sm text-indigo-500 hover:underline hover:text-black">
                            <span>View Upcoming Orders</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M15.75 2.25H21a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-1.5 0V4.81L8.03 17.03a.75.75 0 0 1-1.06-1.06L19.19 3.75h-3.44a.75.75 0 0 1 0-1.5Zm-10.5 4.5a1.5 1.5 0 0 0-1.5 1.5v10.5a1.5 1.5 0 0 0 1.5 1.5h10.5a1.5 1.5 0 0 0 1.5-1.5V10.5a.75.75 0 0 1 1.5 0v8.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V8.25a3 3 0 0 1 3-3h8.25a.75.75 0 0 1 0 1.5H5.25Z" clip-rule="evenodd" />
                            </svg>

                        </a>
                    </div>
                   </div>
                   <div id="calendar" class="my-10"></div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl,

                {
                    themeSystem: 'bootstrap5',
                    defaultView: 'month',
                    timeZone: 'local',
                    slotMinTime: '8:00:00',
                    slotMaxTime: '23:59:00',
                    events: @json($events),
                    firstDay: 1,
                    contentHeight: 'auto',
                    headerToolbar: {
                        left: 'title',
                        right: 'today,dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    footerToolbar: {
                        left: 'prev,next',
                    },
                }
                );
                calendar.render();
            });
        </script>
    @endpush
</x-app-layout>

<div class="grid grid-cols-4 gap-2 w-full">
    @if ($users)
        <a href="#" class="col-span-full sm:col-span-1">
            <div class="relative overflow-hidden bg-blue-500 rounded-lg shadow-md h-32">
                <svg class="absolute w-24 h-24 rounded-md opacity-50 -top-6 -right-6 md:-right-4 text-blue-800"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13 20V18C13 15.2386 10.7614 13 8 13C5.23858 13 3 15.2386 3 18V20H13ZM13 20H21V19C21 16.0545 18.7614 14 16 14C14.5867 14 13.3103 14.6255 12.4009 15.6311M11 7C11 8.65685 9.65685 10 8 10C6.34315 10 5 8.65685 5 7C5 5.34315 6.34315 4 8 4C9.65685 4 11 5.34315 11 7ZM18 9C18 10.1046 17.1046 11 16 11C14.8954 11 14 10.1046 14 9C14 7.89543 14.8954 7 16 7C17.1046 7 18 7.89543 18 9Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="p-4 ">
                    <dl>
                        <dt class="text-sm font-medium leading-5 text-white truncate">
                            Usuários
                        </dt>
                        <dd class="mt-1 text-5xl font-bold leading-9 text-white">
                            {{ $users }}
                        </dd>
                    </dl>
                </div>
            </div>
        </a>
    @endif
    @if ($version)
        <a href="#" class="col-span-full sm:col-span-1">
            <div class="relative overflow-hidden bg-blue-500 rounded-lg shadow-md h-32">
                <svg class="absolute w-24 h-24 rounded-md opacity-50 -top-6 -right-6 md:-right-4 text-blue-800"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9 20H6C3.79086 20 2 18.2091 2 16V7C2 4.79086 3.79086 3 6 3H17C19.2091 3 21 4.79086 21 7V10"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8 2V4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M15 2V4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M2 8H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M18.5 15.6429L17 17.1429" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <circle cx="17" cy="17" r="5" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="p-4 ">
                    <dl>
                        <dt class="text-sm font-medium leading-5 text-white truncate">
                            Versão
                        </dt>
                        <dd class="mt-1 text-5xl font-bold leading-9 text-white">
                            {{ $version }}
                        </dd>
                    </dl>
                </div>
            </div>
        </a>
    @endif

    @if ($update)
        <a href="" class="col-span-full sm:col-span-2">
            <div class="relative overflow-hidden bg-red-500 rounded-lg shadow-md h-32">
                <svg class="absolute w-24 h-24 rounded-md opacity-50 -top-6 -right-6 md:-right-4 text-red-800"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9 20H6C3.79086 20 2 18.2091 2 16V7C2 4.79086 3.79086 3 6 3H17C19.2091 3 21 4.79086 21 7V10"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8 2V4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M15 2V4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M2 8H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M18.5 15.6429L17 17.1429" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <circle cx="17" cy="17" r="5" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="p-4 ">
                    <dl>
                        <dt class="text-sm font-medium leading-5 text-white truncate">
                            Atualização
                        </dt>
                        <dd class="mt-1 text-5xl font-bold leading-9 text-white">
                            {{ $update }}
                        </dd>
                    </dl>
                </div>
            </div>
        </a>
    @endif

    @if ($charts)
        <div class="col-span-full sm:col-span-2 relative overflow-hidden bg-blue-500 text-white rounded-lg shadow-md w-full">
            @livewire('admin.charts.access-api')
        </div>
        <div class="col-span-full sm:col-span-2 relative overflow-hidden bg-blue-500 text-white rounded-lg shadow-md w-full">
            @livewire('admin.charts.new-access')
        </div>
        <div class="row-span-2 col-span-full sm:col-span-2 relative overflow-hidden bg-blue-500 text-white rounded-lg shadow-md w-full">
            @livewire('admin.charts.access-airfields')
        </div>
        <div class="row-span-2 col-span-full sm:col-span-2 relative overflow-hidden bg-blue-500 text-white rounded-lg shadow-md w-full">
            @livewire('admin.charts.access-aircrafts')
        </div>

    @endif

</div>

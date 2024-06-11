<div id="documentation" class="bg-gray-900 dark:text-gray-800 sm:px-0 lg:px-20 min-h-screen">
    <div
        class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:pt-8 lg:flex-row
        lg:justify-between max-full">


        <div
            class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:pt-8 lg:flex-row
        lg:justify-between max-full border-t border-gray-200">
            <div class="flex flex-col justify-start p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
                <h1 class="text-4xl font-bold leading-none mb-2">
                    Busca por aeronaves
                </h1>
                <div class="w-full ">
                    <div class="relative">
                        <input id="npm-install-copy-button" type="text"
                            wire:model="urlApiAircraft"
                            wire:change='selectApiAircraft()'
                            class="col-span-6 border border-gray-300 text-white text-sm rounded-lg
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-900
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                        dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ url('api/v1/aeroportos/{prefix}') }}">
                        <button data-copy-to-clipboard-target="npm-install-copy-button"
                            data-tooltip-target="tooltip-copy-npm-install-copy-button"
                            class="absolute end-2 top-1/2 -translate-y-1/2 text-gray-500 dark:text-gray-400
                         hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg p-2 inline-flex items-center
                         justify-center">
                            <span id="default-icon">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 18 20">
                                    <path
                                        d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                                </svg>
                            </span>
                            <span id="success-icon" class="hidden inline-flex items-center">
                                <svg class="w-3.5 h-3.5 text-blue-700 dark:text-blue-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                            </span>
                        </button>
                        <div id="tooltip-copy-npm-install-copy-button" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white
                        transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            <span id="default-tooltip-message">Clique para copiar</span>
                            <span id="success-tooltip-message" class="hidden">Copiado!</span>
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center p-6 lg:mt-0 ">
                <div class="max-w-lg w-full p-4 rounded-lg shadow-md overflow-y-auto max-h-80">
                    <div class="mockup-code" >
                        <pre id="json-teste" class="text-green-300" >
                            <code wire:model="aircrafts">
                                {{ json_encode(json_decode($aircrafts,true), JSON_PRETTY_PRINT) }}
                            </code>
                        </pre>
                    </div>
                </div>
            </div>

{{--
            <script>
                document.addEventListener('livewire:initialized', () => {
                    var aircrafts = JSON.parse(@json($aircrafts));
                    var formattedJsonAircrafts = JSON.stringify(aircrafts, null, 2);
                    document.getElementById('json-teste').innerHTML = formattedJsonAircrafts;

                    Livewire.on('change-aircrafts', (updateAircraft) => {
                        var aircrafts = JSON.parse(updateAircraft);
                        var formattedJsonAircrafts = JSON.stringify(aircrafts, null, 2);
                        // Atualiza o conteúdo do elemento <pre>
                        console.log('JSON formatado:', formattedJsonAircrafts);
                        document.getElementById('json-teste').innerHTML = formattedJsonAircrafts;
                    });
                });
            </script> --}}
        </div>
    </div>
</div>

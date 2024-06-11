<div id="documentation" class="bg-gray-900 dark:text-gray-800 sm:px-0 lg:px-20 min-h-screen">
    <div
        class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:pt-8 lg:flex-row
        lg:justify-between max-full">
        <div class="flex flex-col items-center justify-center p-6 lg:mt-0 ">
            <div class="max-w-lg w-full p-4 rounded-lg overflow-auto max-h-80">
                <div class="mockup-code">
                    <pre class="text-green-300">
                        <code wire:model="airfields">
                            {{ json_encode(json_decode($airfields), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}
                            {{-- {{ json_encode(json_decode($airfields), JSON_PRETTY_PRINT) }} --}}
                        </code>
                    </pre>
                </div>
            </div>
            <p class="w-full mb-0 text-lg text-start">RESPONSES</p>
            <div class="flex mx-2 items-center pt-1 flex-nowrap border-t border-gray-200"></div>
            <div tabindex="0"
                class="collapse collapse-arrow border text-green-500 border-green-300
               bg-green-200 mt-2">
                <div class="collapse-title text-md font-medium">
                    <span class="text-green-700 font-bold">200</span>
                    Success
                </div>
                <div class="collapse-content">
                    <div class="overflow-x-auto h-80">
                        <table class="table table-zebra font-mono ">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th colspan="3" class="text-black font-semibold">RESPONSE SCHEMA:
                                        application/json</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row 1 -->
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        message
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        lastUpdateData
                                    </td>
                                    <td class="font-mono">date</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        version
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        typeUse
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        codigoOaci
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        ciad
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        name
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        city
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        cityServed
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        state
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        stateServed
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        altitude
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        latitude
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        longitude
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        latGeoPoint
                                    </td>
                                    <td class="font-mono">decimal (10, 8)</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        lonGeoPoint
                                    </td>
                                    <td class="font-mono">decimal (11, 8)</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        length
                                    </td>
                                    <td class="font-mono">decimal (10, 4)</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        length2
                                    </td>
                                    <td class="font-mono">decimal (10, 4)</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        width
                                    </td>
                                    <td class="font-mono">decimal (10, 4)</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        width2
                                    </td>
                                    <td class="font-mono">decimal (10, 4)</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        surface
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        surface2
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        designation
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        designation2
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        resistence
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        resistence2
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        operationDay
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        operationNight
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        ordinanceRegistration
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        ordinanceLink
                                    </td>
                                    <td class="font-mono">mediumText</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        registrationValidity
                                    </td>
                                    <td class="font-mono">date</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div tabindex="0"
                class="collapse collapse-arrow border text-red-500 border-red-300
               bg-red-200 mt-2">
                <div class="collapse-title text-md font-medium">
                    <span class="text-red-700 font-bold">404</span>
                    Código OACI não encontrado na base de dados
                </div>
                <div class="collapse-content">
                    <div class="overflow-x-auto">
                        <table class="table table-zebra">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th colspan="3" class="text-black font-semibold">RESPONSE SCHEMA:
                                        application/json</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row 1 -->
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        message
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-start p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
            <h1 class="text-4xl font-bold leading-none mb-2">
                Busca por aeroportos
            </h1>
            <div class="w-full ">
                <div class="relative">
                    <input id="npm-install-copy-button-1" type="text" wire:model="urlApiAirfield"
                        wire:change='selectApiAirfield()'
                        class="col-span-6 border border-gray-300 text-white text-sm rounded-lg
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-900
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                        dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <button data-copy-to-clipboard-target="npm-install-copy-button-1"
                        data-tooltip-target="tooltip-copy-npm-install-copy-button-1"
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
                    <div id="tooltip-copy-npm-install-copy-button-1" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white
                        transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        <span id="default-tooltip-message">Clique para copiar</span>
                        <span id="success-tooltip-message" class="hidden">Copiado!</span>
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
            </div>
            <p class="mt-6 mb-0 text-lg">PATH PARAMETERS</p>
            <div class="flex mx-2 items-center pt-1 flex-nowrap border-t border-gray-200"></div>
            <div class="max-w-full p-0 m-0 flex text-gray-400">
                <div class="w-2/5 justify-start items-start">
                    <div class="font-mono font-semibold">codigo_oaci</div>
                    <div class="text-gray-300 font-semibold">string</div>
                </div>
                <div class="w-3/5 border-gray-200 ">
                    <blockquote class="my-4 p-2 border-s-4 border-gray-300  dark:border-gray-500 dark:bg-gray-800">
                        <p class="text-sm italic text-justify font-medium leading-relaxed dark:text-white">
                            O código OACI (Organização da Aviação Civil Internacional),
                            também conhecido como ICAO (International Civil Aviation Organization) em inglês,
                            é um código de quatro letras atribuído a aeroportos ao redor do mundo.
                            Este código é utilizado internacionalmente para identificar aeroportos de maneira
                            única e padronizada.
                        </p>
                    </blockquote>
                </div>
            </div>

        </div>
    </div>
    <div
        class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:pt-8 lg:flex-row
        lg:justify-between max-full border-t border-gray-200">
        <div class="flex flex-col justify-start p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
            <h1 class="text-4xl font-bold leading-none mb-2">
                Busca por aeronaves
            </h1>
            <div class="w-full ">
                <div class="relative">
                    <input id="npm-install-copy-button" type="text" wire:model="urlApiAircraft"
                        wire:change='selectApiAircraft()'
                        class="col-span-6 border border-gray-300 text-white text-sm rounded-lg
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-900
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                        dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
            <p class="mt-6 mb-0 text-lg">PATH PARAMETERS</p>
            <div class="flex mx-2 items-center pt-1 flex-nowrap border-t border-gray-200"></div>
            <div class="max-w-full p-0 m-0 flex text-gray-400">
                <div class="w-2/5 justify-start items-start">
                    <div class="font-mono font-semibold">prefix</div>
                    <div class="text-gray-300 font-semibold">string</div>
                </div>
                <div class="w-3/5 border-gray-200 ">
                    <blockquote class="my-4 p-2 border-s-4 border-gray-300  dark:border-gray-500 dark:bg-gray-800">
                        <p class="text-sm italic text-justify font-medium leading-relaxed dark:text-white">
                            O prefixo de uma aeronave, também conhecido como "marcação de registro" ou
                            "matrícula de uma aeronave", é um identificador único atribuído a cada aeronave.
                            Esse prefixo é similar a uma placa de veículo e é utilizado para identificar e
                            rastrear a aeronave de maneira única em nível nacional e internacional.
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center j p-6 lg:mt-0 ">
            <div class="max-w-lg w-full p-4 rounded-lg overflow-auto max-h-80">
                <div class="mockup-code">
                    <pre id="json-aircrafts" class="text-green-300">
                        <code wire:model="aircrafts">
                            {{ json_encode(json_decode($aircrafts, true), JSON_PRETTY_PRINT) }}
                        </code>
                    </pre>
                </div>
            </div>
            <p class="w-full mb-0 text-lg text-start">RESPONSES</p>
            <div class="flex mx-2 items-center pt-1 flex-nowrap border-t border-gray-200"></div>
            <div tabindex="0"
                class="collapse collapse-arrow border text-green-500 border-green-300
               bg-green-200 mt-2">
                <div class="collapse-title text-md font-medium">
                    <span class="text-green-700 font-bold">200</span>
                    Success
                </div>
                <div class="collapse-content">
                    <div class="overflow-x-auto h-80">
                        <table class="table table-zebra font-mono ">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th colspan="3" class="text-black font-semibold">
                                        RESPONSE SCHEMA:
                                        application/json
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        prefix
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        proprietario
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        outros_proprietarios
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        sg_uf
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        cpf_cnpj
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        nm_operador
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        outros_operadores
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        uf_operador
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        cpf_cgc
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2 stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        nr_cert_matricula
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        nr_serie
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        cd_categoria
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        cd_tipo
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        ds_modelo
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        nm_fabricante
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        cd_cls
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        nr_pmd
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        cd_tipo_icao
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        nr_tripulacao_min
                                    </td>
                                    <td class="font-mono px-4 py-2">integer</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        nr_passageiros_max
                                    </td>
                                    <td class="font-mono px-4 py-2">integer</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        nr_assentos
                                    </td>
                                    <td class="font-mono px-4 py-2">integer</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        nr_ano_fabricacao
                                    </td>
                                    <td class="font-mono px-4 py-2">integer</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        dt_validade_cva
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        dt_validade_ca
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        dt_canc
                                    </td>
                                    <td class="font-mono px-4 py-2">date</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        ds_motivo_canc
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        cd_interdicao
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        cd_marca_nac1
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        cd_marca_nac2
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        cd_marca_nac3
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        cd_marca_estrangeira
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        ds_gravame
                                    </td>
                                    <td class="font-mono px-4 py-2">string</td>
                                </tr>
                                <tr>
                                    <td class="font-mono flex px-4 py-2">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        dt_matricula
                                    </td>
                                    <td class="font-mono px-4 py-2">date</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <div tabindex="0"
                class="collapse collapse-arrow border text-red-500 border-red-300
               bg-red-200 mt-2">
                <div class="collapse-title text-md font-medium">
                    <span class="text-red-700 font-bold">404</span>
                    Prefixo não encontrado na base de dados
                </div>
                <div class="collapse-content">
                    <div class="overflow-x-auto">
                        <table class="table table-zebra">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th colspan="3" class="text-black font-semibold">RESPONSE SCHEMA:
                                        application/json</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row 1 -->
                                <tr>
                                    <td class="font-mono flex">
                                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20M4 12H16M16 12L12 8M16 12L12 16" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        message
                                    </td>
                                    <td class="font-mono">string</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

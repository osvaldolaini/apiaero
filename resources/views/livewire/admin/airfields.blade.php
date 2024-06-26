<div class="w-100">
    <div class="p-6 py-8 dark:bg-violet-400 dark:text-gray-900">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <h2 class="text-center text-3xl tracki font-bold">
                    {{ mb_strtoupper($breadcrumb) }} {{ ($airfields ? '( '.$airfields->count().' )' : '') }}
                </h2>
                <x-action-loading></x-action-loading>
                @if ($user == 'admin')
                    <div class="col-span-2 justify-items-end flex space-x-2">
                        <div class="tooltip tooltip-top p-0" data-tip="Aeroportos Públicos">
                            <button wire:click="refreshPublic"
                                class="py-2 px-3
                            transition-colors dark:hover:bg-blue-500 hover:hover:bg-blue-500
                            duration-200 hover:text-white -ml-1 flex shadow-md">Públicos
                                <svg class="h-6 w-6 ml-2" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.6091 5.89092L15.5 9H21.5V3L18.6091 5.89092ZM18.6091 5.89092C16.965 4.1131 14.6125 3 12 3C7.36745 3 3.55237 6.50005 3.05493 11M5.39092 18.1091L2.5 21V15H8.5L5.39092 18.1091ZM5.39092 18.1091C7.03504 19.8869 9.38753 21 12 21C16.6326 21 20.4476 17.5 20.9451 13"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="tooltip tooltip-top p-0" data-tip="Aeroportos Privados">
                            <button wire:click="refreshPrivate"
                                class="py-2 px-3
                            transition-colors dark:hover:bg-blue-500 hover:hover:bg-blue-500
                            duration-200 hover:text-white -ml-1 flex shadow-md">Privados
                                <svg class="h-6 w-6 ml-2" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.6091 5.89092L15.5 9H21.5V3L18.6091 5.89092ZM18.6091 5.89092C16.965 4.1131 14.6125 3 12 3C7.36745 3 3.55237 6.50005 3.05493 11M5.39092 18.1091L2.5 21V15H8.5L5.39092 18.1091ZM5.39092 18.1091C7.03504 19.8869 9.38753 21 12 21C16.6326 21 20.4476 17.5 20.9451 13"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="bg-white dark:bg-gray-800 sm:rounded-lg">
        <div>
            <div class="bg-white dark:bg-gray-800 sm:rounded-lg my-6 px-4 text-center">
                <div class="overflow-x-auto p-4 text-center
                grid grid-cols-3 space-x-2 space-y-2">
                    @if ($airfields)
                        @foreach ($airfields as $airfield)
                            <div wire:key="{{ $airfield->codigoOaci }}"
                                wire:click="showModalRead('{{ $airfield->codigoOaci }}')"
                                class="col-span-1 mt-5 flex items-center justify-center">
                                <div
                                    class="w-full h-60
                                        bg-white drop-shadow-xl rounded-box mr-4
                                        cursor-pointer card card-compact shadow-xl">
                                    <div class="card-body">
                                        <p class="font-extrabold text-xl">{{ $airfield->codigoOaci }}</p>
                                        <div class="w-full flex-col">
                                            <span
                                                class="bg-blue-100 text-blue-800 text-xs
                                          font-medium me-2 px-1 py-0.5 rounded dark:bg-blue-900
                                        dark:text-blue-300 flex mx-auto justify-center mt-1">
                                                Nome: {{ $airfield->name }}
                                            </span>
                                            <span
                                                class="bg-blue-100 text-blue-800 text-xs
                                          font-medium me-2 px-1 py-0.5 rounded dark:bg-blue-900
                                        dark:text-blue-300 flex mx-auto justify-center mt-1">
                                                Cidade: {{ $airfield->city }} / {{ $airfield->state }}
                                            </span>
                                            <span
                                                class="bg-yellow-100 text-yellow-800 text-xs
                                          font-medium me-2 px-1 py-0.5 rounded dark:bg-yellow-900
                                        dark:text-yellow-300 flex mx-auto justify-center mt-1">
                                                Uso: {{ $airfield->typeUse }}
                                            </span>
                                            <span
                                                class="bg-yellow-100 text-yellow-800 text-xs
                                          font-medium me-2 px-1 py-0.5 rounded dark:bg-yellow-900
                                        dark:text-yellow-300 flex mx-auto justify-center mt-1">
                                                CIAD: {{ $airfield->ciad }}
                                            </span>
                                            <span
                                                class="bg-yellow-100 text-yellow-800 text-xs
                                          font-medium me-2 px-1 py-0.5 rounded dark:bg-yellow-900
                                        dark:text-yellow-300 flex mx-auto justify-center mt-1">
                                                Atualizado: {{ $airfield->atualized }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
    {{-- MODAL READ --}}
    <x-dialog-modal wire:model="showModalView">
        <x-slot name="title">Detalhes</x-slot>
        <x-slot name="content">
            <dl class="max-w text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                @if ($detail)
                    @foreach ($detail as $item => $value)
                        @if ($value)
                            @if ($item == 'Foto')
                                <figure class="w-48">
                                    <img class="photo" src="{{ $value }}" alt="Movie" />
                                </figure>
                            @else
                                <div class="flex flex-col pb-1">
                                    <dt class="text-gray-500 md:text-lg dark:text-gray-400">{{ $item }}:</dt>
                                    <dd class="text-lg font-semibold">
                                        {{ $value }}
                                    </dd>
                                </div>
                            @endif
                        @endif
                    @endforeach
                @endif
            </dl>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('showModalView')" class="mx-2">
                Fechar
            </x-secondary-button>
        </x-slot>
    </x-dialog-modal>

</div>

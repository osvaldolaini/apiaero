<div class="w-100">
    <x-breadcrumb>
        <div class="grid grid-cols-8 gap-4 text-gray-600 ">
            <div class="col-span-6 justify-items-start">
                <h3 class="text-2xl font-bold tracki  dark:text-gray-50">
                    {{ $breadcrumb }}
                </h3>
            </div>
        </div>
    </x-breadcrumb>
    <div class="bg-white dark:bg-gray-800 pt-3 sm:rounded-lg">
        <div>
            <x-table-search></x-table-search>

            <div class=" bg-white dark:bg-gray-800 sm:rounded-lg my-6  w-full">
                <div class="-mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8 w-full">
                    <div class="inline-block w-full align-middle ">
                        <div class="w-full overflow-hidden border border-gray-200
                        dark:border-gray-700 sm:rounded-lg">
                            <table class='w-full divide-y divide-gray-200 dark:divide-gray-700'>
                                <thead class="bg-gray-50 dark:bg-gray-800">
                                    <tr scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-left text-gray-500
                                        dark:text-gray-400">

                                        <th scope="col"
                                            class="py-3.5 px-4 text-sm font-normal
                                                    text-left text-gray-500
                                                    dark:text-gray-400">
                                            Assunto
                                        </th>
                                        <th scope="col"
                                            class="py-3.5 px-4 text-sm font-normal
                                                    text-center text-gray-500
                                                    dark:text-gray-400">
                                            Envido por
                                        </th>
                                        <th scope="col"
                                            class="py-3.5 px-4 text-sm font-normal
                                                    text-center text-gray-500
                                                    dark:text-gray-400">
                                            Responder
                                        </th>
                                        <th scope="col"
                                            class="py-3.5 px-4 text-sm font-normal
                                                text-center text-gray-500
                                                dark:text-gray-400">
                                            Status
                                        </th>
                                        <th scope="col"
                                            class="py-3.5 px-4 text-sm font-normal
                                                    text-center text-gray-500
                                                    dark:text-gray-400">
                                            Ações
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                    @if ($dataTable->isEmpty())
                                        <tr>
                                            <td colspan="5"
                                                class="py-1.5 px-4 text-sm font-normal  text-center text-gray-500 dark:text-gray-400">
                                                Nenhum resultado encontrado.
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($dataTable as $data)
                                            <tr>
                                                <td
                                                    class="py-1.5 px-4 text-sm font-normal
                                                    text-left text-gray-500 dark:text-gray-400">
                                                    {{ $data->title }}

                                                </td>
                                                <td
                                                    class="py-1.5 px-4 text-sm font-normal text-center text-gray-500 dark:text-gray-400">
                                                    {{ $data->send_by }}
                                                </td>

                                                <td
                                                    class="py-3.5 px-4
                                                    text-sm font-normal flex justify-center
                                                    text-center text-gray-500
                                                    dark:text-gray-400">
                                                    <div class="tooltip tooltip-top p-0 flex" data-tip="Responder">
                                                        @if ($data->active == 1 or $data->active == 0)
                                                            <button wire:click="modalEmail({{ $data->id }})"
                                                                class="py-2 px-3
                                                                hover:text-white dark:hover:bg-blue-500 transition-colors hover:hover:bg-blue-500
                                                                duration-200 whitespace-nowrap">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 "
                                                                    fill="none" viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 5.324V15.5A1.5 1.5 0 001.5 17h17a1.5 1.5 0 001.5-1.5V5.324l-9.496 5.54a1 1 0 01-1.008 0L0 5.324z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M19.443 3.334A1.494 1.494 0 0018.5 3h-17c-.357 0-.686.125-.943.334L10 8.842l9.443-5.508z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </button>
                                                        @endif

                                                    </div>
                                                </td>
                                                <td
                                                    class="py-1.5 px-4 text-sm font-normal text-center text-gray-500 dark:text-gray-400">

                                                    @switch($data->active)
                                                        @case(0)
                                                            <div class="badge badge-info gap-2 badge-lg">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    class="inline-block w-4 h-4 stroke-current"
                                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 5.324V15.5A1.5 1.5 0 001.5 17h17a1.5 1.5 0 001.5-1.5V5.324l-9.496 5.54a1 1 0 01-1.008 0L0 5.324z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M19.443 3.334A1.494 1.494 0 0018.5 3h-17c-.357 0-.686.125-.943.334L10 8.842l9.443-5.508z"
                                                                        fill="currentColor" />
                                                                </svg>

                                                                Novo
                                                            </div>
                                                        @break

                                                        @case(1)
                                                            <div class="badge badge-warning gap-2 badge-lg">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    class="inline-block w-4 h-4 stroke-current"
                                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7 4h6v2H7V4zM11 8H7v2h4V8z" fill="currentColor" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M3 10V1.5A1.5 1.5 0 014.5 0h11A1.5 1.5 0 0117 1.5V10h2v7.5a1.5 1.5 0 01-1.5 1.5h-15A1.5 1.5 0 011 17.5V10h2zm2 2V2h10v10l-5 2.771L5 12z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                                Aguardando resposta...
                                                            </div>
                                                        @break

                                                        @case(2)
                                                            <div class="badge badge-success gap-2 badge-lg">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    class="inline-block w-4 h-4 stroke-current"
                                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill="currentColor"
                                                                        d="M19.707 15.293l-3-3a1.001 1.001 0 00-1.414 1.414L16.586 15H13a1 1 0 000 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" />
                                                                    <path fill="currentColor"
                                                                        d="M18.5 1c.357 0 .686.125.943.334L10 6.842.557 1.334C.814 1.125 1.143 1 1.5 1h17zM0 13.5V3.324l9.496 5.54a1 1 0 001.008 0L20 3.324V10h-4a6.002 6.002 0 00-5.917 5H1.5A1.5 1.5 0 010 13.5z" />
                                                                </svg>
                                                                Respondido
                                                            </div>
                                                        @break

                                                        @default
                                                            <div class="badge badge-warning gap-2 badge-lg">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    class="inline-block w-4 h-4 stroke-current"
                                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 5.324V15.5A1.5 1.5 0 001.5 17h17a1.5 1.5 0 001.5-1.5V5.324l-9.496 5.54a1 1 0 01-1.008 0L0 5.324z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M19.443 3.334A1.494 1.494 0 0018.5 3h-17c-.357 0-.686.125-.943.334L10 8.842l9.443-5.508z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                                Aguardando resposta...
                                                            </div>
                                                    @endswitch
                                                    {{-- <div class="badge badge-info gap-2">
                                                    info
                                                </div>
                                                <div class="badge badge-success gap-2">
                                                    success
                                                </div>
                                                <div class="badge badge-warning gap-2">
                                                    warning
                                                </div>
                                                <div class="badge badge-error gap-2">
                                                    error
                                                </div> --}}

                                                </td>
                                                <td
                                                    class="w-/6 py-1.5 px-4 text-sm font-normal text-center text-gray-500 dark:text-gray-400">

                                                    <x-table-buttons id="{{ $data->id }}" :update="false"
                                                        :delete="true" :view="true">
                                                    </x-table-buttons>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="items-center justify-between  py-4">
                    {{ $dataTable->links() }}
                </div>
            </div>
        </div>
    </div>
    {{-- MODAL DELETE --}}
    <x-confirmation-modal wire:model="showJetModal">
        <x-slot name="title">
            Excluir registro
        </x-slot>

        <x-slot name="content">
            <h2 class="h2">Deseja realmente excluir o registro?</h2>
            <p>Não será possível reverter esta ação!</p>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('showJetModal')" wire:loading.attr="disabled">
                Cancelar
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="delete({{ $registerId }})" wire:loading.attr="disabled">
                Apagar registro
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>

    {{-- MODAL READ --}}
    <x-dialog-modal wire:model="showModalView">
        <x-slot name="title">Detalhes</x-slot>
        <x-slot name="content">
            <dl class="max-w text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                @if ($detail)
                    @foreach ($detail as $item => $value)
                        @if ($value)
                            @if ($item == 'Resposta')
                            <div class="flex flex-col pb-1">
                                <dt class="text-gray-500 md:text-lg dark:text-gray-400">{{ $item }}:</dt>
                                <dd class="text-lg font-semibold">
                                    {!! $value !!}
                                </dd>
                            </div>
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
    {{-- MODAL CREATE --}}
    <x-dialog-modal wire:model="showModalCreate">
        <x-slot name="title">Inserir novo</x-slot>
        <x-slot name="content">
            <form wire:submit="store">

                <div class="grid gap-4 mb-1 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="title" class="block text-sm font-medium text-gray-900 dark:text-white">
                            Título</label>
                        <input type="text" wire:model="title" placeholder="Título" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        @error('title')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="media"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Mídia</label>
                        <select wire:model="media"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="">Selecione uma opção</option>
                            <option value="facebook">Facebook</option>
                            <option value="instagram">Instagram</option>
                            <option value="twitter">Twitter</option>
                            <option value="youtube">Youtube</option>
                            <option value="tiktok">Tik Tok</option>
                            <option value="linkdin">LinkdIn</option>
                        </select>
                        @error('media')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="link" class="block text-sm font-medium text-gray-900 dark:text-white">
                            Link da rede social
                        </label>
                        <input type="text" wire:model="link" placeholder="Link da rede social" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        @error('link')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </form>
        </x-slot>
        <x-slot name="footer">
            <button type="submit" wire:click="store"
                class="text-white
                        bg-blue-700 hover:bg-blue-800
                        focus:ring-4 focus:outline-none focus:ring-blue-300
                        font-medium rounded-lg text-sm px-5 py-2.5
                        text-center dark:bg-blue-600 dark:hover:bg-blue-700
                        dark:focus:ring-blue-800">
                Salvar
            </button>
            <x-secondary-button wire:click="$toggle('showModalCreate')" class="mx-2">
                Fechar
            </x-secondary-button>
        </x-slot>
    </x-dialog-modal>
    {{-- MODAL UPDATE --}}
    <x-dialog-modal wire:model="showModalEdit">
        <x-slot name="title">Editar</x-slot>
        <x-slot name="content">
            <form wire:submit="update">
                <div class="grid gap-4 mb-1 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="title" class="block text-sm font-medium text-gray-900 dark:text-white">
                            Título</label>
                        <input type="text" wire:model="title" placeholder="Título" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        @error('title')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="media"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Mídia</label>
                        <select wire:model="media"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="">Selecione uma opção</option>
                            <option value="facebook">Facebook</option>
                            <option value="instagram">Instagram</option>
                            <option value="twitter">Twitter</option>
                            <option value="youtube">Youtube</option>
                            <option value="tiktok">Tik Tok</option>
                            <option value="linkdin">LinkdIn</option>
                        </select>
                        @error('media')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="link" class="block text-sm font-medium text-gray-900 dark:text-white">
                            Link da rede social
                        </label>
                        <input type="text" wire:model="link" placeholder="Link da rede social" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        @error('link')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </form>
        </x-slot>
        <x-slot name="footer">
            <button type="submit" wire:click="update"
                class="text-white
                        bg-blue-700 hover:bg-blue-800
                        focus:ring-4 focus:outline-none focus:ring-blue-300
                        font-medium rounded-lg text-sm px-5 py-2.5
                        text-center dark:bg-blue-600 dark:hover:bg-blue-700
                        dark:focus:ring-blue-800">
                Atualizar
            </button>
            <x-secondary-button wire:click="$toggle('showModalEdit')" class="mx-2">
                Fechar
            </x-secondary-button>
        </x-slot>
    </x-dialog-modal>
</div>

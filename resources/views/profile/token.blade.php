<x-action-section>
    <x-slot name="title">
        {{ __('Token de acesso') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Insira o token na pesquisa.') }}
    </x-slot>

    <x-slot name="content">

        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600 dark:text-gray-400">
            <p>
                {{$token}}
            </p>
        </div>

    </x-slot>
</x-action-section>

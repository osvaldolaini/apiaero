<div class="bg-white dark:bg-gray-800 pt-0 sm:rounded-lg">
    <div class=" bg-white dark:bg-gray-800 sm:rounded-lg my-2 px-4">
            @livewire('admin.dashboard.stats-card', [
                'users'             => true,
                'version'           => true,
                'update'            => true,
                'charts'            => true,
            ])
    </div>
</div>

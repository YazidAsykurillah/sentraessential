<x-filament-widgets::widget>
    <x-filament::section heading="Quick Actions">

        <div class="flex flex-wrap gap-3">

            @can('create posts')
                <x-filament::button
                    tag="a"
                    href="{{ route('filament.admin.resources.posts.create') }}"
                >
                    Create Post
                </x-filament::button>
            @endcan

            @can('create categories')
                <x-filament::button
                    tag="a"
                    href="{{ route('filament.admin.resources.categories.create') }}"
                >
                    Create Category
                </x-filament::button>
            @endcan

            @can('create tags')
                <x-filament::button
                    tag="a"
                    href="{{ route('filament.admin.resources.tags.create') }}"
                >
                    Create Tag
                </x-filament::button>
            @endcan

            @can('view website settings')
                <x-filament::button
                    tag="a"
                    href="{{ route('filament.admin.resources.website-settings.index') }}"
                    color="gray"
                >
                    Website Settings
                </x-filament::button>
            @endcan

        </div>

    </x-filament::section>
</x-filament-widgets::widget>
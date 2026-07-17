<header class="border-b bg-white">
    <div class="container mx-auto px-6 py-4">

        <div class="flex items-center justify-between">

            <a href="{{ route('home') }}"
               class="text-xl font-bold">
                {{ setting('site_name') }}
            </a>

            <nav class="flex gap-6">

                <a href="{{ route('home') }}"
                   class="hover:text-blue-600">
                    Home
                </a>

                <a href="{{ route('blog.index') }}"
                   class="hover:text-blue-600">
                    Blog
                </a>

                <a href="{{ route('contact') }}"
                   class="hover:text-blue-600">
                    Contact
                </a>

            </nav>

        </div>

    </div>
</header>
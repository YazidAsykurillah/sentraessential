<header class="border-b bg-white">
    <div class="max-w-7xl mx-auto px-8 py-4">
        <div class="flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-xl font-bold">
                {{ setting('site_name') }}
            </a>
            <nav class="flex gap-6">
                <a href="{{ route('home') }}" class="text-dark hover:text-primary">
                    Home
                </a>
                <a href="{{ route('blog.index') }}" class="text-dark hover:text-primary">
                    Blog
                </a>
                <a href="{{ route('contact') }}" class="text-dark hover:text-primary">
                    Contact
                </a>
            </nav>
        </div>
    </div>
</header>
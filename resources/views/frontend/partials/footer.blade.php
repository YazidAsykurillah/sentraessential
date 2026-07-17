<footer class="border-t bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid md:grid-cols-3 gap-8">
            <div>
                <p class="font-bold text-lg">
                    {{ setting('company_name') }}
                </p>
                <p class="text-gray-600 mt-2">
                    {{ setting('site_tagline') }}
                </p>
            </div>
            <div>
                <p class="font-semibold">
                    Contact
                </p>
                <p>{{ setting('email') }}</p>
                <p>{{ setting('phone') }}</p>
            </div>
            <div>
                <p class="font-semibold">
                    Address
                </p>
                <p>{{ setting('address') }}</p>
            </div>

        </div>

    </div>
</footer>
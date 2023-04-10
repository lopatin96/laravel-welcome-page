<x-guest-layout>
    <div class="flex flex-col bg-gradient-to-r {{ config('laravel-welcome-page.gradient_from') }} {{ config('laravel-welcome-page.gradient_to') }} animate-gradient-x h-screen">
        @include(config('laravel-welcome-page.header_path'), ['showLinks' => true])
        @include('laravel-welcome-page::welcome.main')
    </div>

    @if (config('laravel-welcome-page.show_how_it_works_section'))
        @include('laravel-welcome-page::welcome.how-it-works')
    @endif

    @if (config('laravel-welcome-page.show_call_to_action_section'))
        @include('laravel-welcome-page::welcome.call-to-action')
    @endif

    @if (config('laravel-welcome-page.show_testimonials_section'))
        @include('laravel-welcome-page::welcome.testimonials')
    @endif

    @include('laravel-welcome-page::welcome.pricing')

    @include('laravel-welcome-page::welcome.faq')

    @include(config('laravel-welcome-page.footer_path'))
</x-guest-layout>

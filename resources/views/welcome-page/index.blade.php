<x-guest-layout>
    <div class="flex flex-col bg-gradient-to-r {{ config('laravel-welcome-page.gradient_from') }} {{ config('laravel-welcome-page.gradient_to') }} animate-gradient-x h-screen">
        @include(config('laravel-welcome-page.header_path'), ['showLinks' => true])
        @include('laravel-welcome-page::welcome-page.main.' . config('laravel-welcome-page.sections.main.variant') . '.index')
    </div>

    @foreach(config('laravel-welcome-page.sections.others') as $section)
        @isset($section['view'])
            @include($section['view'], ['id' => $section['id'] ?? null])
        @else
            @include("laravel-welcome-page::welcome-page.{$section['name']}.{$section['variant']}.index", ['id' => $section['id'] ?? null])
        @endisset
    @endforeach

    @include(config('laravel-welcome-page.footer_path'))
</x-guest-layout>

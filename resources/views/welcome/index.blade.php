<x-guest-layout>
    <div class="flex flex-col bg-gradient-to-r {{ config('laravel-welcome-page.gradient_from') }} {{ config('laravel-welcome-page.gradient_to') }} animate-gradient-x h-screen">
        @include(config('laravel-welcome-page.header_path'), ['showLinks' => true])
        @include('laravel-welcome-page::welcome.main.' . config('laravel-welcome-page.sections.main') . '.index')
    </div>

    @foreach(config('laravel-welcome-page.sections.others') as $section)
        @include("laravel-welcome-page::welcome.{$section['name']}.{$section['variant']}.index")
    @endforeach

    @include(config('laravel-welcome-page.footer_path'))
</x-guest-layout>

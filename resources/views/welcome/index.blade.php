<x-guest-layout>
    <div class="flex flex-col bg-gradient-to-r from-zinc-100 to-sky-300 animate-gradient-x h-screen">
        @include('layouts.header', ['showLinks' => true])
        @include('welcome.main')
    </div>

    @include('welcome.how-it-works')
    @include('welcome.call-to-action')
    @include('welcome.testimonials')
    @include('welcome.pricing')
    @include('welcome.faq')
    @include('layouts.footer')
</x-guest-layout>

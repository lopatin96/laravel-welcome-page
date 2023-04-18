<section
    @if($id) id="{{ $id }}" @endif
    class="relative py-24 bg-white overflow-hidden"
>
    <span
        style="background-image: radial-gradient(50% 50% at 50% 50%, {{ config('laravel-welcome-page.color_secondary_hex') }} 0, hsla(0, 0%, 100%, 0) 100%);"
        class="hidden absolute opacity-[.40] pointer-events-none lg:inline-flex left-[50%] bottom-0 w-[400px] h-[400px]"
    ></span>

    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -m-8">
            <div class="w-full md:w-1/2 lg:w-1/4 p-8">
                <h2 class="text-5xl font-bold font-heading tracking-px-n leading-tight">
                    {{ __('laravel-welcome-page::stats-v1.title') }}
                </h2>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 p-8">
                <div class="md:w-56">
                    <h2 class="mb-3 text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-tight">
                        {{ __('laravel-welcome-page::stats-v1.stat_1_value') }}
                    </h2>
                    <p class="text-lg text-gray-700 font-medium leading-normal">
                        {{ __('laravel-welcome-page::stats-v1.stat_1_text') }}
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 p-8">
                <div class="md:w-56">
                    <h2 class="mb-3 text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-tight">
                        {{ __('laravel-welcome-page::stats-v1.stat_2_value') }}
                    </h2>
                    <p class="text-lg text-gray-700 font-medium leading-normal">
                        {{ __('laravel-welcome-page::stats-v1.stat_2_text') }}
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 p-8">
                <div class="md:w-56">
                    <h2 class="mb-3 text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-tight">
                        {{ __('laravel-welcome-page::stats-v1.stat_3_value') }}
                    </h2>
                    <p class="text-lg text-gray-700 font-medium leading-normal">
                        {{ __('laravel-welcome-page::stats-v1.stat_3_text') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
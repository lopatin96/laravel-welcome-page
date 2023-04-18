<section
    @if($id) id="{{ $id }}" @endif
    class="pt-28 pb-40 bg-white overflow-hidden"
>
    <div class="container px-4 mx-auto">
        <h2 class="mb-20 text-6xl md:text-8xl xl:text-10xl font-bold font-heading tracking-px-n leading-none">
            {{ __('laravel-welcome-page::features-v3.title') }}
        </h2>
        <div class="flex flex-wrap xl:items-center -m-8 xl:-m-10">
            <div class="w-full md:w-1/2 xl:w-auto p-8 xl:p-10">
                <a class="block overflow-hidden rounded-3xl" href="#">
                    <img
                        class="w-full transform hover:scale-105 transition ease-in-out duration-1000"
                        src="{{ config('laravel-welcome-page.features-v3_image') }}"
                        alt="Feature"
                        loading="lazy"
                    >
                </a>
            </div>
            <div class="w-full md:w-1/2 xl:flex-1 p-8 xl:p-10">
                <div class="md:max-w-xl">
                    <div class="mb-11 pb-32 border-b">
                        <h3 class="text-lg font-semibold md:max-w-lg">
                            {{ __('laravel-welcome-page::features-v3.text') }}
                        </h3>
                    </div>
                    <div class="flex flex-wrap -m-8">
                        <div class="w-auto md:w-1/2 p-8">
                            <div class="md:max-w-xs">
                                <h3 class="mb-4 text-lg {{ config('laravel-welcome-page.text_color_primary') }} font-semibold">
                                    {{ __('laravel-welcome-page::features-v3.card_1_title') }}
                                </h3>
                                <p class="text-gray-900 font-medium">
                                    {{ __('laravel-welcome-page::features-v3.card_1_text') }}
                                </p>
                            </div>
                        </div>
                        <div class="w-auto md:w-1/2 p-8">
                            <div class="md:max-w-xs">
                                <h3 class="mb-4 text-lg {{ config('laravel-welcome-page.text_color_primary') }} font-semibold">
                                    {{ __('laravel-welcome-page::features-v3.card_2_title') }}
                                </h3>
                                <p class="text-gray-900 font-medium">
                                    {{ __('laravel-welcome-page::features-v3.card_2_text') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

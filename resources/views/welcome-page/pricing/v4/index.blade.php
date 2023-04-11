<section
    id="pricing"
    class="pt-24 pb-28 bg-blueGray-50 overflow-hidden"
>
    <div class="container px-4 mx-auto">
        <h2 class="mb-24 text-6xl md:text-7xl font-bold font-heading text-center tracking-px-n leading-tight md:max-w-xl mx-auto">
            {{ __('laravel-welcome-page::pricing-v4.title') }}
        </h2>
        <div class="mb-24 md:max-w-6xl mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="w-full md:w-1/3 p-4">
                    <div class="flex flex-col px-9 pt-8 pb-9 h-full bg-white bg-opacity-90 border border-gray-100 rounded-3xl" style="backdrop-filter: blur(46px);">
                        <div>
                            <span class="mb-9 inline-block text-sm {{ config('laravel-welcome-page.text_color_secondary') }} font-semibold uppercase tracking-px leading-snug">
                                {{ config('spark.billables.user.plans.0.name') }}
                            </span>
                            <h3 class="mb-6 text-4xl text-gray-900 font-bold leading-none">
                                ${{ config('spark.billables.user.plans.0.monthly_price') }}{{ __('laravel-welcome-page::pricing-v4.card_1_per') }}
                            </h3>
                            <p class="mb-9 text-gray-600 font-medium leading-relaxed">
                                {{ config('spark.billables.user.plans.0.short_description') }}
                            </p>
                        </div>
                        <a href="{{ config('laravel-welcome-page.pricing_button_path') }}">
                            <button class="py-4 px-9 w-full font-semibold border border-gray-300 hover:border-gray-400 rounded-xl focus:ring focus:ring-gray-50 bg-white hover:bg-gray-50 transition ease-in-out duration-200" type="button">
                                {{ __('laravel-welcome-page::pricing-v4.card_1_button_text', ['days' => config('spark.billables.user.trial_days')]) }}
                            </button>
                        </a>
                        <ul class="mt-10">
                            @foreach(config('spark.billables.user.plans.0.features') as $planFeature)
                                <li class="mb-1.5 text-gray-500 font-medium leading-normal text-center">
                                    {!! __($planFeature) !!}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4">
                    <div class="relative flex flex-col px-9 pt-8 pb-9 h-full bg-white bg-opacity-90 border border-gray-200 rounded-3xl shadow-9xl" style="backdrop-filter: blur(46px);">
                        <span
                            style="background-image: radial-gradient(50% 50% at 50% 50%, {{ config('laravel-welcome-page.color_secondary_hex') }} 0, hsla(0, 0%, 100%, 0) 100%);"
                            class="hidden absolute opacity-[.45] pointer-events-none lg:inline-flex -top-[30px] w-[640px] h-[640px]"
                        ></span>

                        <div class="relative z-10">
                            <span class="mb-9 inline-block text-sm {{ config('laravel-welcome-page.text_color_primary') }} font-semibold uppercase tracking-px leading-snug">
                                {{ config('spark.billables.user.plans.1.name') }}
                            </span>
                            <h3 class="mb-6 text-4xl text-gray-900 font-bold leading-none">
                                ${{ config('spark.billables.user.plans.1.monthly_price') }}{{ __('laravel-welcome-page::pricing-v4.card_2_per') }}
                            </h3>
                            <p class="mb-9 text-gray-600 font-medium leading-relaxed">
                                {{ config('spark.billables.user.plans.1.short_description') }}
                            </p>
                            <a href="{{ config('laravel-welcome-page.pricing_button_path') }}">
                                <button class="py-4 px-5 w-full text-white font-semibold rounded-xl focus:ring focus:ring-gray-500 bg-black hover:bg-gray-900 transition ease-in-out duration-200 select-none" type="button">
                                    {{ __('laravel-welcome-page::pricing-v4.card_2_button_text', ['days' => config('spark.billables.user.trial_days')]) }}
                                </button>
                            </a>
                            <ul class="mt-10">
                                @foreach(config('spark.billables.user.plans.1.features') as $planFeature)
                                    <li class="mb-1.5 text-gray-500 font-medium leading-normal text-center">
                                        {!! __($planFeature) !!}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4">
                    <div class="flex flex-col px-9 pt-8 pb-9 h-full bg-white bg-opacity-90 border border-gray-100 rounded-3xl" style="backdrop-filter: blur(46px);">
                        <div>
                            <span class="mb-9 inline-block text-sm {{ config('laravel-welcome-page.text_color_secondary') }} font-semibold uppercase tracking-px leading-snug">
                                {{ config('spark.billables.user.plans.2.name') }}
                            </span>
                            <h3 class="mb-6 text-4xl text-gray-900 font-bold leading-none">
                                ${{ config('spark.billables.user.plans.2.monthly_price') }}{{ __('laravel-welcome-page::pricing-v4.card_3_per') }}
                            </h3>
                            <p class="mb-9 text-gray-600 font-medium leading-relaxed">
                                {{ config('spark.billables.user.plans.2.short_description') }}
                            </p>
                        </div>
                        <a href="{{ config('laravel-welcome-page.pricing_button_path') }}">
                            <button class="py-4 px-9 w-full font-semibold border border-gray-300 hover:border-gray-400 rounded-xl focus:ring focus:ring-gray-50 bg-white hover:bg-gray-50 transition ease-in-out duration-200" type="button">
                                {{ __('laravel-welcome-page::pricing-v4.card_3_button_text', ['days' => config('spark.billables.user.trial_days')]) }}
                            </button>
                        </a>
                        <ul class="mt-10">
                            @foreach(config('spark.billables.user.plans.2.features') as $planFeature)
                                <li class="mb-1.5 text-gray-500 font-medium leading-normal text-center">
                                    {!! __($planFeature) !!}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

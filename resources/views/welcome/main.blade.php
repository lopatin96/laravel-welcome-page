<section class="h-full">
    <div class="relative overflow-hidden max-w-6xl h-full mx-auto">
        <div class="flex items-center justify-center h-full">
            <div class="w-full md:w-3/4 p-8 mb-20">
                <div class="inline-block mb-6 px-2 py-1 font-semibold bg-sky-200 hover:bg-sky-100 rounded-full transition ease-in-out duration-700">
                    <span
                        class="try-now flex flex-wrap items-center -m-1 text-sm cursor-pointer"
                    >
                        <a
                            href="{{ route('register') }}"
                            class="w-auto p-1"
                        >
                            {{ __('welcome.Try now') }}
                        </a>
                        <div class="w-auto p-1">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.66667 3.41675L12.75 7.50008M12.75 7.50008L8.66667 11.5834M12.75 7.50008L2.25 7.50008" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </span>
                </div>
                <h1 class="mb-6 text-3xl md:text-3xl lg:text-4xl font-extrabold font-heading">
                    <span class="bg-black text-white text-5xl md:text-6xl lg:text-6xl">
                        <span class="relative z-30">{!! __('welcome.Scrum') !!}</span>
                        <span class="relative z-20">{{ __('welcome.Poker') }}</span><br>
                    </span>
                    <span class="bg-black text-white">{{ __('welcome.for') }} @include('components.typed')</span>
                </h1>
                <p class="mb-10 md:mb-24 text-lg md:max-w-md selection:bg-black selection:text-white">
                    {{ __('welcome.Estimating the complexity and volume of tasks has never been so trivially simple and enjoyable.') }}
                </p>
                <div class="flex flex-col sm:flex-row space-y-5 sm:space-y-0 items-center">
                    <a
                        href="{{ route('register') }}"
                        class="inline-block md:w-96 text-center py-4 px-6 w-full text-white font-semibold rounded-xl focus:ring focus:outline-none focus:ring-red-300 bg-red-500 hover:bg-red-600 transition ease-in-out duration-200 select-none"
                    >
                        {{ __('welcome.Start new game') }}
                    </a>
                    <a
                        href="{{ route('register') }}"
                        class="text-center sm:text-left cursor-pointer try-now py-4 px-9 w-full font-semibold hover:underline transition ease-in-out duration-200 select-none"
                    >
                        {{ __('welcome.Create an account') }}
                    </a>
                </div>
            </div>
            <div class="hidden sm:block relative w-full md:w-1/4 p-8">
                <lottie-player
                    src="{{ asset('images/card-game.json') }}"
                    background="transparent"
                    speed="0.5"
                    loop
                    autoplay
                    style="width: 550px; height: 550px; position: absolute; top: -200px; right: 10px;"
                ></lottie-player>
            </div>
        </div>
    </div>
</section>

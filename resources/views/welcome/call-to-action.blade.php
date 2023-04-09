<section class="relative py-28 bg-gray-50 bg-gradient-to-r from-zinc-100 to-sky-300 animate-gradient-x overflow-hidden">
    <div class="relative container px-4 max-w-7xl mx-auto">
        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-1/2 p-8">
                <h2 class="mb-5 text-6xl md:text-7xl selection:bg-black selection:text-white font-bold tracking-px-n leading-tight">
                    {{ __('welcome.Ready to get started?') }}
                </h2>
                <p class="font-medium md:max-w-md selection:bg-black selection:text-white">
                    {!! __('welcome.98% users love Planning Poker. Perhaps you are one of them?') !!}
                </p>
            </div>
            <div class="w-full md:w-1/2 p-8">
                <div class="flex flex-wrap ml-auto md:w-64 -m-2">
                    <div class="w-full p-2">
                        <a href="{{ route('register') }}">
                            <button
                                class="py-4 px-6 w-full font-medium rounded-xl shadow-6xl focus:ring focus:outline-none focus:ring-gray-500 bg-black text-white hover:bg-gray-900 transition ease-in-out duration-200 select-none text-center"
                                type="button"
                            >
                                {{ __('welcome.Start a new game for free now') }}
                            </button>
                        </a>
                    </div>
                    <div class="w-full p-2 select-none">
                        <a href="mailto:{{ config('mail.support') }}">
                            <button class="inline-flex items-center justify-center py-4 px-6 w-full text-white font-medium border border-white border-opacity-60 hover:border-opacity-80 rounded-xl focus:ring focus:ring-white focus:ring-opacity-40 bg-transparent hover:bg-black hover:bg-opacity-5 transition ease-in-out duration-200" type="button">
                                <svg class="mr-2.5" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.75 3.75C2.75 2.92157 3.42157 2.25 4.25 2.25H6.70943C7.03225 2.25 7.31886 2.45657 7.42094 2.76283L8.5443 6.13291C8.66233 6.48699 8.50203 6.87398 8.1682 7.0409L6.47525 7.88737C7.30194 9.72091 8.77909 11.1981 10.6126 12.0247L11.4591 10.3318C11.626 9.99796 12.013 9.83767 12.3671 9.9557L15.7372 11.0791C16.0434 11.1811 16.25 11.4677 16.25 11.7906V14.25C16.25 15.0784 15.5784 15.75 14.75 15.75H14C7.7868 15.75 2.75 10.7132 2.75 4.5V3.75Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span>
                                    {{ __('welcome.Book a call') }}
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

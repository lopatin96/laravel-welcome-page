<section
    id="how-it-works"
    class="py-24 bg-white"
>
    <div class="container px-4 max-w-7xl mx-auto">
        <div class="text-center space-y-5 mb-20">
            <h2 class="text-5xl sm:text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-none">
                {{ __('welcome.How it works?') }}
            </h2>
            <p class="text-gray-400 font-medium text-xl leading-relaxed">
                {{ __('welcome.Start Your Story Estimates in 3 Easy Steps') }}
            </p>
        </div>
        <div class="flex flex-wrap md:-m-3">
            <div class="w-full md:w-1/3 mb-32 md:p-3">
                <div class="pt-11 text-center bg-gray-100 h-96 rounded-3xl">
                    <div class="px-5">
                        <h3 class="mb-3 text-4xl font-bold font-heading leading-normal">{{ __('welcome.Create a game') }}</h3>
                        <p class="mb-10 text-gray-400 font-medium leading-relaxed">{!! __('welcome.Start new game right now') !!}</p>
                    </div>
                    <img
                        class="mx-auto h-48 object-cover rounded-3xl transform hover:translate-y-3 transition ease-in-out duration-1000"
                        src="{{ asset('images/pp/businessmans-hand-holding-question-mark-ai.png') }}"
                        alt="businessmans hand holding question mark"
                        loading="lazy"
                    >
                </div>
            </div>
            <div class="w-full md:w-1/3 mb-32 md:p-3">
                <div class="pt-11 text-center bg-gray-100 h-96 rounded-3xl">
                    <div class="px-5">
                        <h3 class="mb-3 text-4xl font-bold font-heading leading-normal">{{ __('welcome.Invite a team') }}</h3>
                        <p class="mb-10 text-gray-400 font-medium leading-relaxed">{{ __('welcome.Share your game’s unique link') }}</p>
                    </div>
                    <img
                        class="mx-auto h-48 object-cover rounded-3xl transform hover:translate-y-3 transition ease-in-out duration-1000"
                        src="{{ asset('images/pp/hand-of-postman-putting-letter-or-envelope-into-open-mailbox-ai.png') }}"
                        alt="hand of postman putting letter into open mailbox"
                        loading="lazy"
                    >
                </div>
            </div>
            <div class="w-full md:w-1/3 mb-32 md:p-3">
                <div class="pt-11 text-center bg-gray-100 h-96 rounded-3xl">
                    <div class="px-5">
                        <h3 class="mb-3 text-4xl font-bold font-heading leading-normal">{{ __('welcome.Vote') }}</h3>
                        <p class="mb-10 text-gray-400 font-medium leading-relaxed">{{ __('welcome.Play scrum poker online') }}</p>
                    </div>
                    <img
                        class="mx-auto h-48 object-cover rounded-3xl transform hover:translate-y-3 transition ease-in-out duration-1000"
                        src="{{ asset('images/pp/hand-taking-tissue-out-of-box.png') }}"
                        alt="screen"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>
    </div>
</section>

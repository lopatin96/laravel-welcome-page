<section
    id="faq"
    class="relative pt-24 pb-28 bg-gray-50 overflow-hidden"
>
    <div class="relative container px-4 mx-auto">
        <div class="md:max-w-4xl mx-auto">
            <p class="mb-7 text-sm text-sky-600 text-center font-semibold uppercase tracking-px">
                {{ __('welcome.Have any questions?') }}
            </p>
            <h2 class="mb-16 text-4xl md:text-5xl xl:text-6xl text-center font-bold font-heading tracking-px-n leading-none">
                {{ __(('welcome.Frequently Asked Questions')) }}
            </h2>

            <div class="mb-11 flex flex-col space-y-4">
                <x-faq-card
                    :open="true"
                    :question="'What is Planning Poker?'"
                    :answer="'Planning Poker is an agile estimation technique used by teams of developers, project managers and tech leads to arrive at consensus-based estimates of effort quickly and accurately. It combines elements of scrum, user stories, and relative estimation to provide a structured approach to estimating software development tasks. By using cards with values or story points, team members are able to collaboratively come up with estimates that everyone can agree on.'"
                />

                <x-faq-card
                    :open="false"
                    :question="'Is it free? Can I use the service right now?'"
                    :answer="'Oh, sure. Right now you can register for free and use the service for your needs. We also have a paid subscription that will expand the boundaries of using the service, for example, the limit on the number of active links will be removed and much more.'"
                />
            </div>

            <p class="text-gray-600 text-center font-medium">
                <span>{{ __('welcome.Still have any questions?') }}</span>
                <a
                    class="text-link font-bold"
                    href="mailto:{{ config('mail.support') }}"
                >
                    {{ __('Contact Us') }}
                </a>
            </p>
        </div>
    </div>
</section>

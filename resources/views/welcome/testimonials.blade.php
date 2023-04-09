<section
    id="testimonials"
    class="relative pt-24 pb-32 bg-white"
>
    <span class="hidden absolute bg-radial-gradient-blue opacity-[.50] pointer-events-none lg:inline-flex left-[50%] top-[100px] w-[400px] h-[400px]"></span>

    <div class="relative container px-4 max-w-6xl mx-auto">
        <div class="flex flex-wrap justify-between items-end -m-2 mb-12">
            <div class="w-auto p-2">
                <h2 class="text-5xl md:text-6xl font-bold font-heading tracking-px-n leading-tight">
                    {{ __('welcome.Customers love Planning Poker') }}
                </h2>
            </div>
        </div>
        <div class="flex flex-wrap -m-2">
            <x-testimonial-card
                :title="'I love Planning Poker'"
                :body="'I have been using Planning Poker for our agile development team and it has been a great success. It’s easy to use, provides great visibility into the estimation process, and helps us create better estimates faster than ever before. I would highly recommend it to any agile development team!'"
                :author="'Margaret Green - Tech Lead'"
            />

            <x-testimonial-card
                :title="'A great tool for teams of all sizes'"
                :body="'I recently started using Planning Poker and it has been a real game changer for our team. We can now rapidly estimate issues in real-time, and get valuable feedback from other members without having to wait for lengthy meetings. The process of voting is also very intuitive and straightforward, making it a great tool for teams of all sizes.'"
                :author="'Jeffrey Barnes - CEO'"
            />

            <x-testimonial-card
                :title="'Easy to use and integrates'"
                :body="'Planning Poker has been an excellent addition to our JIRA workflow. It’s easy to use and integrates seamlessly with our project management system. We no longer have to worry about manually adding up hours spent on tasks — Planning Poker does it for us!'"
                :author="'Erica Parker - Project Manager'"
            />

        </div>
    </div>
</section>

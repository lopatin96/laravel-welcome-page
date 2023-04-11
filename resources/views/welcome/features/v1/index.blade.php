<section
    id="features"
    class="relative py-32 bg-white overflow-hidden"
>
    <span class="hidden absolute bg-radial-gradient-blue opacity-[.50] pointer-events-none lg:inline-flex right-[20%] top-[30px] w-[500px] h-[500px]"></span>

    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap items-center -m-8">
            <div class="w-full md:w-1/2 p-8">
                <h2 class="mb-6 text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-tight">
                    {{ __('laravel-welcome-page::features-v1.title') }}
                </h2>
                <p class="font-sans text-lg text-gray-900 leading-relaxed md:max-w-lg">
                    {{ __('laravel-welcome-page::features-v1.text') }}
                </p>
            </div>
            <div class="w-full md:w-1/2 p-8">
                <img
                    class="transform hover:-translate-y-16 transition ease-in-out duration-1000"
                    src="{{ config('laravel-welcome-page.features-v1_image') }}"
                    alt="Feature image"
                    loading="lazy"
                >
            </div>
        </div>
    </div>
</section>

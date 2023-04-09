<section
    id="features"
    class="pt-12 pb-12 bg-white"
>
    <div class="container px-4 mx-auto py-10">
        <h2 class="mb-5 text-5xl md:text-7xl text-center font-bold font-heading tracking-px-n leading-tight">
            {{ __('welcome.What are «Features»?') }}
        </h2>
        <p class="mb-20 text-lg text-gray-400 text-center font-medium md:max-w-lg mx-auto">
           {{ __('welcome.Features are additional properties that you can add to your link. You can also combine them.') }}
        </p>

        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3 p-8">
                <div class="relative text-center">
                    <img
                        class="hidden md:block absolute -right-40 top-8"
                        src="{{ asset('flaro-assets/images/how-it-works/line4.svg') }}"
                        alt="line"
                        loading="lazy"
                    >
                    <div class="relative w-14 h-14 mb-10 mx-auto text-2xl font-bold font-heading bg-indigo-100 rounded-full">
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59"/>
                            </svg>
                        </div>
                    </div>
                    <div class="md:max-w-xs mx-auto">
                        <h3 class="mb-5 font-heading text-xl font-bold font-heading leading-normal">
                            {{ __('features.' . $features[App\Enums\FeatureType::Clicks->value]->title) }}
                        </h3>
                        <p class="font-sans text-gray-400">
                            {{ __('features.' . $features[App\Enums\FeatureType::Clicks->value]->description) }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 p-8">
                <div class="relative text-center">
                    <img
                        class="hidden md:block absolute -right-40 top-8"
                        src="{{ asset('flaro-assets/images/how-it-works/line4.svg') }}"
                        alt="line"
                        loading="lazy"
                    >
                    <div class="relative w-14 h-14 mb-10 mx-auto text-2xl font-bold font-heading bg-indigo-600 rounded-full">
                        <img
                            class="absolute top-0 left-0"
                            src="{{ asset('flaro-assets/images/how-it-works/gradient.svg') }}"
                            alt="gradient"
                            loading="lazy"
                        >
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                 class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                        </div>
                    </div>
                    <div class="md:max-w-xs mx-auto">
                        <h3 class="mb-5 font-heading text-xl font-bold font-heading leading-normal">
                            {{ __('features.' . $features[App\Enums\FeatureType::ExpiryDate->value]->title) }}
                        </h3>
                        <p class="font-sans text-gray-400">
                            {{ __('features.' . $features[App\Enums\FeatureType::ExpiryDate->value]->description) }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 p-8">
                <div class="text-center">
                    <div class="relative w-14 h-14 mb-10 mx-auto text-2xl font-bold font-heading bg-indigo-100 rounded-full">
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5"/>
                            </svg>
                        </div>
                    </div>
                    <div class="md:max-w-xs mx-auto">
                        <h3 class="mb-5 font-heading text-xl font-bold font-heading leading-normal">
                            {{ __('features.' . $features[App\Enums\FeatureType::Notifications->value]->title) }}
                        </h3>
                        <p class="font-sans text-gray-400">
                            {{ __('features.' . $features[App\Enums\FeatureType::Notifications->value]->description) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap mt-10">
            <div class="w-full md:w-1/3 p-8">
                <div class="relative text-center">
                    <img
                        class="hidden md:block absolute -right-40 top-8"
                        src="{{ asset('flaro-assets/images/how-it-works/line4.svg') }}"
                        alt="line"
                        loading="lazy"
                    >
                    <div class="relative w-14 h-14 mb-10 mx-auto text-2xl font-bold font-heading bg-indigo-100 rounded-full">
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                 stroke-width="1.5" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="md:max-w-xs mx-auto">
                        <h3 class="mb-5 font-heading text-xl font-bold font-heading leading-normal">
                            {{ __('features.' . $features[App\Enums\FeatureType::Password->value]->title) }}
                        </h3>
                        <p class="font-sans text-gray-400">
                            {{ __('features.' . $features[App\Enums\FeatureType::Password->value]->description) }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 p-8">
                <div class="relative text-center">
                    <img
                        class="hidden md:block absolute -right-40 top-8"
                        src="{{ asset('flaro-assets/images/how-it-works/line4.svg') }}"
                        alt="line"
                        loading="lazy"
                    >
                    <div class="relative w-14 h-14 mb-10 mx-auto text-2xl font-bold font-heading bg-indigo-600 rounded-full">
                        <img
                            class="absolute top-0 left-0"
                            src="{{ asset('flaro-assets/images/how-it-works/gradient.svg') }}"
                            alt="gradient"
                            loading="lazy"
                        >
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13"/>
                            </svg>
                        </div>
                    </div>
                    <div class="md:max-w-xs mx-auto">
                        <h3 class="mb-5 font-heading text-xl font-bold font-heading leading-normal">
                            {{ __('features.' . $features[App\Enums\FeatureType::AttachFile->value]->title) }}
                        </h3>
                        <p class="font-sans text-gray-400">
                            {{ __('features.' . $features[App\Enums\FeatureType::AttachFile->value]->description) }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 p-8">
                <div class="text-center">
                    <div class="relative w-14 h-14 mb-10 mx-auto text-2xl font-bold font-heading bg-indigo-100 rounded-full">
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12"/>
                            </svg>
                        </div>
                    </div>
                    <div class="md:max-w-xs mx-auto">
                        <h3 class="mb-5 font-heading text-xl font-bold font-heading leading-normal">
                            {{ __('features.' . $features[App\Enums\FeatureType::TermsAndConditions->value]->title) }}
                        </h3>
                        <p class="font-sans text-gray-400">
                            {{ __('features.' . $features[App\Enums\FeatureType::TermsAndConditions->value]->description) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <p class="md:space-x-1 space-y-1 md:space-y-0 mb-4">
            <button
                class="animate-pulse block mx-auto w-[300px] mt-14 text-center py-4 px-6 w-full text-black font-semibold rounded-xl bg-indigo-50 hover:bg-indigo-100 transition ease-in-out duration-200 select-none"
                type="button"
                data-te-collapse-init
                data-te-target="#collapse-features"
                aria-expanded="false"
                aria-controls="collapse-features"
                onclick="window.scrollBy({
                  top: 520,
                  behavior: 'smooth'
                });"
            >
                {{ __('welcome.See All Features') }}
            </button>
        </p>
        <div
            data-te-collapse-item
            class="!visible hidden"
            id="collapse-features"
        >
            <div class="flex flex-wrap -m-8 mt-10">
                <div class="w-full md:w-1/3 p-8">
                    <div class="relative text-center">
                        <img
                            class="hidden md:block absolute -right-40 top-8"
                            src="{{ asset('flaro-assets/images/how-it-works/line4.svg') }}"
                            alt="line"
                            loading="lazy"
                        >
                        <div class="relative w-14 h-14 mb-10 mx-auto text-2xl font-bold font-heading bg-indigo-100 rounded-full">
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 013.75 9.375v-4.5zM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5zM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0113.5 9.375v-4.5z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M6.75 6.75h.75v.75h-.75v-.75zM6.75 16.5h.75v.75h-.75v-.75zM16.5 6.75h.75v.75h-.75v-.75zM13.5 13.5h.75v.75h-.75v-.75zM13.5 19.5h.75v.75h-.75v-.75zM19.5 13.5h.75v.75h-.75v-.75zM19.5 19.5h.75v.75h-.75v-.75zM16.5 16.5h.75v.75h-.75v-.75z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="md:max-w-xs mx-auto">
                            <h3 class="mb-5 font-heading text-xl font-bold font-heading leading-normal">
                                {{ __('features.' . $features[App\Enums\FeatureType::QrCode->value]->title) }}
                            </h3>
                            <p class="font-sans text-gray-400">
                                {{ __('features.' . $features[App\Enums\FeatureType::QrCode->value]->description) }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/3 p-8">
                    <div class="relative text-center">
                        <img
                            class="hidden md:block absolute -right-40 top-8"
                            src="{{ asset('flaro-assets/images/how-it-works/line4.svg') }}"
                            alt="line"
                            loading="lazy"
                        >
                        <div class="relative w-14 h-14 mb-10 mx-auto text-2xl font-bold font-heading bg-indigo-600 rounded-full">
                            <img
                                class="absolute top-0 left-0"
                                src="{{ asset('flaro-assets/images/how-it-works/gradient.svg') }}"
                                alt="gradient"
                                loading="lazy"
                            >
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" class="w-6 h-6 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>
                                </svg>
                            </div>
                        </div>
                        <div class="md:max-w-xs mx-auto">
                            <h3 class="mb-5 font-heading text-xl font-bold font-heading leading-normal">
                                {{ __('features.' . $features[App\Enums\FeatureType::Captcha->value]->title) }}
                            </h3>
                            <p class="font-sans text-gray-400">
                                {{ __('features.' . $features[App\Enums\FeatureType::Captcha->value]->description) }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/3 p-8">
                    <div class="text-center">
                        <div class="relative w-14 h-14 mb-10 mx-auto text-2xl font-bold font-heading bg-indigo-100 rounded-full">
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                                </svg>
                            </div>
                        </div>
                        <div class="md:max-w-xs mx-auto">
                            <h3 class="mb-5 font-heading text-xl font-bold font-heading leading-normal">
                                {{ __('features.' . $features[App\Enums\FeatureType::Snapshot->value]->title) }}
                            </h3>
                            <p class="font-sans text-gray-400">
                                {{ __('features.' . $features[App\Enums\FeatureType::Snapshot->value]->description) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center flex-wrap -m-8 mt-10">
                <div class="w-full md:w-1/3 p-8">
                    <div class="relative text-center">
                        <img
                            class="hidden md:block absolute -right-40 top-8"
                            src="{{ asset('flaro-assets/images/how-it-works/line4.svg') }}"
                            alt="line"
                            loading="lazy"
                        >
                        <div class="relative w-14 h-14 mb-10 mx-auto text-2xl font-bold font-heading bg-indigo-600 rounded-full">
                            <img
                                class="invisible md:visible absolute top-0 left-0"
                                src="{{ asset('flaro-assets/images/how-it-works/gradient.svg') }}"
                                alt="gradient"
                                loading="lazy"
                            >
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                     class="w-6 h-6 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                                </svg>
                            </div>
                        </div>
                        <div class="md:max-w-xs mx-auto">
                            <h3 class="mb-5 font-heading text-xl font-bold font-heading leading-normal">
                                {{ __('features.' . $features[App\Enums\FeatureType::Random->value]->title) }}
                            </h3>
                            <p class="font-sans text-gray-400">
                                {{ __('features.' . $features[App\Enums\FeatureType::Random->value]->description) }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/3 p-8">
                    <div class="relative text-center">
                        <div class="relative w-14 h-14 mb-10 mx-auto text-2xl font-bold font-heading bg-indigo-600 rounded-full">
                            <img
                                class="hidden md:block absolute top-0 left-0"
                                src="{{ asset('flaro-assets/images/how-it-works/gradient.svg') }}"
                                alt="gradient"
                                loading="lazy"
                            >
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" class="w-6 h-6 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="md:max-w-xs mx-auto">
                            <h3 class="mb-5 font-heading text-xl font-bold font-heading leading-normal">
                                {{ __('features.' . $features[App\Enums\FeatureType::Select->value]->title) }}
                            </h3>
                            <p class="font-sans text-gray-400">
                                {{ __('features.' . $features[App\Enums\FeatureType::Select->value]->description) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

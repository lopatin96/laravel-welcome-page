<?php

return [
    'header_path' => 'layouts.header',
    'footer_path' => 'layouts.footer',

    // Colors; Add all values to tailwind.config.js as `safelist` under `module.exports`
    'gradient_from' => 'from-zinc-100',
    'gradient_to' => 'to-sky-300',

    'text_color_primary' => 'text-sky-600',
    'text_color_secondary' => 'text-sky-300',

    'bg_color_primary' => 'bg-sky-600',
    'bg_color_secondary' => 'bg-sky-300',

    'main_button_color' => 'bg-red-500',

    // sections
    'sections' => [
        'main' => 'v1',
        'others' => [
            'how-it-works' => 'v1',
            'call-to-action' => 'v1',
            'testimonials' => 'v1',
            'pricing' => 'v1',
            'faq' => 'v1',
        ]
    ],

    // main-v1
    'main-v1_upper_title_path' => '/register',
    'main-v1_primary_button_path' => '/register',
    'main-v1_secondary_button_path' => '/register',

    'main-v1_lottie_src' => '<images/...json>',
    'main-v1_lottie_speed' => 0.75,
    'main-v1_lottie_width' => 550,
    'main-v1_lottie_height' => 550,
    'main-v1_lottie_top' => -200,
    'main-v1_lottie_right' => 10,

    // how-it-works-v1
    'how_it_works-v1_step_1_image' => '<images/...png>',
    'how_it_works-v1_step_2_image' => '<images/...png>',
    'how_it_works-v1_step_3_image' => '<images/...png>',

    // call-to-action-v1
    'call_to_action-v1_primary_button_path' => '/register',
    'call_to_action-v1_secondary_button_path' => 'mailto:' . config('mail.support'),

    // pricing-v1
    'pricing-v1_button_path' => '/billing'
];
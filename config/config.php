<?php

return [
    'header_path' => 'layouts.header',
    'footer_path' => 'layouts.footer',

    // Colors; Add all values to tailwind.config.js as `safelist` under `module.exports`
    'gradient_from' => 'from-zinc-100',
    'gradient_to' => 'to-sky-300',

    'text_color_primary' => 'text-sky-600',
    'text_color_primary_hex' => '#0284c7',
    'text_color_secondary' => 'text-sky-300',
    'text_color_secondary_hex' => '#7dd3fc',

    'bg_color_primary' => 'bg-sky-600',
    'bg_color_secondary' => 'bg-sky-300',

    'main_button_color' => 'bg-red-500',

    // sections
    'sections' => [
        'main' => 'v1',
        'others' => [
//            'how-it-works' => 'v1',
            'call-to-action' => 'v3',
//            'testimonials' => 'v3',
//            'pricing' => 'v5',
//            'faq' => 'v1',
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

    // call-to-action
        // v1
        'call_to_action-v1_primary_button_path' => '/register',
        'call_to_action-v1_secondary_button_path' => 'mailto:' . config('mail.support'),

        // v2
        'call_to_action-v2_button_path' => '/register',
        'call_to_action-v2_avatar_1' => '<images/...png>',
        'call_to_action-v2_avatar_2' => '<images/...png>',
        'call_to_action-v2_avatar_3' => '<images/...png>',

        // v3
        'call_to_action-v3_button_path' => '/register',
        'call_to_action-v3_photo_1' => '<images/...png>',
        'call_to_action-v3_photo_2' => '<images/...png>',

    // pricing
    'pricing_button_path' => '/billing',

    // testimonials
        // v3
        'testimonials-v3_card_1_photo' => '<images/...png>',
        'testimonials-v3_card_1_name' => 'v3_card_1_name',
        'testimonials-v3_card_1_link' => 'v3_card_1_link',
        'testimonials-v3_card_1_time' => 'v3_card_1_time',

        'testimonials-v3_card_2_photo' => '<images/...png>',
        'testimonials-v3_card_2_name' => 'v3_card_2_name',
        'testimonials-v3_card_2_link' => 'v3_card_2_link',
        'testimonials-v3_card_2_time' => 'v3_card_2_time',

        'testimonials-v3_card_3_photo' => '<images/...png>',
        'testimonials-v3_card_3_name' => 'v3_card_3_name',
        'testimonials-v3_card_3_link' => 'v3_card_3_link',
        'testimonials-v3_card_3_time' => 'v3_card_3_time',
];
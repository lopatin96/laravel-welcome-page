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

    // Sections
    'show_how_it_works_section' => true,
    'show_call_to_action_section' => true,
    'show_testimonials_section' => true,
    'show_pricing_section' => true,
    'show_faq_section' => true,

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

    'main-v1_lottie_src' => '<images/card-game.json>',
    'main-v1_lottie_speed' => 0.75,
    'main-v1_lottie_width' => 550,
    'main-v1_lottie_height' => 550,
    'main-v1_lottie_top' => -200,
    'main-v1_lottie_right' => 10,

    // How it works
    'how_it_works_step_1_image' => 'images/pp/businessmans-hand-holding-question-mark-ai.png',
    'how_it_works_step_2_image' => 'images/pp/hand-of-postman-putting-letter-or-envelope-into-open-mailbox-ai.png',
    'how_it_works_step_3_image' => 'images/pp/hand-taking-tissue-out-of-box.png',

    // Call to action
    'call_to_action_primary_button_path' => '/register',
    'call_to_action_secondary_button_path' => 'mailto:' . config('mail.support'),
];
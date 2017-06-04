<?php

return [
    'options' => [
        [
            'name' => 'porto_text_introduction',
            'label' => 'Text introduction',
            'description' => 'Text introduction',
            'field' => 'textarea'
        ],
        [
            'name' => 'porto_service_color',
            'label' => 'Service color',
            'description' => 'Service color',
            'field' => 'select'
        ],
        [
            'name' => 'porto_icon',
            'label' => 'Icon',
            'description' => 'Icon',
            'field' => 'text'
        ]
    ],
    'types' => [
        [
            'title' => 'type.home',
            'slug' => 'home',
            'theme' => 'porto',
            'layout' => 'default',
            'view' => 'home',
            'posts' => [
                ['title' => 'Home', 'slug' => '/', 'content' => '', 'view' => 'default']
            ]
        ],
        [
            'title' => 'type.pages',
            'slug' => 'pages',
            'theme' => 'porto',
            'layout' => 'default',
            'view' => 'pages',
            'posts' => [
                ['title' => 'Contato', 'slug' => 'contato', 'content' => '', 'view' => 'contact']
            ]
        ],
        [
            'title' => 'type.blog',
            'slug' => 'blogs',
            'theme' => 'porto',
            'layout' => 'default',
            'view' => 'blogs'
        ],
        ['title' => 'type.cases', 'slug' => 'cases', 'theme' => 'porto', 'layout' => 'default', 'view' => 'cases'],
        ['title' => 'type.pages', 'slug' => 'pages', 'theme' => 'porto', 'layout' => 'default', 'view' => 'pages'],
        ['title' => 'type.segments', 'slug' => 'segments', 'theme' => 'porto', 'layout' => 'default', 'view' => 'segments'],
        [
            'title' => 'type.services',
            'slug' => 'services',
            'theme' => 'porto',
            'layout' => 'default',
            'view' => 'services',
            'options' => [
                'porto_text_introduction' => NULL,
                'porto_service_color' => 'primary,secondary,tertiary,quaternary',
                'porto_icon' => NULL
            ]
        ]
    ]
];

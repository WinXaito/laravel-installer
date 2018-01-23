<?php

return [
    'wizard' => [
        'title' => 'titre principal',

        'steps' => [
            [
                'type' => 'requirements', //requirements|permissions|standard|finish//
                'requirements' => [
                    'core' => [
                        'php' => '7.0.0',
                    ],
                    'libs' => [
                        'Openssl',
                        'Pdo',
                        'Mbstring',
                        'Tokenizer',
                        'JSON',
                        'CURL',
                    ],
                ],
            ],
            [
                'type' => 'permissions',
            ],
            [
                'type' => 'standard',
                'title' => 'Titre de la page 1',
                'subtitle' => 'Sous titre page 1',

                'groups' => [
                    [
                        'field_name' => 'APP_NAME',
                        'label_type' => 'label', //label|placeholder//
                        'label' => 'Un label',
                        'input_type' => 'text', //button|text|radio|checkbox|select*//
                        'validation' => 'required|min:3',
                    ],
                    [
                        'input_type' => 'button',
                        'button_type' => 'next', //next|install|finish//
                    ]
                ],
            ],
        ],
        [
            'type' => 'finish',
            'title' => 'Installation terminé',

            'groups' => [
                [
                    'input_type' => 'button',
                    'button_type' => 'finish',
                ]
            ]
        ]
    ],

    'requirements' => [
        'core' => [
            'name' => 'PHP',
            'min_version' => '7.0.0',
        ],
        'libs' => [
            'OpenSSL',
        ],
    ],
];
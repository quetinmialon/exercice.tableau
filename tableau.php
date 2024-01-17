<?php

return [
    // C'est bien vide ici 👀
    "users" => [
        [
            'name' => 'julien',
            'email' => 'adt@test.dev',
            'isAdmin' => false,
            'contactDetails' =>
                [
                    'address' =>
                        [
                            'adresse principale' => '2 rue jean monet',
                            'adresse secondaire' => '3 place de l\'europe'
                        ],
                    'phoneNumber' => '06.07.08.09.10',
                ],
            'id' => 1,
            'posts' => [
                'poste1' => [
                    'title' => 'coucou',
                    'excerpt' => 'coucoucoucoucou',
                    'id' => 1,
                    'comments' => [
                        [
                            'content' => 'incroyable',
                        ],
                        [
                            'content' => 'wouah',
                        ],
                    ],

                ],
                'poste2' => [
                    'title' => 'coucouille',
                    'excerpt' => 'coucoucoucoucouille',
                    'id' => 2,
                    'comments' => [
                        [
                            'content' => 'incroyable wouah',
                        ],
                        [
                            'content' => 'wouah unbelievable',
                        ],
                    ],

                ]
            ]
        ],
        [
            'name' => 'Quentin',
            'email' => 'QTN@test.dev',
            'isAdmin' => true,
            'contactDetails' =>
                [
                    'address' =>
                        [
                            'adresse principale' => '8 rue jean monet',
                            'adresse secondaire' => '14 place de l\'amerique'
                        ],
                    'phoneNumber' => '06.07.08.09.10',
                ],
            'id' => 2,
            'posts' => [
                'poste1' => [
                    'title' => 'salut',
                    'excerpt' => 'c\'est patrique',
                    'id' => 1,
                    'comments' => [
                        [
                            'content' => 'et moi bob',
                        ],
                        [
                            'content' => 'loool',
                        ],
                    ],

                ],
                'poste2' => [
                    'title' => 'à qui le dites vous',
                    'excerpt' => 'à vous',
                    'id' => 2,
                    'comments' => [
                        [
                            'content' => 'trop bien',
                        ],
                        [
                            'content' => 'lolilol',
                        ],
                    ],

                ]
            ]

        ]
    ],
];
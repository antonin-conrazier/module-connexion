<?php
return [
    // Configuration de la base de données
    'db_host' => 'localhost',
    'db_name' => 'espacemembres',
    'db_user' => 'root',
    'db_pass' => '',
    'db_port' => 3306,

    // Configuration des pages
    'default_page' => 'connexion',
    'pages' => [
        'connexion' => [
            'file' => 'connexion.php', // Fichier contenant la page
            'title' => 'Connexion', // Titre de la page pour la balise <title>
            'protected' => false, // Il faut être connecté pour accéder à la page
        ],
        'inscription' => [
            'file' => 'inscription.php',
            'title' => 'Inscription',
            'protected' => false,
        ],
        'profil' => [
            'file' => 'profil.php',
            'title' => 'Profil',
            'protected' => true,
    ]
];
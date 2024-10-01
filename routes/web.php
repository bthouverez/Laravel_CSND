<?php

use Illuminate\Support\Facades\Route;
use App\Models\Character;

/**
 * composer create-project laravel/laravel Laravel_CSND
 * composer install
 *
 * php artisan serve
 * php artisan key:generate
 *
 * php artisan make:migration nom_de_la_migration_qui_respecte_les_conventions
 * php artisan make:model NomModel
 *
 * php artisan migrate
 * php artisan migrate:fresh
 * php artisan migrate:fresh --seed
 *
 *
 * git / .gitignore
 *
 * .env / .env.example
 * /vendor : contient les briques de l'application
 *
 * Route :
 * Entrée :     type de requête HTTP
 *              URL
 * Sortie : envoie sur une certaine action
 *
 * Vue :
 * Blade : surcouche <frontend ->
 *          {{ }}   <=>  php echo htmlspecialchars()
 *
 * Base de données :
 *
 *
 */


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    $nom = 'Laforet';
    $prenom = 'Pierre';
    return view('home', compact('nom'), compact('prenom') );
});


Route::get('/characters', function () {
    $characters = Character::all();
    return view('index', compact('characters'));
});

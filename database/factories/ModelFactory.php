<?php

$factory->define(App\Abonnement::class, function (Faker\Generator $faker) {
    return [
        'uuid' => $faker->uuid,
        'details' => $faker->word,
        'clients_id' => $faker->randomNumber(),
        'compteurs_id' => $faker->randomNumber(),
    ];
});

$factory->define(App\Facture::class, function (Faker\Generator $faker) {
    return [
        'uuid' => $faker->uuid,
        'date_limite' => $faker->dateTimeBetween(),
        'details' => $faker->word,
        'montant' => $faker->randomFloat(),
        'debut_consommation' => $faker->dateTimeBetween(),
        'fin_consommation' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\Region::class, function (Faker\Generator $faker) {
    return [
        'uuid' => $faker->uuid,
        'nom' => $faker->word,
    ];
});

$factory->define(App\Role::class, function (Faker\Generator $faker) {
    return [
        'uuid' => $faker->uuid,
        'name' => $faker->name,
    ];
});

$factory->define(App\Type::class, function (Faker\Generator $faker) {
    return [
        'uuid' => $faker->uuid,
        'name' => $faker->name,
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'uuid' => $faker->uuid,
        'firstname' => $faker->firstName,
        'name' => $faker->name,
        'telephone' => $faker->word,
        'email' => $faker->safeEmail,
        'email_verified_at' => $faker->dateTimeBetween(),
        'password' => bcrypt($faker->password),
        'roles_id' => $faker->randomNumber(),
        'deleted_at' => $faker->dateTimeBetween(),
    ];
});


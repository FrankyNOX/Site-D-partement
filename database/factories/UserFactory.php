<?php

use Faker\Generator as Faker;
use App\User;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {

    $rand = rand(0,2);
    $title = [
        'M.',
        'Dr.',
        'Pr.',
    ];
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'title' => $title[$rand],
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => str_random(10),
    ];
});


$factory->define(\App\Sale::class, function (Faker $faker) {
    $rand = rand(0,10);
    $students = [
        '10',
        '20',
        '30',
        '40',
        '50',
        '60',
        '70',
        '80',
        '90',
        '95',
        '100',
    ];
    $subject = [
        '5',
        '10',
        '12',
        '15',
        '17',
        '20',
        '21',
        '22',
        '23',
        '24',
        '25',
    ];
    $avatar = [
        '/images/avartar/image0.jpg',
        '/images/avartar/image3.jpg',
        '/images/avartar/image4.jpg',
        '/images/avartar/image5.jpg',
        '/images/avartar/image6.jpg',
        '/images/avartar/image7.jpg',
        '/images/avartar/image8.jpg',
        '/images/avartar/image9.jpg',
        '/images/avartar/image10.jpg',
        '/images/avartar/image11.jpg',
        '/images/avartar/image12.jpg',

    ];
    return [
        'name' => $faker->unique()->firstName,
        'students' => $students[$rand],
        'subjects' =>$subject[$rand],
        'picture' => $avatar[$rand],
    ];
});


$factory->define(\App\Subject::class, function (Faker $faker) {
    $rand = rand(0,10);
    $avatar = [
        '/images/avartar/image0.jpg',
        '/images/avartar/image3.jpg',
        '/images/avartar/image4.jpg',
        '/images/avartar/image5.jpg',
        '/images/avartar/image6.jpg',
        '/images/avartar/image7.jpg',
        '/images/avartar/image8.jpg',
        '/images/avartar/image9.jpg',
        '/images/avartar/image10.jpg',
        '/images/avartar/image11.jpg',
        '/images/avartar/image12.jpg',

    ];
    return [
        'name' => $faker->firstName,
        'description' => $faker->sentence,
        'picture' => $avatar[$rand],
    ];
});

$factory->define(\App\Chapter::class, function (Faker $faker) {
    $rand = rand(0,10);
    $avatar = [
        '/images/avartar/image0.jpg',
        '/images/avartar/image3.jpg',
        '/images/avartar/image4.jpg',
        '/images/avartar/image5.jpg',
        '/images/avartar/image6.jpg',
        '/images/avartar/image7.jpg',
        '/images/avartar/image8.jpg',
        '/images/avartar/image9.jpg',
        '/images/avartar/image10.jpg',
        '/images/avartar/image11.jpg',
        '/images/avartar/image12.jpg',

    ];
    return [
        'name' => $faker->firstName,
        'description' => $faker->sentence,
        'picture' => $avatar[$rand],
    ];
});

$factory->define(\App\Lesson::class, function (Faker $faker) {
    $rand = rand(0,10);
    $avatar = [
        '/images/avartar/image0.jpg',
        '/images/avartar/image3.jpg',
        '/images/avartar/image4.jpg',
        '/images/avartar/image5.jpg',
        '/images/avartar/image6.jpg',
        '/images/avartar/image7.jpg',
        '/images/avartar/image8.jpg',
        '/images/avartar/image9.jpg',
        '/images/avartar/image10.jpg',
        '/images/avartar/image11.jpg',
        '/images/avartar/image12.jpg',

    ];
    return [
        'name' => $faker->firstName,
        'description' => $faker->sentence,
        'content' =>$faker->text,
        'picture' => $avatar[$rand],
    ];
});

$factory->define(\App\Comment::class, function (Faker $faker) {
    return [
        'content' =>$faker->sentence,
    ];
});

$factory->define(\App\Forum::class, function (Faker $faker) {
    $rand = rand(0,10);
    $avatar = [
        '/images/avartar/image0.jpg',
        '/images/avartar/image3.jpg',
        '/images/avartar/image4.jpg',
        '/images/avartar/image5.jpg',
        '/images/avartar/image6.jpg',
        '/images/avartar/image7.jpg',
        '/images/avartar/image8.jpg',
        '/images/avartar/image9.jpg',
        '/images/avartar/image10.jpg',
        '/images/avartar/image11.jpg',
        '/images/avartar/image12.jpg',

    ];
    return [
        'name' => $faker->firstName,
        'description' => $faker->sentence,
        'picture' => $avatar[$rand],
    ];
});

$factory->define(\App\Message::class, function (Faker $faker) {
    return [
        'content' =>$faker->sentence,
    ];
});
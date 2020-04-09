<?php

use App\User;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        User::truncate();

        $data = [];

        array_push($data, [
            'firstname'     => 'Superadmin',
            'lastname'     => 'Jiren',
            'title' => 'Pr.',
            'email'    => 'superadmin@fake.com',
            'password' => bcrypt('123456'),
            'role'     => 5,
            'active'     => 1,
            'avatar'   => 'avatar1.jpg',
        ]);

        array_push($data, [
            'firstname'     => $faker->firstName,
            'lastname'     => $faker->lastName,
            'title' => 'M.',
            'email'    => 'user@fake.com',
            'password' => bcrypt('123456'),
            'role'     => 0,
            'active'     => 1,
            'avatar'   => 'avatar2.jpg',
        ]);

        User::insert($data);

        $user = factory('App\User',30)->create();

        $sale = factory('App\Sale', 10)->create();

        $sale->each(function ($sale) use ($user) {
            $subject = factory('App\Subject',05)->create([
                'sale_id' => $sale->id,
                'user_id'=> function () use ($user) {
                    return $user->random()->id;},
            ]);
            $subject->each(function ($subject) use ($user) {
                $forum = factory('App\Forum',01)->create([
                    'subject_id' => $subject->id
                ]);
                $forum->each(function ($forum) use ($user){
                    factory('App\Message',05)->create([
                        'user_id'=> function () use ($user) {
                            return $user->random()->id;},
                        'forum_id' => $forum->id,
                    ]);
                });
            });
            $subject->each(function ($subject) use ($user) {
                $chapter = factory('App\Chapter', 04)->create([
                    'subject_id'=> $subject->id,
                ]);
                $chapter->each(function ($chapter) use ($user){
                    $lesson = factory('App\Lesson', 05)->create([
                        'chapter_id'=> $chapter->id,
                    ]);
                    $lesson->each(function ($lesson) use ($user){
                        factory('App\Comment',05)->create([
                            'user_id'=> function () use ($user) {
                                return $user->random()->id;},
                            'lesson_id'=> $lesson->id,
                        ]);
                    });
                });
            });
        });



    }
}

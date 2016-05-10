<?php

use Illuminate\Database\Seeder;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $courseCategoryArr = [
            ['name' => 'Php and Js'],
            ['name' => 'Java' ]
        ];


        foreach( $courseCategoryArr as $courseCategory ) {

            $name = $courseCategory['name'];
            \App\Models\CourseCategory::create([
                'name' => $name,
                'slug' => str_slug( $name )
            ]);
        }
    }
}

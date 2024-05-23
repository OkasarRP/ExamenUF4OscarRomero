<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Course;
use App\models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
         // Crear productos
         $course1 = Course::create([
            'name' => 'SMIX1',
            'price' => 1000.0,

        ]);
        $course2 = Course::create([
            'name' => 'SMIX2',
            'price' => 1000.0,

        ]);
        $course3 = Course::create([
            'name' => 'DAW1',
            'price' => 1000.0,

        ]);
        $course4 = Course::create([
            'name' => 'DAW2',
            'price' => 1000.0,
        ]);
        $course5 = Course::create([
            'name' => 'CAI',
            'price' => 1000.0,


        ]);

        // Crear proveedores
        for($i = 0; $i < 2; $i++) {
            $student = Student::create([
                'name' => 'Student '. $i,
                'email' => 'Student'. $i. '@smix1.com',
                'birthDate' => '07/04/2000',
                'course_id' => $course1->id,
            ]);
        }
        for($i = 0; $i < 2; $i++) {
            $student = Student::create([
                'name' => 'Student '. $i,
                'email' => 'Student'. $i. '@smix2.com',
                'birthDate' => '07/04/2000',
                'course_id' => $course2->id,
            ]);
        }
        for($i = 0; $i < 2; $i++) {
            $student = Student::create([
                'name' => 'Student '. $i,
                'email' => 'Student'. $i. '@daw1.com',
                'birthDate' => '07/04/2000',
                'course_id' => $course3->id,
            ]);
        }
        for($i = 0; $i < 2; $i++) {
            $student = Student::create([
                'name' => 'Student '. $i,
                'email' => 'Student'. $i. '@daw2.com',
                'birthDate' => '07/04/2000',
                'course_id' => $course4->id,
            ]);
        }
        for($i = 0; $i < 2; $i++) {
            $student = Student::create([
                'name' => 'Student '. $i,
                'email' => 'Student'. $i. '@cai.com',
                'birthDate' => '07/04/2000',
                'course_id' => $course5->id,
            ]);
        }


    }
}

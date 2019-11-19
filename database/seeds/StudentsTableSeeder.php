<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Student;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_user = Role::where('name', 'user')->first();

      foreach ($role_user->users as $user){
        $student = new Student();

        $student->address = "Main Street";
        $student->phone = '0862120692';
        $student->user_id = $user->id;
        $student->save();
    }
}
}

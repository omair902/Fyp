<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class SuperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User;
        $user->name='super';
        $user->email='super@gmail.com';
        $user->password=bcrypt('password');
        $user->save();

        $user->assignRole('admin');
    }
}

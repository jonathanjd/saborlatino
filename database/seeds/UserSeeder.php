<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  
        $user = new User();
        $user->name = 'Developer';
        $user->email = 'developer@example.com';
        $user->password = bcrypt('12345678');
        $user->save();

        $user = new User();
        $user->name = 'Client';
        $user->email = 'client@example.com';
        $user->password = bcrypt('12345678');
        $user->save();

    }
}

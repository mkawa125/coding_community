<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'Dahabu saidi',
           'username' => 'Dahabu saidi',
           'first_name' => 'Dahabu saidi',
           'surname' => 'Dahabu saidi',
           'gender' => 'MALE',
           'phone_number' => '0717495198',
           'email' => 'dahabusaidi@gmail.com',
           'password' => bcrypt('123456789'),
           'location' => 'Tanzania',
        ]);
    }
}

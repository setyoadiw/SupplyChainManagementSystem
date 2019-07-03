<?php

use Illuminate\Database\Seeder;
use App\User;   
use App\Vendors;   
use App\rfq;   


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User;
        $user->name = "Admin";
        $user->email = "admin@admin.com";
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = "setyo";
        $user->email = "setyo@gmail.com";
        $user->password = Hash::make('password');
        $user->save();

        // $user = new Vendors;
        // $user->name = "setyo";
        // $user->email = "setyo@gmail.com";
        // $user->password = Hash::make('password');
        // $user->save();
    }
}

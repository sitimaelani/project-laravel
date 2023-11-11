<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profile;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(User $user, Profile $profile): void
    {
        //
        $profile->bio       = 'Karawang';
        $profile->alamat    = 'Karawang';
        $profile->umur      = 17;
        $profile->save();

        $user::create([
        'name'         => 'Maelani',
        'email'        => 'maelani@gmail.com',
        'password'     => Hash::make('12345678'),
        'profile_id'   => $profile->id,
        'role_id'      => 2,
        ]);
    }
}

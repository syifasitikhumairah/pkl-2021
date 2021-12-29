<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        // $user = new User();
        // $user->name = 'Syifa Siti Khumairah';
        // $user->email = 'admin@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->save();

        // $user = new User();
        // $user->name = 'Syifa Siti';
        // $user->email = 'syifasiti@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->save();

        // $user = new User();
        // $user->name = 'Syifask';
        // $user->email = 'syifask@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->save();

        // $user = new User();
        // $user->name = 'Risma Fadila';
        // $user->email = 'risma@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->save();

        // $user = new User();
        // $user->name = 'Ike Vadila';
        // $user->email = 'ike@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->save();

        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'User Administrator'
        ]);

        $pengguna = Role::create([
            'name' => 'pengguna',
            'display_name' => 'User Biasa'
        ]);

        $user = new User();
        $user->name = 'Syifa Siti Khumairah';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $pengunjung = new User();
        $pengunjung->name = 'Pengunjung';
        $pengunjung->email = 'pengunjung@gmail.com';
        $pengunjung->password = Hash::make('12345');
        $pengunjung->save();

        $user->attachRole($admin);
        $pengunjung->attachRole($pengguna);

    }
}

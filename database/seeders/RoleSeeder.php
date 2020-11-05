<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Roles;
        $user->fill([
            'name'      => 'admin',
        ]);
        $user->save();
        /* ----author */
        $user = new Roles;
        $user->fill([
            'name'      => 'author',
        ]);
        $user->save();
        /* ---User--- */
        $user = new Roles;
        $user->fill([
            'name'      => 'user',
        ]);
        $user->save();
    }
}
